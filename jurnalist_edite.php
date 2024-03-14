<?php
session_start();
if(!isset( $_SESSION['login_status'])) {
  header('location:login.php');
}
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');
$id = $_GET['id'];

$select_jurnalist_edite_query = "SELECT * FROM jurnalist WHERE id =$id";
$jurnalist_edite_db =mysqli_fetch_assoc(mysqli_query($db_connect,$select_jurnalist_edite_query));
?>
<div class="row">
             <div class="col-lg-8 m-auto">
               <div class="card">
                   <div class="card-header bg-primary">
                      <h5 class = "text-white">Services Item Add</h5>
                   </div>
                    <div class="card-body">
                        <form action="jurnalist_update.php" method="POST"  enctype = "multipart/form-data">
                        <input type="hidden" name ="id" value ="<?=$jurnalist_edite_db['id']?>">
                        <div class="form-group">
                              <label >Jurnalist Title </label>
                              <input type="text" class="form-control" name="jurnalist_title" value = "<?=$jurnalist_edite_db['jurnalist_title']?>">
                          </div>
                          <div class="form-group">
                              <label >Jurnalist Sub Title</label>
                              <input type="text" class="form-control" name="jurnalist_sub_title"  value = "<?=$jurnalist_edite_db['jurnalist_sub_title']?>">
                          </div>
                          <div class="form-group">
                              <label >Jurnalist Discription</label>
                              <textarea name="jurnalist_discription" class="form-control" cols="3" rows="4"><?=$jurnalist_edite_db['jurnalist_discription']?></textarea>
                          </div>
                          <div class="form-group">
                              <label >Jurnalist Photo</label>
                                 <div class="img mb-2">
                                  <img width ="100" style ="border-radius: 5%" class ="border" src="image/jurnalist_image/<?=$jurnalist_edite_db['jurnalist_photo']?>" alt="Image Not Found">
                                 </div>
                                 <input type="file" class="form-control" name="jurnalist_photo" >
                                 <input type="hidden" class="form-control" name="old_jurnalist_photo" value="<?=$jurnalist_edite_db['jurnalist_photo']?>" >
                                    <?php if(isset($_SESSION['jurnalist_update_fail'])){?>
                                    <small class ="alert text-danger">
                                    <?php 
                                    echo $_SESSION['jurnalist_update_fail'];
                                    unset($_SESSION['jurnalist_update_fail']);
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