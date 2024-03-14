<?php
session_start();
require_once('includes/db.php');
$id = $_POST['id'];
$full_name = $_POST['full_name'];
$old_full_name = $_POST['old_full_name'];
$email_address = $_POST['email_address'];
$gender = $_POST['gender'];

$user_update_query = "UPDATE users SET full_name ='$full_name',email_address ='$email_address',gender = '$gender' WHERE id = $id";
mysqli_query($db_connect, $user_update_query);
$_SESSION['user_update_messge'] = "$old_full_name Update Successfull $full_name";
header('location:user_list.php');
?>