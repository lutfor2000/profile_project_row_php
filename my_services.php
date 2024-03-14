<?php
session_start();
if(!isset( $_SESSION['login_status'])) {
  header('location:login.php');
}

require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');
$select_my_services_query = "SELECT * FROM my_services";
$my_service_from_db = mysqli_query($db_connect,$select_my_services_query);
?>
<div class="row">
             <div class="col-lg-7">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">My Services Item</h5>
                   </div>
                    <div class="card-body">
 
                    <?php if(isset($_SESSION['my_service_delete_message'])){?>
                        <div class="alert alert-success">
                            <?php
                             echo $_SESSION['my_service_delete_message'];
                             unset($_SESSION['my_service_delete_message']);
                            ?>
                        </div>
                        <?php }?>

                    <table class = "table table-bordered text-center">
                          <thead>
                             <tr>
                                <th>Serial No</th>
                                <th>Service Title</th>
                                <th>Service Discription</th>
                                <th>Service Photo</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php
                             $service_serial_no = 1; 
                             foreach ($my_service_from_db as $my_service_item ){ 
                              ?>
                               <tr>
                                 <td><?= $service_serial_no++ ?></td>
                                 <td><?= $my_service_item['my_service_title']?></td>
                                 <td><?= $my_service_item['my_service_discription']?></td>
                                 <td>
                                 <img width ="50" style ="border-radius: 5%" class = "border" src="image/my_services_img/<?= $my_service_item['my_sevice_photo']?>" alt="Image Not Found">
                                 </td>
                                 <td>
                                  <div class="btn-group ">
                                  <a type="submit" class="btn btn-sm btn-outline-danger" href = "my_service_delete.php?id=<?= $my_service_item['id']?>&my_sevice_photo=<?= $my_service_item['my_sevice_photo']?>" >Delete</a>
                                  </div>
                                 </td>
                               </tr>
                            <?php }?>
                          </tbody>
                     </table>
                           
                    </div>
               </div>
             </div>

             <div class="col-lg-5">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">My Services Item Add</h5>
                   </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['my_services_success_mess'])){?>
                        <div class="alert alert-success">
                            <?php
                             echo $_SESSION['my_services_success_mess'];
                             unset($_SESSION['my_services_success_mess']);
                            ?>
                        </div>
                        <?php }?>
                        <form action="my_services_post.php" method="POST"  enctype = "multipart/form-data">
                          <div class="form-group mt-3">
                              <label >My Service Title</label>
                              <input type="text" class="form-control" name = "my_service_title">

                              <?php if(isset($_SESSION['my_service_title'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['my_service_title'];
                               unset($_SESSION['my_service_title']);
                              ?>
                              </small>
                              <?php }?>
                              
                          </div>
                          <div class="form-group mt-3">
                              <label >My Service Discription</label>
                              <textarea name="my_service_discription" class="form-control" cols="3" rows="4"></textarea>
                              
                              <?php if(isset($_SESSION['my_service_discription'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['my_service_discription'];
                               unset($_SESSION['my_service_discription']);
                              ?>
                              </small>
                              <?php }?>

                          </div>
                          <div class="form-group mt-3">
                              <label >My Service Photo</label>
                              <input type="file" class="form-control" name="my_sevice_photo">
                               
                              <?php if(isset($_SESSION['my_servce_photo_select'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['my_servce_photo_select'];
                               unset($_SESSION['my_servce_photo_select']);
                              ?>
                              </small>
                              <?php }?>
                            
                          </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-info">Add Now</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
         </div>

<?php
  require_once('includes/footer-otika.php'); 
?>