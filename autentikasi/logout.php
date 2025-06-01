<?php
session_start();
session_destroy();
header("Location: ../autentikasi/login.php");
exit;
?>
