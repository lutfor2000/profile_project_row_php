<?php
 session_start();
 require_once('includes/nav-otika.php');
 require_once('includes/header-otika.php');
 require_once('includes/db.php');
 $select_settings_query = "SELECT * FROM  text_settings";
 $settings_from_db = mysqli_query($db_connect,$select_settings_query);
?>

<div class="row">
             <div class="col-lg-6 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">General Settings</h5>
                   </div>
                    <div class="card-body">

                        <?php if(isset( $_SESSION['setting_update_message'])){?>
                        <div class="alert alert-success">
                            <?php
                            echo  $_SESSION['setting_update_message'];
                            unset( $_SESSION['setting_update_message']);
                            ?>
                        </div>
                        <?php }?>

                        <form action="settings_post.php" method="POST" >
                            <?php foreach($settings_from_db as $settings_item){?>
                          <div class="form-group mt-3">
                              <label ><?= $settings_item['setting_name']?></label></br>
                              <textarea name="<?= $settings_item['setting_name']?>" cols="50" rows="3"><?= $settings_item['setting_value']?></textarea>
                          </div>
                          <?php }?>
                        
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-info">Update Now</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
         </div>


<?php
  require_once('includes/footer-otika.php'); 
?>