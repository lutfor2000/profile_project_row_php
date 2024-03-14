<?php
session_start();
if(!isset( $_SESSION['login_status'])) {
  header('location:login.php');
}

require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');
$select_services_query = "SELECT id,service_title,service_discription,sevice_photo FROM services";
$service_from_db = mysqli_query($db_connect,$select_services_query);
?>
<div class="row">
             <div class="col-lg-7">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">Services Item</h5>
                   </div>
                    <div class="card-body">

                    <?php if(isset($_SESSION['service_update_success'])){?>
                        <div class="alert alert-success">
                            <?php
                             echo $_SESSION['service_update_success'];
                             unset($_SESSION['service_update_success']);
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
                             foreach ($service_from_db as $service_item ){ 
                              ?>
                               <tr>
                                 <td><?= $service_serial_no++ ?></td>
                                 <td><?= $service_item['service_title']?></td>
                                 <td><?= $service_item['service_discription']?></td>
                                 <td>
                                 <img width ="100" style ="border-radius: 5%" class = "border" src="image/services_img/<?= $service_item['sevice_photo']?>" alt="Image Not Found">
                                 </td>
                                 <td>
                                  <div class="btn-group ">
                                  <a type="submit" class="btn btn-sm btn-outline-info" href = "service_edite.php?id=<?= $service_item['id']?>" >Edite</a>
                                  <a type="submit" class="btn btn-sm btn-outline-danger" href = "service_delete.php?id=<?= $service_item['id']?>" >Delete</a>
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
                      <h5 class = "text-white">Services Item Add</h5>
                   </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['services_success_mess'])){?>
                        <div class="alert alert-success">
                            <?php
                             echo $_SESSION['services_success_mess'];
                             unset($_SESSION['services_success_mess']);
                            ?>
                        </div>
                        <?php }?>
                        <form action="services_post.php" method="POST"  enctype = "multipart/form-data">
                          <div class="form-group mt-3">
                              <label >Service Title</label>
                              <input type="text" class="form-control" name = "service_title">
                          </div>
                          <div class="form-group mt-3">
                              <label >Service Discription</label>
                              <textarea name="service_discription" class="form-control" cols="3" rows="4"></textarea>
                              
                          </div>
                          <div class="form-group mt-3">
                              <label >Service Photo</label>
                              <input type="file" class="form-control" name="sevice_photo">

                              <?php if(isset($_SESSION['servce_photo_select'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['servce_photo_select'];
                               unset($_SESSION['servce_photo_select']);
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