<?php
  session_start();
//   require_once('includes/nav-otika.php');
  require_once('includes/header-otika.php');
  require_once('includes/db.php');
//  $email_address_login_photo = $_SESSION['email_address_login_dasboard_page'];
//  $select_profile_pic_query = "SELECT profile_image FROM users WHERE email_address = '$email_address_login_photo'";
//  $profile_image_us =  mysqli_fetch_assoc(mysqli_query($db_connect,$select_profile_pic_query));
?>

<div class="row">
             <div class="col-lg-5 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">Change Password</h5>
                   </div>
                    <div class="card-body">
                        <form action="profile_post.php" method="POST">
                           <div class="form-group mt-3">
                            <label >Old Password</label>
                            <input type="password" class="form-control" placeholder="Enter Old Password" name = "old_password">
                            <?php if(isset( $_SESSION['old_pass_messg'])){?>
                            <small class = "alert text-danger">
                              <?php
                                echo $_SESSION['old_pass_messg'];
                                unset($_SESSION['old_pass_messg']);
                              ?>
                              </small>
                              <?php }?>
                          </div>

                          <div class="form-group">
                              <label >New Password</label>
                              <input type="password" class="form-control" placeholder="Enter New Password" name = "new_password" id ="new_password">
                             <small> <input type="checkbox" class ="mt-2" onclick ="showPassword()"> Show Password</small>
                             <script>
                                  function showPassword() {
                                    var x = document.getElementById("new_password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    }else{
                                        x.type = "password";
                                    }  
                                  }
                             </script>
                          </div>

                          <div class="form-group mt-3">
                              <label >Confirm Password</label>
                              <input type="password" class="form-control" placeholder="Enter Confirm Password" name = "confirm_password">
                              <?php if(isset( $_SESSION['confirm_pass_messg'])){?>
                              <small class = "alert text-danger">
                              <?php
                                echo $_SESSION['confirm_pass_messg'];
                                unset($_SESSION['confirm_pass_messg']);
                              ?>
                              </small>
                              <?php }?>
                          </div>

                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-info" name="add">Change Your Password</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
         </div>
<!-- <?php
  require_once('includes/footer-otika.php'); 
?> -->