<?php
session_start(); //memulai session
if( !isset($_SESSION['Saya_Admin']) ) //jika session login bukan Admin
{
 header('location:./../'.$_SESSION['akses']); //alihkan berdasarkan hak akses
 exit();
}
$nama = ( isset($_SESSION['nama_u']) ) ? $_SESSION['nama_u'] : '';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>SPORT AREA BALIKPAPAN</title>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/login.css">

     <header class="header">
        <div class="overlay"></div>
        <div id="demo" class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../Images/Background/Welcome.PNG" alt="Welcome">
                    <div class="carousel-captions">
                        <h1><span style="color: black"><b>SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN</b></span></h2><br>
                        <h1><span style="color: #191970"><b>Selamat Datang<br><?php echo $nama;?></b></span></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/DaftarTurnamen.PNG" alt="Daftar Turnamen">
                    <div class="carousel-captionZ">
                        <h1><span style="color: black"><b>DAFTARKAN DIRIMU SEKARANG </span></h2><br><br>
                        <h1><span style="color: #191970">SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN TURNAMEN</b></span></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/SewaLapangan.PNG" alt="Sewa Lapangan">
                    <div class="carousel-captions1">
                        <h1><span style="color: black"><b>SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN</span></h2><br>
                        <h1><span style="color: #191970">SEWA LAPANGAN SEKARANG</b></span></h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a></div>
    </header>
