<?php
 session_start(); //memulai session
 if( isset($_SESSION['akses']) ) //mengecek session akses
{
     header('location:'.$_SESSION['akses']);
     exit();
}
 $error = '';
 if( isset($_SESSION['error']) ) { //menangani error
      $error = $_SESSION['error']; //set error
      unset($_SESSION['error']);
 } ?>
<html>
<title>SPORT AREA LOGIN</title>
<head>
  <link rel="stylesheet" href="../css/custom.css">
  <title></title>
</head>
<body>
  <?php require 'header.php'; ?>
  <div class="wrapper">
  <form class="form-signin" action="check-login.php" method="post"><br>
    <h2 class="form-signin-heading" align="center"><b>SP<i class="fa fa-futbol-o"></i>RT AREA</b></h2><br />
    <input type="text" class="form-control" name="username" placeholder="Masukan Username" required/><br />
    <input type="password" class="form-control" name="password" placeholder="Masukan Password" required/><br />
    <?php echo $error;?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login <i class="fa fa-sign-in"></i></button>
  </form>
</div>
</nav>

</body>
</html>