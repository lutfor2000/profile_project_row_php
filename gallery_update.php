<?php
session_start();
require_once('includes/db.php');

if (!$_FILES['gallery_photo']['name']) {
    $_SESSION['gallery_select_message']= "Select Your Gallary Photo !!";
    header('location:gallery_edite.php');
    die();
 }
 
$id = $_POST['id'];
$gallery_old_photo =$_POST['gallery_old_photo'];
$gallery_new_photo = $_FILES['gallery_photo']['name'];

//photo New Name stert
$name_after_explode = explode(".",$gallery_new_photo);
$extension = end($name_after_explode);
$gallery_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
//photo New Name stert

$gallery_update_query = "UPDATE gallerys SET gallery_photo = '$gallery_photo_new_name' WHERE id ='$id'";
$gallery_db_connect = mysqli_query($db_connect,$gallery_update_query);

if ($gallery_db_connect){
    
    if ($gallery_photo_new_name !=''){

    //    $tmp_location = $_FILES['gallery_photo']['tmp_name'];
    //    $new_file_location = "image/gallary_photo/".$gallery_photo_new_name;
    //    move_uploaded_file($tmp_location,$new_file_location);

        move_uploaded_file($_FILES['gallery_photo']['tmp_name'],"image/gallary_photo/".$gallery_photo_new_name);
        unlink("image/gallary_photo/".$gallery_old_photo);
    }

   $_SESSION["gallary_eidt_mess"] = "Photo Update Successfull!";
   header('location:gallery.php');
} 
else {
    $_SESSION["gallary_eidt_mess"] = "Photo Update  Unsuccessfull!";
    header('location:gallery.php'); 
}


?>