<?php
session_start();
require_once('includes/db.php');

if (!$_FILES['gallery_photo']['name']) {
   $_SESSION['gallery_file_message']="Select Your Gallary Photo !!";
   header('location:gallery.php');
   die();
}

$gallery_photo_name = $_FILES['gallery_photo']['name'];
$name_after_explode = explode(".",$gallery_photo_name);
$extension = end($name_after_explode);


//image Upload Folder Start
$gallery_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
$tmp_location = $_FILES['gallery_photo']['tmp_name'];
$new_file_location = "image/gallary_photo/".$gallery_photo_new_name;
move_uploaded_file($tmp_location,$new_file_location);
//image Upload Folder End

$gallery_insert_query = "INSERT INTO gallerys(gallery_photo) VALUES ('$gallery_photo_new_name')";
mysqli_query($db_connect, $gallery_insert_query);
$_SESSION['gellary_success_mess'] = "Gallery Item Add Successfull !!!";
header('location:gallery.php')


?>