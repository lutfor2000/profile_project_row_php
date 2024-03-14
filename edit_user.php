<?php
session_start();
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');
   
  $id = $_GET['id']; 

  $select_user = "SELECT id,full_name, email_address, gender FROM users WHERE id = $id";
  $user_connect = mysqli_query($db_connect,$select_user);
  $user_edit_assoc = mysqli_fetch_assoc($user_connect);
?>

<div class="row">
             <div class="col-lg-5 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h3 class = "text-white">Update From</h3>
                   </div>
                    <div class="card-body">
                        <form action="user_list_update.php" method="POST">
                        <?php if(isset( $_SESSION['user_success_mess'])){?>
                              <div class = "alert alert-success">
                              <?php
                                echo $_SESSION['user_success_mess'];
                                unset($_SESSION['user_success_mess']);
                              ?>
                              </div>
                            <?php } ?>
                           <div class="form-group">
                               <label >Full Name</label>
                               <input type="hidden" name="id" value ="<?= $user_edit_assoc['id']?>">
                               <input type="hidden" class="form-control" name = "old_full_name" value = "<?= $user_edit_assoc['full_name']?>">
                               <input type="text" class="form-control" name = "full_name" value = "<?= $user_edit_assoc['full_name']?>">
                           </div>

                           <div class="form-group mt-3">
                            <label >Emali Address</label>
                            <input type="email" class="form-control" name = "email_address" value = "<?= $user_edit_assoc['email_address']?>">
                        </div>
                        
                         <div class="form-group mt-3">
                            <label for="">Gender</label><br>
                            <input type="radio" id = "male" name = "gender" value = "male" 
                              <?php
                                 if($user_edit_assoc['gender'] == "male"){
                                   echo "checked";
                                 }
                              ?>
                            >
                            <label >Male</label></br>

                            <input type="radio" id = "female" name = "gender" value = "female" 
                            <?php
                                 if($user_edit_assoc['gender'] == "female"){
                                   echo "checked";
                                 }
                              ?>
                            >

                            <label >Female</label></br>
                            <input type="radio" id = "other" name = "gender" value = "other"
                              <?php
                                 if($user_edit_assoc['gender'] == "other"){
                                   echo "checked";
                                 }
                              ?>
                            >
                            <label >Other</label>
                           
                        </div> 
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-info">Update</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
         </div>

<?php
  require_once('includes/footer-otika.php'); 
?>