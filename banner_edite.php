<?php
session_start();
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
$id = $_GET['id'];
$banner_query = "SELECT * FROM banners WHERE id = $id";
$banner_edit_assoc = mysqli_fetch_assoc( mysqli_query($db_connect,$banner_query));
?>

<div class="col-lg-6 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-primary">
                      <h5 class = "text-white">Banner Photo Update</h5>
                   </div>
                    <div class="card-body">
                         <div class="imag text-center">
                         <img width ="200" style ="border-radius: 5%" class ="border" src="image/banner/<?=$banner_edit_assoc['banner_photo']?>" alt="Image Not Found">
                         </div>
                        <form action="banner_update.php" method="POST"  enctype = "multipart/form-data">
                          <input type="hidden" name = "id" value ="<?=$banner_edit_assoc['id']?>">
                          <div class="form-group mt-3">
                              <label >Gallery Photo</label>
                              <input type="file" class="form-control" name="banner_photo" >
                              <input type="hidden" class="form-control" name = "banner_old_photo" value ="<?=$banner_edit_assoc['banner_photo']?>">
                          </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-primary">Update Now</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
<?php
  require_once('includes/footer-otika.php'); 
?>