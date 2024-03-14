<?php
session_start();
require_once('includes/db.php');

$id = $_GET['id'];
$jurnalist_photo_name = $_GET['jurnalist_photo'];

if (!empty($jurnalist_photo_name)) {
   unlink("image/jurnalist_image/".$jurnalist_photo_name);
}

$jurnalist_delete_all = "DELETE FROM jurnalist WHERE id = $id";
if (mysqli_query($db_connect,$jurnalist_delete_all)) {
    $_SESSION['jurnalist_delete_message'] = "Delete Successfull";
    header('location:jurnalist.php');
}
?>