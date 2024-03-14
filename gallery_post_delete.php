<?php
session_start();
require_once('includes/db.php');
$id = $_GET['id'];
$gallery_photo_name = $_GET['gallery_photo'];

if(!empty($gallery_photo_name)){
    unlink("image/gallary_photo/".$gallery_photo_name);  
}


$gallary_delete_from = "DELETE FROM gallerys WHERE id = $id";
if (mysqli_query($db_connect,$gallary_delete_from)) {
    $_SESSION['gallery_delete_message'] = "Delete Successfull";
    header('location:gallery.php');
}

?>