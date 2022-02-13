<?php 
session_start();
unset($_SESSION['errors']);
unset($_SESSION['register']);
session_destroy();

header('location:sign.php');
?>