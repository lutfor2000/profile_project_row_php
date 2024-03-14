<?php
session_start();
require_once('includes/db.php');
$id = $_GET['id'];

$select_services_query_from = "SELECT * FROM services";
$service_photo_from_select = mysqli_fetch_assoc(mysqli_query($db_connect,$select_services_query_from))['sevice_photo'];


if (!empty($service_photo_from_select)){
    unlink("image/services_img/".$service_photo_from_select); 
}

$services_delete_from = "DELETE FROM services WHERE id = $id";
$service_data_connect = mysqli_query($db_connect,$services_delete_from);

if ($service_data_connect) {
    header('location:services.php');
}


// $update_query = "UPDATE services SET sevice_photo = '' WHERE sevice_photo = '$id'";
// mysqli_query($db_connect, $update_query);




?>