<?php
session_start();
require_once('includes/db.php');

if (!$_FILES['jurnalist_photo']['name']) {
    $_SESSION['jurnalist_update_fail']= "Select Your Photo !!";
    header('location:jurnalist_edite.php');
    die();
 }
 
$id = $_POST['id'];
$jurnalist_title = $_POST['jurnalist_title'];
$jurnalist_sub_title = $_POST['jurnalist_sub_title'];
$jurnalist_discription = $_POST['jurnalist_discription'];
$old_jurnalist_photo = $_POST['old_jurnalist_photo'];
$jurnalist_new_photo = $_FILES['jurnalist_photo']['name'];
 
//photo New Name stert
$name_after_explode = explode(".",$jurnalist_new_photo);
$extension = end($name_after_explode);
$jurnalist_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
//photo New Name stert

$jurnalist_update_query = "UPDATE jurnalist SET jurnalist_title = '$jurnalist_title',jurnalist_sub_title = '$jurnalist_sub_title',jurnalist_discription = '$jurnalist_discription',jurnalist_photo = '$jurnalist_photo_new_name' WHERE id ='$id'";
$jurnalist_db_connect = mysqli_query($db_connect,$jurnalist_update_query);

if ($jurnalist_db_connect) {
    if ($jurnalist_photo_new_name !='') {
        move_uploaded_file($_FILES['jurnalist_photo']['tmp_name'],"image/jurnalist_image/".$jurnalist_photo_new_name);
        unlink("image/jurnalist_image/".$old_jurnalist_photo);
    }

    $_SESSION['jurnalist_update_success']= " Your Photo Update Successfull!!";
    header('location:jurnalist.php');
}

?>