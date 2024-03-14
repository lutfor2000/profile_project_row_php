<?php
session_start();
require_once('includes/db.php');

if (!$_FILES['my_sevice_photo']['name']) {
    $_SESSION['my_servce_photo_select'] = "Select Your Photo !!";
    header('location:my_services.php');  
    die(); 
}

if (!$_POST['my_service_title']) {
    $_SESSION['my_service_title'] = "Select Your Service Title !!";
    header('location:my_services.php');  
    die(); 
}

if (!$_POST['my_service_discription']) {
    $_SESSION['my_service_discription'] = "Select Your Service Discription !!";
    header('location:my_services.php');  
    die(); 
}

$my_service_title = $_POST['my_service_title'];
$my_service_discription = $_POST['my_service_discription'];

//select Image end
$my_sevice_photo_name = $_FILES['my_sevice_photo']['name'];
$name_after_explode = explode(".",$my_sevice_photo_name);
$extension = end($name_after_explode);
//select Image end

//image Upload Start
$my_sevice_image_new_name = time()."-".rand(1000,9999).".".$extension; 
$tmp_location = $_FILES['my_sevice_photo']['tmp_name'];
$new_file_location = "image/my_services_img/".$my_sevice_image_new_name;
move_uploaded_file($tmp_location,$new_file_location);
//image Upload End

$insert_query = "INSERT INTO my_services(my_service_title,my_service_discription,my_sevice_photo) VALUES ('$my_service_title','$my_service_discription','$my_sevice_image_new_name')";
mysqli_query($db_connect, $insert_query);
$_SESSION['my_services_success_mess'] = " My Service Item Adde Successfull !!!";
header('location:my_services.php');

?>