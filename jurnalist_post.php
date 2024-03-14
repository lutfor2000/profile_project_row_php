<?php
session_start();
require_once('includes/db.php');
$jurnalist_title = $_POST['jurnalist_title'];
$jurnalist_sub_title = $_POST['jurnalist_sub_title'];
$jurnalist_discription = $_POST['jurnalist_discription'];

//select Image start
if (!$_FILES['jurnalist_photo']['name']) {
    $_SESSION['sjurnalist_photo_select'] = "Select Your Photo !!";
    header('location:jurnalist.php');  
    die(); 
}

$jurnalist_photo_name= $_FILES['jurnalist_photo']['name'];
$name_after_explode = explode(".",$jurnalist_photo_name);
$extension = end($name_after_explode);
//select Image end

//image Upload Start
$jurnalist_image_new_name = time()."-".rand(1000,9999).".".$extension; 
$tmp_location = $_FILES['jurnalist_photo']['tmp_name'];
$new_file_location = "image/jurnalist_image/".$jurnalist_image_new_name;
move_uploaded_file($tmp_location,$new_file_location);
//image Upload End
$jurnalist_insart_query = "INSERT INTO jurnalist(jurnalist_title,jurnalist_sub_title,jurnalist_discription,jurnalist_photo) VALUES('$jurnalist_title','$jurnalist_sub_title','$jurnalist_discription','$jurnalist_image_new_name')";
mysqli_query($db_connect, $jurnalist_insart_query);
$_SESSION['jurnalist_success_mess'] = "Jurnalist Item Add Successfull !!!";
header('location:jurnalist.php');
?>