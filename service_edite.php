<?php
session_start();
if(!isset( $_SESSION['login_status'])) {
  header('location:login.php');
}
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');
$id = $_GET['id'];
$select_services_edite_query = "SELECT * FROM services WHERE id = $id";
$service_edite_db = mysqli_fetch_assoc(mysqli_query($db_connect,$select_services_edite_query));
?>
<div class="row">      
             <div class="col-lg-5 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">Services Item Add</h5>
                   </div>
                    <div class="card-body">
                        
                        <form action="services_update.php" method="POST"  enctype = "multipart/form-data">
                            <input type="hidden" name ="id" value = "<?=$service_edite_db['id']?>">
                          <div class="form-group mt-3">
                              <label >Service Title</label>
                              <input type="text" class="form-control" name = "service_title" value ="<?=$service_edite_db['service_title']?>">
                          </div>
                          <div class="form-group mt-3">
                              <label >Service Discription</label>
                              <textarea name="service_discription" class="form-control" cols="3" rows="4"><?=$service_edite_db['service_discription']?></textarea>
                              
                          </div>
                          <div class="form-group mt-3">
                              <label >Service Photo</label>
                              <div class="img mb-2">
                                  <img width ="100" style ="border-radius: 5%" class ="border" src="image/services_img/<?=$service_edite_db['sevice_photo']?>" alt="Image Not Found">
                                 </div>
                              <input type="file" class="form-control" name="sevice_photo">
                              <input type="hidden" class="form-control" name="old_sevice_photo" value="<?=$service_edite_db['sevice_photo']?>">

                              <?php if(isset($_SESSION['service_update_fail'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['service_update_fail'];
                               unset($_SESSION['service_update_fail']);
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