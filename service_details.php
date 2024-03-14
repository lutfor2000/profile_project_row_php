<?php
session_start();
require_once('includes/db.php');
require_once('kubb/kubb-header.php');
$id = $_GET['id'];
$service_details_select_query = "SELECT * FROM services WHERE id = $id";
$service_details_item = mysqli_fetch_assoc(mysqli_query($db_connect,$service_details_select_query));

?>


        <section id ="service_details" class="bg-dark pt-5">
            <div class="container">
                 <div class="row mt-4">
                     <div class="col-lg-8 m-auto mb-3">

                   <div class="card bg-dark">
                     <div class="card-header bg-dark text-center">
                     <h5 class ="text-info">Service Details</h5>
                     </div>
                     <div class="card-body bg-dark">
                
                     <div class="item_area text-center mb-5">
                        <img src="image/services_img/<?= $service_details_item['sevice_photo']?>" class="img-fluid" alt="">
                        <h4 class="mt-2 text-info"><?= strtoupper($service_details_item['service_title'])?></h4>
                        <p class = "text-light"><?= $service_details_item['service_discription']?></p>
                    
                        </div>
                   
                     </div>
                </div>
                 </div>
                 </div>
            </div>
        </section>
     
   <?php  
    require_once('kubb/kubb-footer.php');
   ?>