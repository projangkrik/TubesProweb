<?php
require '../../PenyewaanLapangan/Koneksi/db.php';
$message = '';
if (isset ($_POST['nama']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = 'INSERT INTO akun(nama, email, username, password, level) VALUES(:nama, :email, :username, md5(:password), "Member")';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nama' => $nama, ':email' => $email, ':username' => $username, ':password' => $password])) {

    echo "<script> alert('Berhasil Mendaftar ! Silahkan Login'); window.location.href='index.php';
          </script>";

  }else{echo "<script type='text/javascript'>alert('username dan email sudah terdaftar ! Silahkan isi kembali')</script>";}
}
 ?>

<html>
<title>SPORT AREA MEMBER DAFTAR</title>
<head>
  <link rel="stylesheet" href="bootstrap/custom/custom.css">
  <title></title>
</head>
<body>
  <?php require 'header_daftar.php'; ?>
  <div class="wrapper">
  <form class="form-signin" method="post"><br>
    <h2 class="form-signin-heading" align="center"><b>DAFTAR MEMBER</b></h2><br />
	  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required/><br />
	  <input type="email" class="form-control" name="email" placeholder="Masukan Email" required/><br />
    <input type="text" class="form-control" name="username" placeholder="Masukan Username" required/><br />
    <input type="password" class="form-control" name="password" placeholder="Masukan Password" required/><br />

    <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar Member <i class="fa fa-user-plus"></i></button>
  </form>
</div>
</nav>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>