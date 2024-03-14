<?php
session_start();
require_once('includes/db.php');
$service_title = $_POST['service_title'];
$service_discription = $_POST['service_discription'];

//select Image start
if (!$_FILES['sevice_photo']['name']) {
    $_SESSION['servce_photo_select'] = "Select Your Service Photo !!";
    header('location:services.php');  
    die(); 
}

$sevice_photo_name = $_FILES['sevice_photo']['name'];
$name_after_explode = explode(".",$sevice_photo_name);
$extension = end($name_after_explode);
//select Image end

//image Upload Start
$services_image_new_name = time()."-".rand(1000,9999).".".$extension; 
$tmp_location = $_FILES['sevice_photo']['tmp_name'];
$new_file_location = "image/services_img/".$services_image_new_name;
move_uploaded_file($tmp_location,$new_file_location);
//image Upload End

$insert_query = "INSERT INTO services(service_title,service_discription,sevice_photo) VALUES ('$service_title','$service_discription','$services_image_new_name')";
mysqli_query($db_connect, $insert_query);
$_SESSION['services_success_mess'] = "Service Item Add Successfull !!!";
header('location:services.php');


?>