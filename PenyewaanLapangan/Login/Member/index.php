<?php
session_start();//memulai session
if( !isset($_SESSION['nama_u']) ) //jika session nama tidak ada
{
 header('location:./../'.$_SESSION['akses']); //alihkan halaman
 exit();
}else{ //jika ada session
 $nama = $_SESSION['nama_u']; //menyimpan session nama ke variabel $nama
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sport Area Balikpapan</title>
	
	 <!-- add bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="/PenyewaanLapangan/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/PenyewaanLapangan/css/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href=""><i class="fa fa-user"></i> <?php echo $nama;?></a>
	  <button class="navbar-toggler" type="button" 
	  data-toggle="collapse" 
	  data-target="#navbarSupportedContent" 
	  aria-controls="navbarSupportedContent" 
	  aria-expanded="false" aria-label="Toggle navigation">

	  <span class="navbar-toggler-icon"></span>
	  </button>

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
          <a class="nav-link " href="BelumTersedia.php"><i class="fa fa-envelope-o"></i> Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="BelumTersedia.php"><i class="fa fa-bell-slash-o"></i> Notifikasi</a>
        </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="contact" href="./../logout.php"> Logout <i class="fa fa-sign-out"></i></a>
	      </li>
	    </ul>
	    
	  </div>
</nav>
<!-- header -->
<?php require 'test.php'; ?>
<!-- add Javasscript file from js file -->


</body>
<footer class="footer">
    <div class="footerContainer">
        <center><p class="copyright"><b>© Institut Teknologi Kalimantan 2018<b></p>
    </div>
</footer>
</html>