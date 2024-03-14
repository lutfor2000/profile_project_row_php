<?php
session_start();
require_once('includes/db.php');
$picture_name = $_GET['picture_name'];
unlink("image/profile_image/".$picture_name);
$update_query = "UPDATE users SET profile_image = 'default.jpg' WHERE profile_image = '$picture_name'";
mysqli_query($db_connect, $update_query);
header('location: profile.php');
?>