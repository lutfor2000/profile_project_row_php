<?php
  session_start();
  require_once('includes/db.php');
  foreach ($_POST as $setting_name => $setting_value) {
  $setting_update_query = "UPDATE text_settings SET setting_value='$setting_value' WHERE setting_name='$setting_name'"; 
  mysqli_query($db_connect,$setting_update_query);
  $_SESSION['setting_update_message'] = "Setting Update Successfull !";
  }

  header('location:settings.php');
?>