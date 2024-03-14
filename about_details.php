<?php
session_start();
require_once('kubb/kubb-header.php');
require_once('includes/db.php');

$about_edite_photo_query = "SELECT * FROM  about_photo";
$about_image_edite =  mysqli_fetch_assoc(mysqli_query($db_connect,$about_edite_photo_query));

//about setting stert
$about_title_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='about_title'";
$about_title_from = mysqli_fetch_assoc(mysqli_query($db_connect,$about_title_journal_query));

$about_sub_title_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='about_sub_title'";
$about_sub_title_from = mysqli_fetch_assoc(mysqli_query($db_connect,$about_sub_title_journal_query));

$about_discription_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='about_discription'";
$about_discription_from = mysqli_fetch_assoc(mysqli_query($db_connect,$about_discription_journal_query));
//about setting stert
?>
<section class ="bg-dark pt-5 pb-5">
    <div class="container">
     <div class="row pt-5 pb-5">
         <div class="col-lg-6 m-auto pb-5 ">
                 <div class="about_are mb-5">
                  <div class="abu_text mb-4 "><h4 class="text-info"><?=$about_title_from['setting_value']?></h4></div>
               
                  <div class="abu_img_are d-flex">
                  <div class="img_area">
                    <img src="image/about_photo/<?=$about_image_edite['about_image']?>" class="img-fluid w-100" alt="Not Image">
                  </div>
                   <div class="img_text ">
                   <h6 class="text-info"><?=$about_sub_title_from['setting_value']?></h6>
                     <p><?=$about_discription_from['setting_value']?></p>
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