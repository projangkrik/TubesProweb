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
$sql = 'SELECT * FROM sewa';
$statement = $connection->prepare($sql);
$statement->execute();
$sewa = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header"><br>
      <center><h2><b>SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN INFO SEWA</b></h2></center>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Nama Penyewa</th>
          <th>Nama Lapangan</th>
          <th>Email</th>
          <th>No. Telepon</th>
          <th>Jam Mulai</th>
          <th>Jam Akhir</th>
          <th>Status</th>
       </tr>
        <?php foreach($sewa as $person): ?>
          <tr>
            <td><?= $person->Nama_Penyewa; ?></td>
            <td><?= $person->nama_lapangan; ?></td>
	       		<td><?= $person->Email; ?></td>
            <td><?= $person->No_Telpon; ?></td>
            <td><?= $person->Jam_Mulai; ?></td>
            <td><?= $person->Jam_Akhir; ?></td>
            <td><?= $person->Status; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

