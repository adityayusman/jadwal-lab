<?php 
include 'config.php';
session_start(); 
if (isset($_SESSION["username"])) 
{
  
  echo "<script>location='home.php';</script>";  
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sistem Penjadwalan</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
 
  
</head>
<body>



  <div class="col-md-4 col-md-offset-4 form-login">

  <div class="outter-form-login">
        
            <form action="proseslogin.php" class="inner-login" method="post">

            <h3 class="text-center title-login">SISTEM PENJADWALAN LABORATORIUM</h3>
            <h3 class="text-center title-login">SMA NEGERI 1 NALUMSARI</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                
            </form>
        </div>
    </div>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>

</body>
</html>
 



