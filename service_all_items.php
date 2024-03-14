<?php
session_start();
require_once('kubb/kubb-header.php');
require_once('includes/db.php');
$services_select_query = "SELECT*FROM services";
$all_services_from_db = mysqli_query($db_connect,$services_select_query);

$settings_service_header_query = "SELECT setting_value FROM  text_settings WHERE setting_name='service_header'";
$settings_service_header_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_service_header_query));
?>
 <section id ="service_details" class="bg-dark pt-5 pb-5">
            <div class="container">
                 <div class="row mt-4">
                   <div class="service text-center pt-4 pb-4">
                   <h3 class ="text-info" style="font-size:25px;"><?=$settings_service_header_from_db['setting_value']?></h3>
                   </div>
                 <?php foreach($all_services_from_db as $all_services_item):?>

                <div class="col-lg-4">
                    <div class="item_area text-center mb-5">
                    <img src="image/services_img/<?=$all_services_item['sevice_photo']?>" class="img-fluid" alt="">
                    <h4 class ="text-info"style="font-size:22px;"><?= strtoupper($all_services_item['service_title'])?></h4>
                    <p class ="text-light" style="font-size:16px;"><?=$all_services_item['service_discription']?></p>
                    <a class=" btn-sm btn-outline-light text-info " style="color:black; font-size:13px; border: 1px solid rgba(136, 132, 132, 0.601);" href="service_details.php?id=<?=$all_services_item['id']?>">Click More</a>
                    </div>
                </div>
                <?php endforeach;?>
             
                   </div>
                 </div>
            </div>
        </section>
     

<?php  
require_once('kubb/kubb-footer.php');
?>