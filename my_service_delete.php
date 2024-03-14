<?php
session_start();
require_once('includes/db.php');
$id = $_GET['id'];
$my_sevice_photo = $_GET['my_sevice_photo'];

if (!empty($my_sevice_photo)){
    unlink("image/my_services_img/".$my_sevice_photo); 
}

$my_services_delete_from = "DELETE FROM my_services WHERE id = $id";
$my_service_data_connect = mysqli_query($db_connect,$my_services_delete_from);

if ($my_service_data_connect) {
    $_SESSION['my_service_delete_message'] = "Delete Successfull";
    header('location:my_services.php');
}


// $update_query = "UPDATE services SET sevice_photo = '' WHERE sevice_photo = '$id'";
// mysqli_query($db_connect, $update_query);




?>