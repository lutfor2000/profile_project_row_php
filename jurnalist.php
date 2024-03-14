<?php
session_start();
if(!isset( $_SESSION['login_status'])) {
  header('location:login.php');
}
require_once('includes/nav-otika.php');
require_once('includes/header-otika.php');
require_once('includes/db.php');

$select_jurnalist_query = "SELECT * FROM jurnalist";
$jurnalist_from_db = mysqli_query($db_connect,$select_jurnalist_query);
?>
<div class="row">
       <div class="col-lg-9">
               <div class="card">
                   <div class="card-header bg-primary">
                      <h5 class = "text-white">Banners Item</h5>
                   </div>
                    <div class="card-body">

                    <?php if(isset($_SESSION['jurnalist_update_success'] )){?> 
                            <div class="alert alert-success">
                              
                                <?php
                                 echo $_SESSION['jurnalist_update_success'];
                                 unset($_SESSION['jurnalist_update_success']);
                                 ?>
                            </div>
                        <?php }?>

                    <table class = "table table-bordered text-center">
                          <thead>
                             <tr>
                                <th>Serial No</th>
                                <th>Jurnalist Title</th>
                                 <th>Jurnalist Sub Title</th>
                                 <th>Jurnalist Discription</th>
                                 <th>Jurnalist Photo</th>
                                 <th>Action</th>
                                
                             </tr>
                          </thead>
                          <tbody>
                            <?php
                              $jurna_si_no = 1;
                              foreach($jurnalist_from_db as $jurnalist_item){?>
                               <tr>
                                 <td><?=$jurna_si_no++ ?></td>
                                 <td><?=$jurnalist_item['jurnalist_title']?></td>
                                 <td><?=$jurnalist_item['jurnalist_sub_title']?></td>
                                 <td><?=$jurnalist_item['jurnalist_discription']?></td>
                                 <td>
                                 <img width ="60" style ="border-radius: 5%" class = "border" src="image/jurnalist_image/<?=$jurnalist_item['jurnalist_photo']?>" alt="Image Not Found">
                                 </td>
                                 <td>
                                  <div class="btn-group ">
                                  <a type="submit" class="btn btn-sm btn-outline-danger" href = "jurnalist_delete.php?id=<?=$jurnalist_item['id']?>&jurnalist_photo=<?=$jurnalist_item['jurnalist_photo']?>" >Delete</a>
                                  <a type="submit" class="btn btn-sm btn-outline-primary" href = "jurnalist_edite.php?id=<?=$jurnalist_item['id']?>">Edite</a>
                                  </div>
                                 </td>
                               </tr>
                               <?php }?>
                          </tbody>
                     </table>
               </div>
             </div>
             </div>
             <div class="col-lg-3">
               <div class="card">
                   <div class="card-header bg-primary">
                      <h5 class = "text-white">Services Item Add</h5>
                   </div>
                    <div class="card-body">
                          
                    <?php if(isset($_SESSION['jurnalist_success_mess'])){?>
                        <div class="alert alert-success">
                            <?php
                             echo $_SESSION['jurnalist_success_mess'];
                             unset($_SESSION['jurnalist_success_mess']);
                            ?>
                        </div>
                        <?php }?>
                       
                        <form action="jurnalist_post.php" method="POST"  enctype = "multipart/form-data">
                        <div class="form-group">
                              <label >Jurnalist Title </label>
                              <input type="text" class="form-control" name="jurnalist_title">
                          </div>
                          <div class="form-group">
                              <label >Jurnalist Sub Title</label>
                              <input type="text" class="form-control" name="jurnalist_sub_title">
                          </div>
                          <div class="form-group">
                              <label >Jurnalist Discription</label>
                              <textarea name="jurnalist_discription" class="form-control" cols="3" rows="4"></textarea>
                          </div>
                          <div class="form-group">
                              <label >Jurnalist Photo</label>
                              <input type="file" class="form-control" name="jurnalist_photo">
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