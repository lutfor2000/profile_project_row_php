<?php
 session_start();
 if (!isset( $_SESSION['login_status'])) {
    header('location:login.php');
 }
 require_once('includes/nav-otika.php');
 require_once('includes/header-otika.php');
 require_once('includes/db.php');
 // dashsboard Name massage View process
 $email_adress_session = $_SESSION['email_address_login_dasboard_page'];
 $select_name_query = "SELECT full_name FROM users WHERE email_address = '$email_adress_session'";
?>

<h2>Wellcome To Dashboard</h2>
<!-- send email message dashboard -->
<h3>Name :<?=mysqli_fetch_assoc(mysqli_query($db_connect,$select_name_query))['full_name'] ?></h3>
<h3>Email :<?=$_SESSION['email_address_login_dasboard_page'] ?></h3>
<?php
  require_once('includes/footer-otika.php'); 
?>