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
<?php
require '../../Koneksi/db.php';
$sql = 'SELECT * FROM lapangan';
$statement = $connection->prepare($sql);
$statement->execute();
$lapangan = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <center><h2><b>SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN</b></h2></center>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Gambar</th>
          <th>Nama Lapangan</th>
          <th>Biaya Sewa</th>
          <th>Status</th>
          <th>Info</th>
       </tr>
        <?php foreach($lapangan as $person): ?>
          <tr>
            <td><center><img src="<?=$person->Gambar;?>" alt="Lapangan" border=3 height=100 width=150></img></center></td>
            <td><?= $person->nama_lapangan; ?></td>
            <td><?= $person->biaya_sewa; ?></td>
	       		<td><?= $person->Status; ?></td>
            <td><?= $person->Info; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

