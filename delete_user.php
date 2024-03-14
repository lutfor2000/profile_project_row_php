<?php
session_start();
require_once('includes/db.php');

$id = $_GET['id'];
$user_delete_query = "DELETE FROM users WHERE id = $id";
$ueser_delete_query_select = mysqli_query($db_connect,$user_delete_query);

if ($ueser_delete_query_select) {
   $_SESSION['user_delete_maessege'] = "Delete Successfull !!";
   header('location:user_list.php');
}
else{
    echo "Delete Not Successfull";
}

?>