<?php
session_start();
require_once('includes/db.php');
//select Image start
if (!$_FILES['banner_photo']['name']) {
    $_SESSION['banner_photo_select'] = "Select Your Banner Photo !!";
    header('location:banners.php');  
    die(); 
}

$banner_photo_name = $_FILES['banner_photo']['name'];
$name_after_explode = explode(".",$banner_photo_name);
$extension = end($name_after_explode);
//select Image end

//image Upload Start
$banner_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
$tmp_location = $_FILES['banner_photo']['tmp_name'];
$new_file_location = "image/banner/".$banner_photo_new_name;
move_uploaded_file($tmp_location,$new_file_location);
//image Upload End

$banner_insert_query = "INSERT INTO banners(banner_photo) VALUES ('$banner_photo_new_name')";
mysqli_query($db_connect, $banner_insert_query);
$_SESSION['banner_success_mess'] = "Banner Item Add Successfull !!!";
header('location:banners.php');
?>