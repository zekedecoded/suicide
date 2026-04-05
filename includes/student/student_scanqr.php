<?php
session_start();
require_once "../../Project1.php"; // $db
header('Content-Type: application/json');

$student_id = $_SESSION['userID'];
$qr_token = $_POST['qr_token'] ?? '';

if (!$qr_token) {
    echo json_encode(['status' => 'error', 'message' => 'Missing QR code']);
    exit;
}

// 1️⃣ Check QR validity
$stmt = $db->prepare("
    SELECT * FROM qr_tokens
    WHERE qr_data = ? AND is_active = 1 AND expires_at > NOW()
");
$stmt->execute([$qr_token]);
$qr = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$qr) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid or expired QR']);
    exit;
}

// 2️⃣ Get merchantID from the QR owner
$qr_userID = $qr['userID'];
$stmt2 = $db->prepare("SELECT merchantID FROM merchant WHERE userID = ?");
$stmt2->execute([$qr_userID]);
$merchant = $stmt2->fetch(PDO::FETCH_ASSOC);

if (!$merchant) {
    echo json_encode(['status' => 'error', 'message' => 'QR token does not belong to a valid merchant']);
    exit;
}

$merchantID = $merchant['merchantID'];

// 3️⃣ Set a fixed amount
$amount = 100; // fixed payment amount
$desc = 'Payment'; // description

// 4️⃣ Get student wallet
$stmt3 = $db->prepare("SELECT wallet_id, balance FROM wallet WHERE userID = ?");
$stmt3->execute([$student_id]);
$wallet = $stmt3->fetch(PDO::FETCH_ASSOC);

if (!$wallet || $wallet['balance'] < $amount) {
    echo json_encode(['status' => 'error', 'message' => 'Insufficient balance']);
    exit;
}

// 5️⃣ Deduct wallet balance
$new_balance = $wallet['balance'] - $amount;
$db->prepare("UPDATE wallet SET balance = ?, last_updated = NOW() WHERE wallet_id = ?")
   ->execute([$new_balance, $wallet['wallet_id']]);

// 6️⃣ Insert transaction
$db->prepare("
    INSERT INTO transaction (wallet_id, merchantID, amount, date_time, description, reference)
    VALUES (?, ?, ?, NOW(), ?, ?)
")->execute([$wallet['wallet_id'], $merchantID, $amount, $desc, "QR-$qr_token"]);

// 7️⃣ Deactivate QR
$db->prepare("UPDATE qr_tokens SET is_active = 0 WHERE qrID = ?")->execute([$qr['qrID']]);

// 8️⃣ Return success
echo json_encode([
    'status' => 'success',
    'amount' => $amount,
    'desc' => $desc,
    'new_balance' => $new_balance
]);