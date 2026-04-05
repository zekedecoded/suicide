<?php
ob_start();

// This is the correct path because 'includes' is in the same folder as 'index.php'
header('Location: /includes/login_page.php');

exit();
?>
