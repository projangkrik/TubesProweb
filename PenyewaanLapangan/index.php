<?php
require 'Koneksi/db.php';
$message = '';
if (isset ($_POST['nama']) && isset($_POST['email']) && isset($_POST['pesan']) && isset($_POST['nomor_telepon']) ) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];
  $nomor_telepon = $_POST['nomor_telepon'];

  $sql = 'INSERT INTO keluhan(nama, email, nomor_telepon, pesan) VALUES(:nama, :email, :nomor_telepon, :pesan)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nama' => $nama, ':email' => $email, ':pesan' => $pesan, ':nomor_telepon' => $nomor_telepon])) {

    header('location:fin.php');

  }else{echo "<script type='text/javascript'>alert('Terjadi Kesalahan ! Silahkan isi kembali')</script>";}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPORT AREA BALIKPAPAN</title>
	
	 <!-- add bootstrap css file -->
      
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   	  <link rel="stylesheet" href="css/bootstrap.min.css">
   	  
   	  <script src="js/jquery-1.11.1.min.js"></script>
   	  <script src="js/bootstrap.min.js"></script>

</head>
<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href="Login"><b> SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN</b></a>
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
	        <a class="nav-link" data-value="about" href="#"><i class="fa fa-sort"></i> Tentang Sport  Area</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="Lapangan" href="#"><i class="fa fa-sort"></i> Lapangan </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="team" href="#"><i class="fa fa-sort"></i> Team </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="contact" href="#"><i class="fa fa-sort"></i> Kontak </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="login" href="Login/index.php"><i class="fa fa-sign-in"></i> Login </a>
	      </li>
	    </ul>
	    
	  </div>
</nav>
<!-- header -->

<header class="header">
	<div class="container">
   	  <div class="carousel-caption">
  	<h1><b>Sp<i class="fa fa-futbol-o"></i>rt Area Balikpapan</h1><br><br><br><br><br>
  	<p>Arena Olahraga Dengan Pelayanan<br> Terjamin dan Terlengkap di Balikpapan</p>
  	  </div>
  	</div>
</header>

<!-- about section -->
<div class="about" id="about">
	<div class="container">
	  <h1 class="text-center">Apa itu Sport Area Balikpapan ?</h1>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/SportAreaBalikpapan.jpeg" alt="Sport Area Balikpapan" align="middle" class="img-fluid">
				<span class="text-justify"><b>Sport Area Center</b></span>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 desc">
			  
				<h3>Sport Area Balikpapan</h3>
				<p align="justify">
				   Merupakan salah satu tempat olahraga dengan fasilitas yang lengkap di Balikpapan. Segera hubungi kami untuk pemesanan bisa dengan mengisi Form Reservasi di web atau Email kami di Contact Us!.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- portfolio -->



<!-- Posts section -->
<div class="blog" id="Lapangan">
	<div class="container">
	<h1 class="text-center">Lapangan</h1>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/Lapangan/Lapangan_Futsal.jpeg" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Futsal Arena</h4>
						<p class="card-text" align="justify">
							Lapangan futsal memiliki fasilitas rumput
							sintetis atau matras yang nyaman.
						</p>
					</div>
					<div class="card-footer">
						<a href="Login" class="card-link">Pesan Sekarang!</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/Lapangan/Kolam_Renang.jpeg" class="img-fluid">
					</div>
					
					<div class="card-body">
					   <h4 class="card-title">Olympic Swimming Pool</h4>
						<p class="card-text" align="justify">
							Olympic Swimming Pool memiliki fasilitas
							indoor dengan kedalaman kolam 2 Meter.
						</p>
					</div>
					<div class="card-footer">
						<a href="Login" class="card-link">Pesan Sekarang!</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/Lapangan/Lapangan_Tenis.jpeg" class="img-fluid">
					</div>

					<div class="card-body">
					<h4 class="card-title">Tennis Indoor</h4>
						<p class="card-text" align="justify">
							Lapangan Tennis memiliki fasilitas indoor
							yang nyaman.
						</p>
					</div>
					<div class="card-footer">
						<a href="Login" class="card-link">Pesan Sekarang!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><br>


<!-- Team section -->
<div class="team" id="team">
	<div class="container">
	   <h1 class="text-center">Team Website Sport Area Balikpapan</h1><br><br>
		<div class="row">

			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<!-- Jarak -->
			</div>

			<div class="col-lg-2 col-md-3 col-sm-12 item">
				<img src="images/Team/10161005.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	 <center>Adelia Firsty</center>
				 </div>
				<span class="text-muted"><center>10161005</center></span>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12 item">
				<img src="images/Team/10151014.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	<center>Dika Maraga Maulid</center>
				 </div>
				<span class="text-muted"><center>10151014</center></span>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12 item">
				<img src="images/Team/10161088.jpg" class="img-fluid" alt="team">
				 <div class="des">
				 	<center>Shofa Ferlina</center>
				 </div>
				<span class="text-muted"><center>10161088</center></span>
			</div>

			<div class="col-lg-4 col-md-3 col-sm-12 item">
				<!-- Jarak -->
			</div>

			<div class="col-lg-2 col-md-3 col-sm-12 item">
				<img src="images/Team/10161052.jpg" class="img-fluid" alt="team">
				 <div class="des">
				 	<center>Fuad Wiyono Putra</center>
				 </div>
				<span class="text-muted"><center>10161052</center></span>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-12 item">
				<img src="images/Team/10161060.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	<center>Muhammad Fadillah</center>
				 </div>
				<span class="text-muted"><center>10161060</center></span>
			</div>
		</div>
	</div>
</div><br><br><br><br><br><br>



<!-- Contact form -->
<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Kontak Kami</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed/v1/view?zoom=11&center=-1.1487%2C116.8715&key=AIzaSyBr-d9J_gFVlz7VF9VtsZSiNw5qEXNH3tI" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Saran dan Kritik</strong></h4>
        <form method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="nama" value="" placeholder="Nama" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="nomor_telepon" value="" placeholder="Nomor Telepon" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="pesan" rows="3" placeholder="Saran dan Kritik"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div><br>
</section>
<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

</body>
<footer class="footer">
    <div class="footerContainer">
        <center><p class="copyright">© Institut Teknologi Kalimantan 2018</p>
    </div>
</footer>
</html>