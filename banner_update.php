<?php
session_start();
require_once('includes/db.php');

$id = $_POST['id'];
$banner_old_photo = $_POST['banner_old_photo'];
$banner_new_photo = $_FILES['banner_photo']['name'];

//photo New Name stert
$name_after_explode = explode(".",$banner_new_photo);
$extension = end($name_after_explode);
$banner_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
//photo New Name stert
$banner_update_query = "UPDATE banners SET banner_photo = '$banner_photo_new_name' WHERE id ='$id'";
$banner_db_connect = mysqli_query($db_connect,$banner_update_query);

if ($banner_db_connect) {
        if ($banner_photo_new_name !=''){
            move_uploaded_file($_FILES['banner_photo']['tmp_name'],"image/banner/".$banner_photo_new_name);
            unlink("image/banner/".$banner_old_photo);
        }
        $_SESSION["banner_update_mess"] = "Photo Update Successfull!";
        header('location:banners.php');
}
else{
    $_SESSION["banner_update_mess"] = "Photo Update  Unsuccessfull!";
    header('location:banners.php'); 
}


?>