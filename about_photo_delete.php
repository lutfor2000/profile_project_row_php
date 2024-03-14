<?php
session_start();
require_once('includes/db.php');
$id = $_GET['id'];
$about_photo_name = $_GET['about_image'];

// $banner_photo_query = "SELECT * FROM banners";
// $banner_photo_name = mysqli_fetch_assoc(mysqli_query($db_connect,$banner_photo_query))['banner_photo'];

if(!empty($about_photo_name)){
    unlink("image/about_photo/".$about_photo_name);
   
}


$about_delete_from = "DELETE FROM about_photo WHERE id = $id";
if (mysqli_query($db_connect,$about_delete_from)) {
    $_SESSION['about_delete_messege'] = "Photo Delete Successfull !!";
    header('location:about_photo.php');
}

?>