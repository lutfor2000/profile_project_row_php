<?php
session_start();
if(!isset( $_SESSION['login_status'])) {
  header('location:login.php');
}
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');

$select_banner_query = "SELECT * FROM banners";
$banner_from_db = mysqli_query($db_connect,$select_banner_query);
?>
<div class="row">
       <div class="col-lg-6">
               <div class="card">
                   <div class="card-header bg-primary">
                      <h5 class = "text-white">Banners Item</h5>
                   </div>
                    <div class="card-body">
                    <div class="card-body">
                        <?php if(isset($_SESSION['banner_delete_messege'] )){?> 
                            <div class="alert alert-success">
                                 <?php
                                  echo $_SESSION['banner_delete_messege'];
                                  unset($_SESSION['banner_delete_messege']);
                                 ?>
                            </div>
                        <?php }?>

                        <?php if(isset($_SESSION['banner_update_mess'] )){?> 
                            <div class="alert alert-success">
                                 <?php
                                  echo $_SESSION['banner_update_mess'];
                                  unset($_SESSION['banner_update_mess']);
                                 ?>
                            </div>
                        <?php }?>


                    <table class = "table table-bordered text-center">
                          <thead>
                             <tr>
                                <th>Serial No</th>
                                <th>Banner Photo</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php
                             $banner_serial_no = 1; 
                             foreach ($banner_from_db as $banner_item ){ 
                              ?>
                               <tr>
                                 <td><?= $banner_serial_no++ ?></td>
                                 <td>
                                 <img width ="100" style ="border-radius: 5%" class = "border" src="image/banner/<?= $banner_item['banner_photo']?>" alt="Image Not Found">
                                 </td>
                                 <td>
                                  <div class="btn-group ">
                                  <a type="submit" class="btn btn-sm btn-outline-danger" href = "banner_delete_post.php?id=<?=$banner_item['id']?>&banner_photo=<?=$banner_item['banner_photo']?>" >Delete</a>
                                  <a type="submit" class="btn btn-sm btn-outline-primary" href = "banner_edite.php?id=<?=$banner_item['id']?>">Edite</a>
                                  </div>
                                 </td>
                               </tr>
                            <?php }?>
                          </tbody>
                     </table>
                           
                    </div>
               </div>
             </div>
             </div>
             <div class="col-lg-5">
               <div class="card">
                   <div class="card-header bg-primary">
                      <h5 class = "text-white">Services Item Add</h5>
                   </div>
                    <div class="card-body">

                    <?php if(isset($_SESSION['banner_success_mess'] )){?> 
                            <div class="alert alert-success">
                                 <?php
                                  echo $_SESSION['banner_success_mess'];
                                  unset($_SESSION['banner_success_mess']);
                                 ?>
                            </div>
                        <?php }?>
  
                        <form action="banner_post.php" method="POST"  enctype = "multipart/form-data">
                          <div class="form-group">
                              <label >Banner Photo</label>
                              <input type="file" class="form-control" name="banner_photo">
                              <?php if(isset($_SESSION['banner_photo_select'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['banner_photo_select'];
                               unset($_SESSION['banner_photo_select']);
                              ?>
                              </small>
                              <?php }?>
                          </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-primary">Add Now</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
                      
<?php
  require_once('includes/footer-otika.php'); 
?>