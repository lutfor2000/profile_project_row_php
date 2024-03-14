<?php
session_start();
require_once('includes/db.php');
if (!$_FILES['new_profile_image']['name']) {
    $_SESSION['profile_photo_select'] = "Select Your Profile Photo !!";
    header('location:profile.php');  
    die(); 
}

$image_name = $_FILES['new_profile_image']['name'];
$name_after_explode = explode(".",$image_name);
$extension = end($name_after_explode);
$except_extensions = ['png','PNG','jpg','JPG','jpeg','JPEG'];
if(!in_array($extension, $except_extensions)){
    $_SESSION['profile_photo_extension_message'] = "This file format is not supported !!"; 
    header('location:profile.php');  
    die(); 
}

if($_FILES['new_profile_image']['size']>70000) {
    $_SESSION['profile_photo_size_message'] = "Your File shuld be less than 70kb!!"; 
    header('location:profile.php');  
    die();
}
$email_address_login_photo = $_SESSION['email_address_login_dasboard_page'];
$get_id_query = "SELECT id,profile_image FROM users WHERE email_address = '$email_address_login_photo'";
$user_id = mysqli_fetch_assoc(mysqli_query($db_connect,$get_id_query))['id'];
$db_profile_image_name = mysqli_fetch_assoc(mysqli_query($db_connect,$get_id_query))['profile_image'];

if ($db_profile_image_name != "default.jpg") {
    unlink("image/profile_image/".$db_profile_image_name);
}
//image Upload Start

$image_new_name = $user_id.".".$extension; 

$tmp_location = $_FILES['new_profile_image']['tmp_name'];
$new_file_location = "image/profile_image/".$image_new_name;
move_uploaded_file($tmp_location,$new_file_location);

//Image Upload End

//image Database Update Start
$update_query = "UPDATE users SET profile_image = '$image_new_name' WHERE email_address = '$email_address_login_photo'";
mysqli_query($db_connect,$update_query);
$_SESSION['profile_image_change'] = "Profile Picture Change Successfull!";
header('location:profile.php');
//image Database Update Start

?>