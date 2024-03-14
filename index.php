<?php
session_start();
require_once('kubb/kubb-header.php');
require_once('includes/db.php');
$services_select_query = "SELECT*FROM services  LIMIT 3"; //ORDER BY id DESC LIMIT 3
$all_services_from_db = mysqli_query($db_connect,$services_select_query);

$banners_select_query = "SELECT*FROM banners";
$all_banners_from_db = mysqli_query($db_connect,$banners_select_query);

$select_gallery_query_all = "SELECT * FROM gallerys";
$gallery_from_items = mysqli_query($db_connect,$select_gallery_query_all);

$select_jurnalist_query_all = "SELECT * FROM jurnalist";
$jurnalist_from_items = mysqli_query($db_connect,$select_jurnalist_query_all);

$about_edite_photo_query = "SELECT * FROM  about_photo";
$about_image_edite =  mysqli_fetch_assoc(mysqli_query($db_connect,$about_edite_photo_query));

$select_my_services_query = "SELECT * FROM my_services LIMIT 3 ";
$my_service_from_db = mysqli_query($db_connect,$select_my_services_query);


//setting stert
$settings_service_title_query = "SELECT setting_value FROM  text_settings WHERE setting_name='service_title'";
$settings_service_title_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_service_title_query));

$settings_service_sub_title_query = "SELECT setting_value FROM  text_settings WHERE setting_name='service_sub_title'";
$settingsservice_sub_title_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_service_sub_title_query));

$settings_service_header_query = "SELECT setting_value FROM  text_settings WHERE setting_name='service_header'";
$settings_service_header_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_service_header_query));
//setting end

//setting Banner stert
$settings_banner_title_query = "SELECT setting_value FROM  text_settings WHERE setting_name='banner_title'";
$settings_banner_title_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_banner_title_query));

$settings_banner_title_name_query = "SELECT setting_value FROM  text_settings WHERE setting_name='banner_title_name'";
$settings_banner_title_name_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_banner_title_name_query));

$settings_banner_bio_query = "SELECT setting_value FROM  text_settings WHERE setting_name='banner_bio'";
$settings_banner_bio_from_db = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_banner_bio_query));
//setting Banner end

//instagram setting stert
$settings_instagrma_query = "SELECT setting_value FROM  text_settings WHERE setting_name='instagram'";
$settings_instagrma_from = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_instagrma_query));
//instagram setting end

//journal setting Start
$settings_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='journal'";
$settings_journal_from = mysqli_fetch_assoc(mysqli_query($db_connect,$settings_journal_query));
//journal setting End

//about setting stert
$about_title_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='about_title'";
$about_title_from = mysqli_fetch_assoc(mysqli_query($db_connect,$about_title_journal_query));

$about_sub_title_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='about_sub_title'";
$about_sub_title_from = mysqli_fetch_assoc(mysqli_query($db_connect,$about_sub_title_journal_query));

$about_discription_journal_query = "SELECT setting_value FROM  text_settings WHERE setting_name='about_discription'";
$about_discription_from = mysqli_fetch_assoc(mysqli_query($db_connect,$about_discription_journal_query));
//about setting stert

//Footer Settings Stert----------->
//Colum One Stert
$footer_colum_one_title_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_title'";
$setting_footer_one_title = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_title_query));

$footer_colum_one_disc_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_disc'";
$setting_footer_one_disc = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_disc_query));

$footer_colum_one_loction_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_loction'";
$setting_footer_one_loca = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_loction_query));

$footer_colum_one_phn_num_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_phn_num'";
$setting_footer_one_num = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_phn_num_query));

$footer_colum_one_email_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_email'";
$setting_footer_one_email = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_email_query));

$footer_colum_one_loction_icon_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_loction_icon'";
$setting_footer_one_icon_locatin = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_loction_icon_query));

$footer_colum_one_phn_icon_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_phn_icon'";
$setting_footer_one_icon_phon = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_colum_one_phn_icon_query));

$ooter_colum_one_email_icon_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_colum_one_email_icon'";
$setting_footer_one_icon_email = mysqli_fetch_assoc(mysqli_query($db_connect,$ooter_colum_one_email_icon_query));
//Colum One end

//colum Two Stert
$footer_col_two_title_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_two_title'";
$setting_footer_two_title = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_two_title_query));

$footer_col_two_disc_one_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_two_disc_one'";
$setting_footer_disc_one = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_two_disc_one_query));

$footer_col_two_disc_two_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_two_disc_two'";
$setting_footer_disc_two = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_two_disc_two_query));

$footer_col_two_disc_three_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_two_disc_three'";
$setting_footer_disc_three = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_two_disc_three_query));
//colum Two End

// Colum Three Stert
$footer_col_three_title_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_title'";
$setting_footer_three_title = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_title_query));

$footer_col_three_dis_one_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_dis_one'";
$setting_footer_three_dis_one = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_dis_one_query));

$footer_col_three_dis_one_date_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_dis_one_date'";
$setting_footer_three_dis_one_date = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_dis_one_date_query));

$footer_col_three_dis_two_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_dis_two'";
$setting_footer_three_dis_two = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_dis_two_query));

$footer_col_three_dis_two_date_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_dis_two_date'";
$setting_footer_three_dis_two_date = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_dis_two_date_query));

$footer_col_three_dis_three_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_dis_three'";
$setting_footer_three_dis_three = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_dis_three_query));

$footer_col_three_dis_three_date_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_three_dis_three_date'";
$setting_footer_three_dis_three_date = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_three_dis_three_date_query));

// Colum Three Stert

//Colum Four Stert
$footer_col_four_title_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_four_title'";
$footer_col_four_title = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_four_title_query));

$footer_col_four_dis_one_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_four_dis_one'";
$footer_col_four_dis_one = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_four_dis_one_query));

$footer_col_four_dis_two_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='footer_col_four_dis_two'";
$footer_col_four_dis_two = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_col_four_dis_two_query));

//Colum Four End

$footer_developer_name_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='developer_name'";
$developer_name = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_developer_name_query));

$footer_developer_comment_query = "SELECT footer_settings_value FROM   footer_settings  WHERE footer_settings_name ='developer_comment'";
$developer_comment = mysqli_fetch_assoc(mysqli_query($db_connect,$footer_developer_comment_query));

//Footer Settings End------------->

?>

      <!-- <============================Banner Part Start==============================> -->
     
      <div class="slider">
        <div class="slider_items d-flex">
            <?php foreach($all_banners_from_db as $banner_all_item){?>
            <div class="slide_item actives_cls" style="background-image:url(image/banner/<?=$banner_all_item['banner_photo']?>)">
             <div class="slide_opacity"></div>
            </div>
            <?php }?>
           

            <!-- <div class="slide_item actives_cls" style="background-image:url(image/banner/5.jpg)">
             <div class="slide_opacity"> </div>
            </div> -->
 
        </div>
        <div class="row">
           <div class="sourse_area text-center mt-lg-5">
             <h1 class="banner_title"><?=$settings_banner_title_from_db['setting_value']?></h1>
              <h1 class="banner_title_name"><?= $settings_banner_title_name_from_db['setting_value']?></h1>
              <p class="banner_bio"><?= $settings_banner_bio_from_db['setting_value']?></p>
            
           </div>
      </div>
      </div>


      </div>
      
      <main>

      <section id="service" class ="bg-dark d-block" >
                 <div class="container">
                 <div class="service_text text-center pt-5">
                      <h3 class ="text-info"><?= $settings_service_title_from_db['setting_value']?></h3>
                      <p class ="text-warning"><?=$settingsservice_sub_title_from_db['setting_value']?></p>
                      <h4 class ="text-info"><?=$settings_service_header_from_db['setting_value']?></h4>
                  </div>

              <div class="row mt-4">
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
        </section>

      <div class="container">
      </div>
     </main>
     <!-- <================Protfolio Part Start======================> -->
     <section id="Protfolio">
        <div class="prot_text_area text-center">
            <h3 class ="text-info"><?=strtoupper($settings_instagrma_from['setting_value'])?></h3>
        </div>
        <div class="prot_img_area d-flex">
              <?php foreach($gallery_from_items as $gallary_from_item){?>
              <div class=" col-lg-3 m-auto">
                <div class="pro_img_item">
                  <img src="image/gallary_photo/<?=$gallary_from_item['gallery_photo']?>" class="img-fluid" alt="">
                </div>
              </div>
             <?php }?>
        </div>
        <div class="prot_footer_area text-center">
          <a href=""><span class="ins_icon"><img class="img-fluid " src="imges/logo/logo_bottom.png" alt=""></span>Instagram page</a>
      </div>

     </section>
      
     <section id="jurnalist" class =" bg-dark pt-1">
      <div class="container">
           <div class="jurnalist_head text-center mt-5 mb-5">
            <h3 class="text-info"><?=$settings_journal_from['setting_value']?></h3>
           </div>

           <div class="row">
            <?php foreach($jurnalist_from_items as $jurna_item){?>

            <div class="col-lg-4 mb-5">
              <div class="jurna_item ">
                <h4><?=$jurna_item['jurnalist_title']?></h4>
                 <h6><?=$jurna_item['jurnalist_sub_title']?></h6>
                 <img src="image/jurnalist_image/<?=$jurna_item['jurnalist_photo']?>" class="img-fluid w-100" alt="">
                 <p><?=$jurna_item['jurnalist_discription']?></p>

                 <div class="jur_btn_area d-flex">
                  <div class="jur_btn_left ">
                    <a href="jurnalist_details.php?id=<?=$jurna_item['id']?>">Continue Reading</a>
                  </div>
                  <div class="jur_btn_right"><i class="fas fa fa-heart"></i><span>35</span></div>
                 </div>
              </div>
            </div>

             <?php }?>
           </div>

      </div>
     </section>

     <section id="about" class ="bg-dark">
      <div class="container">
       
        <div class="row">
             <div class="col-lg-6">
                 <div class="about_are mb-5">
                  <div class="abu_text mb-4 "><a href="about_details.php"><h4 class="text-info"><?=$about_title_from['setting_value']?></h4></a></div>
               
                  <div class="abu_img_are d-flex">
                  <div class="img_area">
                    <img src="image/about_photo/<?=$about_image_edite['about_image']?>" class="img-fluid w-100" alt="Not Image">
                  </div>
                   <div class="img_text ">
                   <a href="about_details.php"> <h6 class="text-info"><?=$about_sub_title_from['setting_value']?></h6></a>
                     <p><?=$about_discription_from['setting_value']?></p>
                   </div>

              </div>

              </div>
             </div>


             <div class="col-lg-6">
              <div class="about_are mb-5">
                <div class="abu_text mb-4 text-info"> <h4>MY SERVICES</h4></div>
                 <?php  foreach($my_service_from_db as $my_service_all){?>
                 <div class="abu_img_are d-flex mb-3">
                        <div class="img_area_left">
                          <img width ="40" src="image/my_services_img/<?=$my_service_all['my_sevice_photo']?>" class="img-fluid" alt="not image">
                        </div>
                        <div class="img_text_right pr-2">
                          <h6 class="text-info"><?=$my_service_all['my_service_title']?></h6>
                          <p><?=$my_service_all['my_service_discription']?></p>
                        </div>
                 </div>
                  <?php }?>
                 <!-- <div class="abu_img_are d-flex mb-3">
                  <div class="img_area_left">
                    <img src="imges/about/moni.png" class="img-fluid" alt="">
                  </div>
                  <div class="img_text_right ">
                    <h6 class="text-info"> Motion Video</h6>
                    <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                  </div>
               </div> -->


            <!-- <div class="abu_img_are d-flex ">
              <div class="img_area_left">
                <img src="imges/about/pho.png" class="img-fluid" alt="">
              </div>
              <div class="img_text_right ">
                <h6 class="text-info"> Photo Retouching</h6>
                <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
              </div>
            </div> -->

              </div>
             </div>
        </div>

      </div>
     </section>
     
     <section id="fotter">
      <div class="container mb-4">
          <div class="row">
               <div class="col-lg-3">
                    <div class="footer_item">
                           <h5 class="text-info"><?=$setting_footer_one_title['footer_settings_value']?></h5>
                           <p><?=$setting_footer_one_disc['footer_settings_value']?></p>
                           <div class="item_bottom d-flex">
                            <div class="foote_left"><i class="<?=$setting_footer_one_icon_locatin['footer_settings_value']?> text-info"></i></div>
                            <div class="footer_right"><p><?=$setting_footer_one_loca['footer_settings_value']?></p></div>
                           </div>

                           <div class="item_bottom d-flex">
                            <div class="foote_left"><i class="<?=$setting_footer_one_icon_phon['footer_settings_value']?> text-info"></i></div>
                            
                            <div class="footer_right"><p><?=$setting_footer_one_num['footer_settings_value']?></p></div>
                           </div>

                           
                           <div class="item_bottom d-flex">
                            <div class="foote_left"><i class="<?=$setting_footer_one_icon_email['footer_settings_value']?>  text-info"></i></div>
                            
                            <div class="footer_right"><p><?=$setting_footer_one_email['footer_settings_value']?></p></div>
                           </div>
                           
                         
                    </div>
               </div>
               <div class="col-lg-3">
                <div class="footer_item">
                       <h5  class="text-info"><?=$setting_footer_two_title['footer_settings_value']?></h5>
                       <p><?=$setting_footer_disc_one['footer_settings_value']?></p>
                       <p><?=$setting_footer_disc_two['footer_settings_value']?></p>

                       <p><?=$setting_footer_disc_three['footer_settings_value']?></p>
               
                </div>
               </div>

               <div class="col-lg-3">
                <div class="footer_item">
                       <h5  class="text-info"><?=$setting_footer_three_title['footer_settings_value']?></h5>
                       <p><?=$setting_footer_three_dis_one['footer_settings_value']?>
                        <span class="d-block footer_span"><?=$setting_footer_three_dis_one_date['footer_settings_value']?></span>
                       </p>
                       <p><?=$setting_footer_three_dis_two['footer_settings_value']?>
                        <span class="d-block footer_span"><?=$setting_footer_three_dis_two_date['footer_settings_value']?></span>
                       </p>
                       <p><?=$setting_footer_three_dis_three['footer_settings_value']?>
                        <span class="d-block footer_span"><?=$setting_footer_three_dis_three_date['footer_settings_value']?></span>
                       </p>
                       
                       
                </div>
               </div>

               <div class="col-lg-3">
                <div class="footer_item">
                       <h5  class="text-info"><?=$footer_col_four_title['footer_settings_value']?></h5>
                       <p>
                       <?=$footer_col_four_dis_one['footer_settings_value']?>
                       </p>
                      <p>
                      <?=$footer_col_four_dis_two['footer_settings_value']?>
                      </p>
                </div>
               </div>
          </div>
      </div>

      <div class="end_footer text-center">
        <p><?=$developer_comment['footer_settings_value']?> <span class="text-info"><?=$developer_name['footer_settings_value']?></span>--</p>
        
      </div>
     </section>
  
   <?php  
    require_once('kubb/kubb-footer.php');
   ?>