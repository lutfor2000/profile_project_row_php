<?php
  session_start();
  require_once('includes/db.php');
  foreach ($_POST as $footer_settings_name => $footer_settings_value) {
  $footer_setting_update_query = "UPDATE  footer_settings  SET footer_settings_value='$footer_settings_value' WHERE footer_settings_name='$footer_settings_name'"; 
  mysqli_query($db_connect,$footer_setting_update_query);
  $_SESSION['setting_update_message'] = "footer Setting Update Successfull !";
  }

  header('location:footer_settings.php');
?>