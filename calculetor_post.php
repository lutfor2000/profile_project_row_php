<?php
 session_start();
 if (!$_POST['first_number']) {
    $_SESSION['error']['first_number'] = "Sir Pleass Enter First Number !!"; 
    header("location:calculetor.php");
 }

 if (!$_POST['secound_number']) {
    $_SESSION['error']['secound_number'] = "Sir Pleass Enter Secound Number !!"; 
    header("location:calculetor.php");
 }
 
 if (isset($_POST['add'])) {
    $_SESSION['result'] = $_POST['first_number']+$_POST['secound_number'];
    echo $_SESSION['result'];
    header("location:calculetor.php");
 }
 elseif(isset($_POST['sub'])){
   $_SESSION['result'] = $_POST['first_number']-$_POST['secound_number'];
   header("location:calculetor.php");
 }
 elseif(isset($_POST['mul'])){
   $_SESSION['result'] = $_POST['first_number']*$_POST['secound_number'];
   header("location:calculetor.php");
 }
 elseif(isset($_POST['div'])){
   $_SESSION['result'] = $_POST['first_number']/$_POST['secound_number'];
   header("location:calculetor.php");
 }


//  echo "Add Number"." ". $_POST['first_number'] + $secound_number = $_POST['secound_number'];

?>