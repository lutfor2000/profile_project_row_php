<?php
session_start();
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');
$select_gallery_query = "SELECT * FROM gallerys";
$gallery_from_db = mysqli_query($db_connect,$select_gallery_query);

?>
<div class="row">
       <div class="col-lg-7">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">Gallery Item</h5>
                   </div>
                
                    <div class="card-body">
                    <?php if(isset($_SESSION['gallery_delete_message'] )){?> 
                            <div class="alert alert-success">
                              
                                <?php
                                 echo $_SESSION['gallery_delete_message'];
                                 unset($_SESSION['gallery_delete_message']);
                                 ?>
                            </div>
                        <?php }?>

                        <div class="card-body">
                        <?php if(isset($_SESSION['gallary_eidt_mess'] )){?> 
                            <div class="alert alert-success">
                              
                                <?php
                                 echo $_SESSION['gallary_eidt_mess'];
                                 unset($_SESSION['gallary_eidt_mess']);
                                 ?>
                            </div>
                        <?php }?>
                         

                    <table class = "table table-bordered text-center">
                          <thead>
                             <tr>
                                <th>Serial No</th>
                                <th>Gallary Photo</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                             <?php 
                               $gallery_serial_no = 1;
                                foreach($gallery_from_db as $gallery_item){?>
                               <tr>
                                 <td><?= $gallery_serial_no++?></td>
                                 <td>
                                 <img width ="50" style ="border-radius: 5%" class = "border" src="image/gallary_photo/<?=$gallery_item['gallery_photo']?>" alt="Image Not Found">
                                 </td>
                                 <td>
                                  <div class="btn-group ">
                                  <a type="submit" class="btn btn-sm btn-outline-danger" href = "gallery_post_delete.php?id=<?=$gallery_item['id']?>&gallery_photo=<?=$gallery_item['gallery_photo']?>">Delete</a>
                                  <a type="submit" class="btn btn-sm btn-outline-warning" href = "gallery_edite.php?id=<?=$gallery_item['id']?>">Edite</a>
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
             
             <div class="col-lg-5 ">
               <div class="card mt-3">
                   <div class="card-header bg-info">
                      <h5 class = "text-white">Gallery Item Add</h5>
                   </div>
                    <div class="card-body">

                    <?php if(isset($_SESSION['gellary_success_mess'] )){?> 
                            <div class="alert alert-success">
                                 <?php
                                  echo $_SESSION['gellary_success_mess'];
                                  unset($_SESSION['gellary_success_mess']);
                                 ?>
                            </div>
                        <?php }?>
                        <form action="gallery_post.php" method="POST"  enctype = "multipart/form-data">
                          <div class="form-group mt-3">
                              <label >Gallery Photo</label>
                              <input type="file" class="form-control" name="gallery_photo">
                              <?php if(isset($_SESSION['gallery_file_message'])){?>
                              <small class ="alert text-danger">
                              <?php 
                               echo $_SESSION['gallery_file_message'];
                               unset($_SESSION['gallery_file_message']);
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
          

             
<?php
  require_once('includes/footer-otika.php'); 
?>
