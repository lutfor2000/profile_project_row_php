<?php
  session_start();
  require_once('includes/nav-otika.php');
  require_once('includes/header-otika.php');
  require_once('includes/db.php');
  $id = $_GET['id'];
;
 $about_edite_photo_query = "SELECT * FROM  about_photo WHERE id = $id";
 $about_image_edite =  mysqli_fetch_assoc(mysqli_query($db_connect,$about_edite_photo_query));

 
?>

<div class="row">
             <div class="col-lg-7 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">Change Profile Image</h5>
                   </div>
                    <div class="card-body">
                        <div class ="text-center">
                            <img width ="200" style ="border-radius: 5%" class = "border" src="image/about_photo/<?=$about_image_edite['about_image']?>" alt="Image Not Found">
                            <br>
                        </div>
                        <form action="about_photo_update.php" method="POST" enctype = "multipart/form-data">
                            <input type="hidden" name ="id" value ="<?=$about_image_edite['id']?>">
                          <div class="form-group mt-3">
                              <label >About Image</label>
                              <input type="file" class="form-control" name="about_image">
                              <input type="hidden" class="form-control" name="old_about_image" value ="<?=$about_image_edite['about_image']?>">

                              <?php if(isset($_SESSION['about_select_message'])){?>
                                    <small class ="alert mt-3 text-danger">
                                    <?php 
                                    echo $_SESSION['about_select_message'];
                                    unset($_SESSION['about_select_message']);
                                    ?>
                                    </small>
                                    <?php }?>
                          </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-info" name="add">Update Photo</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
         </div>
<?php
  require_once('includes/footer-otika.php'); 
?>