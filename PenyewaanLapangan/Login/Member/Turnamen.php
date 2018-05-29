<?php
session_start(); //memulai session
if( !isset($_SESSION['nama_u']) ) //jika session nama tidak ada
{
 header('location:./../'.$_SESSION['akses']); //alihkan halaman
 exit();
}else{ //jika ada session
 $nama = $_SESSION['nama_u']; //menyimpan session nama ke variabel $nama
}

?>
<?php require 'tur.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-lg fixed-top ">
    <a class="nav-link" href="index.php"><i class="fa fa-arrow-left"></i> KEMBALI <span class="sr-only">(current)</span></a>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-4">

    
        <li class="nav-item">
          <a class="nav-link " data-value="Lapangan" href="Informasi_Lapangan.php"><i class="fa fa-info"></i> Informasi Lapangan </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " data-value="portfolio" href="info_sewa.php"><i class="fa fa fa-info"></i> Info Sewa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="contact" href="Turnamen.php"><i class="fa fa-trophy"></i> Turnamen </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-value="portfolio" href="sewa.php"><i class="fa fa-money"></i> Sewa Lapangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fa fa-envelope-o"></i> Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fa fa-bell-slash-o"></i> Notifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./../logout.php">Logout <i class="fa fa-sign-out"></i></a>
        </li>
      </ul>
    </div>
</nav>
<!-- header -->

<!-- add Javasscript file from js file -->

</html>

<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" type="text/css" href="/PenyewaanLapangan/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/PenyewaanLapangan/css/main.css">
<!--Script Gambar Deteksi-->

