<?php
    session_start();
    require_once "../../connection/pdo_connection4.php";

    $user_id = $_SESSION['userID'];
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];

    $qr_token = bin2hex(random_bytes(16));

    $stmt = $con->prepare("
    INSERT INTO qr_tokens_tbl 
    (userID, qr_data, expires_at, is_active, created_at)
    VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 2 MINUTE), 1, NOW())
    ");

    $stmt->execute([$user_id, $qr_token]);

    echo $qr_token;
?>