<?php
session_start();
require_once('includes/db.php');

$email_address = $_POST['email_address'];
$password = md5($_POST['password']);

$user_email_count_login = "SELECT COUNT(*) AS total FROM users WHERE email_address = '$email_address' AND password = '$password' ";
$from_login_db = mysqli_query($db_connect, $user_email_count_login );
$from_user_login_assoc = mysqli_fetch_assoc($from_login_db);

if ($from_user_login_assoc['total'] == 1) {
    $_SESSION['login_status'] = "yes";
    //send to email message dashboard
    $_SESSION['email_address_login_dasboard_page'] = $email_address;
    //send to email message dashboard end
    header('location:dashboard.php'); 
}
else{
    $_SESSION['login_error_mesg'] = "Your Email or Password Wrong !!";
    header('location:login.php');
}

?>
