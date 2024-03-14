<?php
 session_start();
 require_once('includes/nav-otika.php');
 require_once('includes/header-otika.php');
 require_once('includes/db.php');
 $select_footer_settings_query = "SELECT * FROM  footer_settings";
 $footer_settings_from_db = mysqli_query($db_connect,$select_footer_settings_query);

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

                        <form action="footer_settings_post.php" method="POST" >
                            <?php foreach($footer_settings_from_db as $footer_settings_item){?>
                          <div class="form-group mt-3">
                              <label ><?= $footer_settings_item['footer_settings_name']?></label></br>
                              <textarea name="<?= $footer_settings_item['footer_settings_name']?>" cols="50" rows="3"><?= $footer_settings_item['footer_settings_value']?></textarea>
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