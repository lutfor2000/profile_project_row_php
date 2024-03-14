<?php
 session_start();

 if(!isset( $_SESSION['login_status'])) {
    header('location:login.php');
 }
     require_once('includes/nav-otika.php');
     require_once('includes/header-otika.php');
     require_once('includes/db.php');

     $select_query = "SELECT id,full_name,email_address,gender FROM users";
     $data_from_db = mysqli_query($db_connect,$select_query);
    //  $regis_assos = mysqli_fetch_assoc( $data_from_db);
   
   ?>

        <div class="row">
            <div class="col-lg-10 mt-2 m-auto">

             <div class="card">
                 <div class="card-header bg-primary">
                    <h5 class="text-white">User List</h5>
                 </div>
                 <div class="card-body">
                 <div class="alert alert-secondary d-flex">
                   <div class = "float-start w-50">Total User :<?=" ".$data_from_db->num_rows ?> </div>
                 <div class="btn-group float-end w-50">
                 <a type="submit" class="btn btn-sm btn-danger " href = "delete_all_user.php">All Delete</a>
                 </div>
                
                </div>
                        <?php if(isset( $_SESSION['user_delete_maessege'])){?>
                              <div class = "alert alert-danger">
                              <?php
                                echo $_SESSION['user_delete_maessege'];
                                unset($_SESSION['user_delete_maessege']);
                              ?>
                              </div>
                            <?php } ?>
                            <?php if(isset( $_SESSION['user_delete_all_maessege'])){?>
                              <div class = "alert alert-danger">
                              <?php
                                echo $_SESSION['user_delete_all_maessege'];
                                unset($_SESSION['user_delete_all_maessege']);
                              ?>
                              </div>
                            <?php } ?>
                            <?php if(isset( $_SESSION['user_update_messge'])){?>
                              <div class = "alert alert-success">
                              <?php
                                echo $_SESSION['user_update_messge'];
                                unset($_SESSION['user_update_messge']);
                              ?>
                              </div>
                            <?php } ?>
                     <table class = "table table-bordered text-center">
                          <thead>
                             <tr>
                                 <th>Serial NO</th>
                                <th>ID NO</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Gender</th>
                                <th>Action</th>
                             </tr>
                          </thead>
                          <tbody>
                              <?php 
                                $reg_serial_no = 1;
                                foreach ($data_from_db as $regs_data){    
                              ?>
                               <tr>
                                   <td><?=$reg_serial_no++ ?></td>
                                 <td><?= $regs_data['id'] ?></td>
                                 <td><?= strtoupper($regs_data['full_name']) ?></td>
                                 <td><?= $regs_data['email_address'] ?></td>
                                 <td><?= $regs_data['gender'] ?></td>
                                 <td>
                                 <div class="btn-group ">
                                    <a type="submit" class="btn btn-sm btn-outline-primary" href = "edit_user.php?id=<?=$regs_data['id']?>">Edit</a>
                                    <a type="submit" class="btn btn-sm btn-outline-danger" href = "delete_user.php?id=<?=$regs_data['id']?>" >Delete</a>
                                </div>
                                 </td>
                               </tr>
                               <?php } ?>

                               <?php if($data_from_db->num_rows == 0){?>
                               <tr>
                                   <td colspan = "50" class = "text-center text-danger">Data Empity !!</td>
                               </tr>
                               <?php } ?>
                          </tbody>
                     </table>
                 </div>
             </div>
                
            </div>
        </div>

<?php
  require_once('includes/footer-otika.php'); 
?>