<?php
session_start();
require_once('includes/db.php');
$id = $_GET['id'];
$banner_photo_name = $_GET['banner_photo'];

// $banner_photo_query = "SELECT * FROM banners";
// $banner_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect,$banner_photo_query))['banner_photo'];

if(!empty($banner_photo_name)){
    unlink("image/banner/".$banner_photo_name);
   
}


$banner_delete_from = "DELETE FROM banners WHERE id = $id";
if (mysqli_query($db_connect,$banner_delete_from)) {
    $_SESSION['banner_delete_messege'] = "Photo Delete Successfull !!";
    header('location:banners.php');
}

?>