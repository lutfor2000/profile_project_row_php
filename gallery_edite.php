<?php
session_start();
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
$id = $_GET['id'];
$gallery_query = "SELECT * FROM gallerys WHERE id = $id";
$gallery_edit_assoc = mysqli_fetch_assoc( mysqli_query($db_connect,$gallery_query));
?>

<div class="col-lg-6 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-warning">
                      <h5 class = "text-white">Gallery Photo Update</h5>
                   </div>
                    <div class="card-body">
                         <div class="imag text-center">
                         <img width ="200" style ="border-radius: 5%" class ="border" src="image/gallary_photo/<?=$gallery_edit_assoc['gallery_photo']?>" alt="Image Not Found">
                         </div>
                        <form action="gallery_update.php" method="POST"  enctype = "multipart/form-data">
                          <input type="hidden" name = "id" value ="<?=$gallery_edit_assoc['id']?>">
                          <div class="form-group mt-3">
                              <label >Gallery Photo</label>
                              <input type="file" class="form-control" name="gallery_photo" >
                              <input type="hidden" class="form-control" name = "gallery_old_photo" value ="<?=$gallery_edit_assoc['gallery_photo']?>">
                          </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-warning">Update Now</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
<?php
  require_once('includes/footer-otika.php'); 
?>