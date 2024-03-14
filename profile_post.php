<?php
session_start();
require_once('includes/db.php');
$email_address = $_SESSION['email_address_login_dasboard_page'];
$encrype_password = md5($_POST['old_password']);
$password_chack_query = "SELECT COUNT(*) AS total FROM users WHERE email_address = '$email_address' AND password = '$encrype_password' ";
$password_fetch_assoc = mysqli_fetch_assoc(mysqli_query($db_connect,$password_chack_query));

if ($password_fetch_assoc['total'] == 1) {
  
    if ($_POST['new_password'] == $_POST['confirm_password']) {
        $encrype_new_password = md5($_POST['new_password']);
        $password_update_query = "UPDATE users SET password = '$encrype_new_password' WHERE email_address = '$email_address'";
        mysqli_query($db_connect,$password_update_query);
        header('location:login.php');
    }else{
        $_SESSION['confirm_pass_messg'] = "Confirm Password Not Maching!!";
        header('location:profile.php');
    }
}
else{
    $_SESSION['old_pass_messg'] = "Old Password Not Maching!!";
    header('location:profile.php');
}

?>