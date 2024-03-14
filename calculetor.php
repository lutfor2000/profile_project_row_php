<?php
session_start();
require_once('includes/nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caltuletor</title>
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
     <div class="container">
         <div class="row">
             <div class="col-lg-5 m-auto">
               <div class="card mt-3">
                   <div class="card-header bg-secondary">
                      <h3 class = "text-white">Calculetor</h3>
                   </div>
                    <div class="card-body">
                        <form action="calculetor_post.php" method="POST">

                        <?php if(isset( $_SESSION['error'])){?>
                               <small class="alert text-danger">
                                   <?php
                                     foreach ($_SESSION['error'] as  $value) {
                                        echo $value;
                                     }
                                     unset($_SESSION['error']);
                                   ?>
                               </small>
                                <?php } ?>

                           <div class="form-group">
                               <label >First Number</label>
                               <input type="number" class="form-control" name = "first_number">

                              

                           </div>

                           <div class="form-group mt-3">
                            <label >Secound Number</label>
                            <input type="number" class="form-control" name = "secound_number">
                        </div>
                           <div class="btn-group  mt-3">
                            <button type="submit" class="btn btn-secondary" name="add">Add</button>
                            <button type="submit" class="btn btn-danger" name="sub">Sub</button>
                            <button type="submit" class="btn btn-primary" name="mul">Mul</button>
                            <button type="submit" class="btn btn-success" name="div">Div</button>
                           </div>
                           <?php if(isset( $_SESSION['result'])){?>
                           <div class="alert alert-success mt-3" >
                               <?php 
                                 echo $_SESSION['result'];
                                 unset($_SESSION['result']);
                               ?>
                           </div>
                           <?php } ?>
                         </form>
                    </div>
               </div>
             </div>
         </div>
     </div>

    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/index.js"></script>
</body>
</html>