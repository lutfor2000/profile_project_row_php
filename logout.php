<?php
session_start();
unset( $_SESSION['login_status']);
unset( $_SESSION['email_address_login_dasboard_page']);
header('location:login.php');
?>