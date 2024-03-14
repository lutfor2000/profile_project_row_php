
<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">

<div class="row">
             <div class="col-lg-5 m-auto">
               <div class="card">
                   <div class="card-header bg-primary">
                      <h3 class = "text-white">Registration From</h3>
                   </div>
                    <div class="card-body">
                        <form action="registration_post.php" method="POST">
                        <?php if(isset( $_SESSION['user_success_mess'])){?>
                              <div class = "alert alert-success">
                              <?php
                                echo $_SESSION['user_success_mess'];
                                unset($_SESSION['user_success_mess']);
                              ?>
                              </div>
                            <?php } ?>
                           <div class="form-group">
                               <label >Full Name</label>
                               <input type="text" class="form-control" name = "full_name">

                              <?php if(isset( $_SESSION['reg_name_error_msg'])){?>
                              <small class = "alert text-danger">
                              <?php
                                echo $_SESSION['reg_name_error_msg'];
                                unset($_SESSION['reg_name_error_msg']);
                              ?>
                              </small>
                             <?php } ?>

                           </div>

                           <div class="form-group mt-3">
                            <label >Emali Address</label>
                            <input type="email" class="form-control" name = "email_address">
                            
                            <?php if(isset( $_SESSION['user_email_error'])){?>
                              <small class = "alert text-danger">
                              <?php
                                echo $_SESSION['user_email_error'];
                                unset($_SESSION['user_email_error']);
                              ?>
                              </small>
                             <?php } ?>

                        </div>
                        <div class="form-group mt-3">
                            <label >Password</label>
                            <input type="password" class="form-control" name = "password">
                        </div>
                        <div class="form-group mt-3">
                            <label >Confirm Password</label>
                            <input type="password" class="form-control" name = "confirm_password">
                            <?php if(isset( $_SESSION['regis_password_message'])){?>
                              <small class = "alert text-danger">
                              <?php
                                echo $_SESSION['regis_password_message'];
                                unset($_SESSION['regis_password_message']);
                              ?>
                              </small>
                            <?php } ?>
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Gender</label><br>
                            <input type="radio" name = "gender" value = "male">
                            <label >Male</label></br>
                            <input type="radio" name = "gender" value = "female">
                            <label >Female</label></br>
                            <input type="radio" name = "gender" value = "other">
                            <label >Other</label>
                           
                        </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-primary" name="add"> Register</button>
                           </div>
                         </form>
                    </div>
                    <div class="mb-4 text-muted text-center">
                Already Registered? <a href="login.php">Login</a>
              </div>
               </div>
             </div>
         </div>

         </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>