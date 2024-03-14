<?php
session_start();
require_once('kubb/kubb-header.php');
require_once('includes/db.php');
$id = $_GET['id'];
$jurnalist_details_select_query = "SELECT * FROM jurnalist WHERE id = $id";
$jurnalist_details_item = mysqli_fetch_assoc(mysqli_query($db_connect,$jurnalist_details_select_query));

?>

    
     <section class="bg-dark pt-5">
     <div class="container">
     <div class="row mt-5">
        <div class="col-lg-6 m-auto mb-5">
              <div class="jurna_item ">
                <h4><?=$jurnalist_details_item['jurnalist_title']?></h4>
                 <h6><?=$jurnalist_details_item['jurnalist_sub_title']?></h6>
                 <img src="image/jurnalist_image/<?=$jurnalist_details_item['jurnalist_photo']?>" class="img-fluid w-100" alt="">
                 <p><?=$jurnalist_details_item['jurnalist_discription']?></p>
                 <div class="jur_btn_area d-flex">
                  <div class="jur_btn_right"><i class="fas fa fa-heart"></i><span>35</span></div>
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
