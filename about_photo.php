<?php
  session_start();
  require_once('includes/nav-otika.php');
  require_once('includes/header-otika.php');
  require_once('includes/db.php');
//  $email_address_login_photo = $_SESSION['email_address_login_dasboard_page'];
 $about_photo_query = "SELECT * FROM  about_photo";
 $about_image_us =  mysqli_fetch_assoc(mysqli_query($db_connect,$about_photo_query));

 
?>

<div class="row">
             <div class="col-lg-7 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">About Image</h5>
                   </div>
                    <div class="card-body">
                    
                    <?php if(isset($_SESSION['about_update_mess'] )){?> 
                            <div class="alert alert-success">
                                 <?php
                                  echo $_SESSION['about_update_mess'];
                                  unset($_SESSION['about_update_mess']);
                                 ?>
                            </div>
                        <?php }?>

                        <?php if(isset($_SESSION['about_delete_messege'] )){?> 
                            <div class="alert alert-success">
                                 <?php
                                  echo $_SESSION['about_delete_messege'];
                                  unset($_SESSION['about_delete_messege']);
                                 ?>
                            </div>
                        <?php }?>

                        <div class ="text-center">
                            <img width ="100" style ="border-radius: 5%" class = "border" src="image/about_photo/<?=$about_image_us['about_image']?>" alt="Image Not Found">
                            <br>
                        </div>
                        <div class ="text-center mt-2">
                        <div class="btn-group ">
                            <a class = "btn btn-sm btn-outline-warning " href = "about_photo_edite.php?id=<?=$about_image_us['id']?>">Edite</a>
                            <a class = "btn btn-sm btn-outline-info"  href = "about_photo_delete.php?id=<?=$about_image_us['id']?>&about_image=<?=$about_image_us['about_image']?>">Delete</a>
                        </div>
                        </div>
                        <form action="about_photo_post.php" method="POST" enctype = "multipart/form-data">
                          <div class="form-group mt-3">
                              <label >About Image</label>
                              <input type="file" class="form-control" name="about_image">
                          </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-info" name="add">Change Your Photo</button>
                           </div>
                         </form>
                    </div>
               </div>
             </div>
         </div>
<?php
  require_once('includes/footer-otika.php'); 
?>