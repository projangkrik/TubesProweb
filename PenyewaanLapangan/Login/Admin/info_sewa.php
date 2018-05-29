<?php
session_start(); //memulai session
if( !isset($_SESSION['Saya_Admin']) ) //jika session login bukan Admin
{
 header('location:./../'.$_SESSION['akses']); //alihkan berdasarkan hak akses
 exit();
}
$nama = ( isset($_SESSION['nama_u']) ) ? $_SESSION['nama_u'] : '';
?>
<?php
require '../../Koneksi/db.php';
$sql = 'SELECT * FROM sewa';
$statement = $connection->prepare($sql);
$statement->execute();
$sewa = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_informasi.php'; ?>
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
          <th>Aksi</th>
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
            <td>
              <a onclick="return confirm('Konfirmasi Permintaan ?')" href="konfirmasi_sewa.php?id_sewa=<?= $person->id_sewa ?>" class="btn btn-info">Konfirmasi</a>
              <a onclick="return confirm('Batalkan Permintaan ?')" href="batalkan_sewa.php?id_sewa=<?= $person->id_sewa ?>" class='btn btn-danger'>Batalkan</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

