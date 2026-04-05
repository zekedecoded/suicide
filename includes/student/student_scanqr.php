<?php
session_start();
require_once "../../Project1.php";
header('Content-Type: application/json');

$student_id = $_SESSION['userID'];
$qr_token = $_POST['qr_token'] ?? '';

if(!$qr_token){
    echo json_encode(['status'=>'error','message'=>'Missing QR code']);
    exit;
}

$stmt = $db->prepare("
    SELECT * FROM qr_tokens
    WHERE qr_data = ? AND is_active = 1 AND expires_at > NOW()
");
$stmt->execute([$qr_token]);
$qr = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$qr){
    echo json_encode(['status'=>'error','message'=>'Invalid or expired QR']);
    exit;
}

$amount = $qr['amount'];
$desc = $qr['description'];
$merchant_id = $qr['userID'];

// Check student wallet balance
$stmt2 = $db->prepare("SELECT balance, wallet_id FROM wallet WHERE userID = ?");
$stmt2->execute([$student_id]);
$wallet = $stmt2->fetch(PDO::FETCH_ASSOC);

if(!$wallet || $wallet['balance'] < $amount){
    echo json_encode(['status'=>'error','message'=>'Insufficient balance']);
    exit;
}

$new_balance = $wallet['balance'] - $amount;
$db->prepare("UPDATE wallet_tbl SET balance = ?, last_updated = NOW() WHERE wallet_id = ?")
   ->execute([$new_balance, $wallet['wallet_id']]);

$db->prepare("
    INSERT INTO transaction (wallet_id, merchantID, amount, date_time, description, reference)
    VALUES (?, ?, ?, NOW(), ?, ?)
")->execute([$wallet['wallet_id'], $merchant_id, $amount, $desc, "QR-$qr_token"]);

$db->prepare("UPDATE qr_tokens SET is_active = 0 WHERE qr_id = ?")->execute([$qr['qr_id']]);

echo json_encode([
    'status'=>'success',
    'amount'=>$amount,
    'desc'=>$desc,
    'new_balance'=>$new_balance
]);
?>