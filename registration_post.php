<?php
session_start();
 require_once('includes/db.php');

 $full_name = $_POST['full_name'];
 $email_address = $_POST['email_address'];
 $password = $_POST['password'];
 $confirm_password = $_POST['confirm_password'];
 $gender = $_POST['gender'];
 
//  if (!$_POST['full_name']) {
//    $_SESSION['reg_name_error_msg'] = "Enter Your Full Name";
//    header('location:registration.php');
//  }


 if ($password == $confirm_password) {
    $user_email_count = "SELECT COUNT(*) AS total FROM users WHERE email_address = '$email_address' ";
    $from_email_db = mysqli_query($db_connect, $user_email_count );
    $from_user_assoc = mysqli_fetch_assoc($from_email_db);
     
    if ($from_user_assoc['total'] == 0) {
      $encypt_password = md5($password);
      $insert_query = "INSERT INTO users(full_name,email_address,password,gender) VALUES ('$full_name','$email_address','$encypt_password','$gender')";
      mysqli_query($db_connect, $insert_query);
      $_SESSION['user_success_mess'] = "Registration Successfull !!!";
      header('location:registration.php');
     }
     else{
        $_SESSION['user_email_error'] = "This Email Alredy Used !!";
        header('location:registration.php');
     }
  
 }
 else{
    $_SESSION['regis_password_message'] = "Corfirm Password Not Meching !!";
    header('location:registration.php');
 }

?>