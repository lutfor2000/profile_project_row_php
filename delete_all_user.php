<?php
 session_start();
 require_once('includes/db.php');
 

 $user_delete_all_query = "DELETE FROM users";
 $ueser_delete_all_query_select = mysqli_query($db_connect,$user_delete_all_query);
 
 if ($ueser_delete_all_query_select) {
    $_SESSION['user_delete_all_maessege'] = "Delete All Successfull !!";
    header('location:user_list.php');
 }
 else{
     echo "Delete All Not Successfull";
 }

?>