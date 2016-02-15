<?php
session_start();
ob_start();
unset($_SESSION['session']);
session_destroy();
header("location:index.php");
ob_flush();
?>