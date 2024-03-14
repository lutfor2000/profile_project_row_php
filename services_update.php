<?php
print_r($_POST);
session_start();
require_once('includes/db.php');

if (!$_FILES['sevice_photo']['name']) {
    $_SESSION['service_update_fail']= "Select Your Photo !!";
    header('location:service_edite.php');
    die();
 }

$id = $_POST['id'];
$service_title = $_POST['service_title'];
$service_discription = $_POST['service_discription'];
$old_sevice_photo_name = $_POST['old_sevice_photo'];
$sevice_new_photo = $_FILES['sevice_photo']['name'];
 
//photo New Name stert
$name_after_explode = explode(".",$sevice_new_photo);
$extension = end($name_after_explode);
$service_photo_new_name = time()."-".rand(1000,9999).".".$extension; 
//photo New Name stert

$service_update_query = "UPDATE services SET service_title = '$service_title',service_discription = '$service_discription',sevice_photo = '$service_photo_new_name' WHERE id ='$id'";
$service_db_connect = mysqli_query($db_connect,$service_update_query);

if ($service_db_connect) {
    if ($service_photo_new_name !='') {
        move_uploaded_file($_FILES['sevice_photo']['tmp_name'],"image/services_img/".$service_photo_new_name);
        unlink("image/services_img/".$old_sevice_photo_name);
    }

    $_SESSION['service_update_success']= " Your Photo Update Successfull!!";
    header('location:services.php');
}
?>