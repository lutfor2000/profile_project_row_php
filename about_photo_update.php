<?php
session_start();
require_once('includes/db.php');

if (!$_FILES['about_image']['name']) {
    $_SESSION['about_select_message']= "Select Your Photo !!";
    header('location:about_photo_edite.php');
    die();
 }

$id = $_POST['id'];
$old_about_image = $_POST['old_about_image'];
$about_new_photo = $_FILES['about_image']['name'];

//photo New Name stert
$name_after_explode = explode(".",$about_new_photo);
$extension = end($name_after_explode);
$about_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
//photo New Name stert

$about_update_query = "UPDATE about_photo SET about_image = '$about_photo_new_name' WHERE id ='$id'";
$about_db_connect = mysqli_query($db_connect,$about_update_query);

if ($about_db_connect){
    
    if ($about_photo_new_name !=''){

    //    $tmp_location = $_FILES['gallery_photo']['tmp_name'];
    //    $new_file_location = "image/gallary_photo/".$gallery_photo_new_name;
    //    move_uploaded_file($tmp_location,$new_file_location);

        move_uploaded_file($_FILES['about_image']['tmp_name'],"image/about_photo/".$about_photo_new_name);
        unlink("image/about_photo/".$old_about_image);
    }

   $_SESSION["about_update_mess"] = "Update Successfull!";
   header('location:about_photo.php');
} 
else {
    $_SESSION["about_update_mess"] = "Photo Update  Unsuccessfull!";
    header('location:about_photo.php'); 
}

?>