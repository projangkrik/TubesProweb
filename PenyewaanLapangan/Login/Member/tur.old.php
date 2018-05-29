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
<!doctype html>
<html lang="en">
  <head>
    <title>SPORT AREA BALIKPAPAN</title>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/yolo.css">

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
                    <img src="../../Images/Background/turnamen.PNG" alt="Turnamen">
                    <div class="carousel-captions">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/turnamen1.PNG" alt="Turnamen">
                    <div class="carousel-captionZ">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/turnamen2.PNG" alt="Turnamen">
                    <div class="carousel-captions1">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/turnamen3.PNG" alt="Turnamen">
                    <div class="carousel-captions1">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/turnamen4.PNG" alt="Turnamen">
                    <div class="carousel-captions1">
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/turnamen5.PNG" alt="Turnamen">
                    <div class="carousel-captions1">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../Images/Background/turnamen6.PNG" alt="Turnamen">
                    <div class="carousel-captions1">
                        
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
