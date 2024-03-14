<?php
session_start();
require_once('includes/db.php');
if (!$_FILES['about_image']['name']) {
    $_SESSION['gallery_file_message']="Select Your Gallary Photo !!";
    header('location:about_photo.php');
    die();
 }
 
 $about_photo_name = $_FILES['about_image']['name'];
 $name_after_explode = explode(".",$about_photo_name);
 $extension = end($name_after_explode);
 
 
 //image Upload Folder Start
 $about_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
 $tmp_location = $_FILES['about_image']['tmp_name'];
 $new_file_location = "image/about_photo/".$about_photo_new_name;
 move_uploaded_file($tmp_location,$new_file_location);
 //image Upload Folder End
 
 $about_insert_query = "INSERT INTO about_photo(about_image) VALUES ('$about_photo_new_name')";
 mysqli_query($db_connect, $about_insert_query);
 $_SESSION['gellary_success_mess'] = "Gallery Item Add Successfull !!!";
 header('location:about_photo.php')

?>