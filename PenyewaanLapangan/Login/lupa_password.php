<?php
require '../../PenyewaanLapangan/Koneksi/db.php';
$message = '';
if (isset ($_POSTs['nama']) && isset($_POSTs['email']) && isset($_POSTs['username']) && isset($_POSTs['password']) ) {
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
<title>SPORT AREA LUPA PASSWORD</title>
<head>
  <link rel="stylesheet" href="bootstrap/custom/custom.css">
  <title></title>
</head>
<body>
  <?php require 'header_lupa_password.php'; ?>
  <div class="wrapper">
  <form class="form-signin" method="post"><br>
    <h2 class="form-signin-heading" align="center"><b>LUPA PASSWORD</b></h2><br />
	  <input type="email" class="form-control" name="email" placeholder="Masukan Email" required/><br />

    <button class="btn btn-lg btn-primary btn-block" name="act_resset" type="submit">Reset Password  <i class="fa fa-undo"></i></button>
  </form>
</div>
</nav>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
</body>
</html>

<?PHP 
  $server = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'penyewaan_lapangan';
  $x = mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
  mysql_select_db($dbname,$x);
///////////////////////////////////////////////////////////////////////
  if (isset($_POST['act_resset']))  { 
  $email = trim(strip_tags($_POST['email']));

// mencari alamat email si user
  $query = "SELECT * FROM akun WHERE email ='$email'";
  $hasil = mysql_query($query);
  $data  = mysql_fetch_array($hasil);
  $cek = mysql_num_rows($hasil);
  $id = strip_tags($data['id']);
  $alamatEmail = strip_tags($data['email']);
  $nama = strip_tags($data['nama']);
  $username =trim(strip_tags($data['username']));
  if ($cek == 1) {

  // mengirim email
  $kirimEmail = "echosadas";  //= mail($alamatEmail, $title, $pesan, $header);
  // cek status pengiriman email
  if ($kirimEmail) { 

    // update password baru ke database (jika pengiriman email sukses)
    $query = "INSERT INTO pesan (Email,Isi_Pesan) VALUES ('$alamatEmail','Permintaan Reset Password username(' '$username' ')')";
    $hasil = mysql_query($query);

    if ($hasil) 
  echo "<script type='text/javascript'>alert('Alamat Email : ".$alamatEmail." telah ditemukan dan akan Segera diproses oleh pihak kami silahkan cek email untuk mendapatkan password baru')</script>";
    }
  else {
  echo'<div class="warning">Pengiriman Kata sandi baru ke email gagal</div>';
  }
  }
  else{  
  echo "<script type='text/javascript'>alert('Alamat Email Tidak Ditemukan ! Silahkan isi kembali')</script>";
}}


?>