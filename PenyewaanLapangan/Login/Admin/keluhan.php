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
$sql = 'SELECT * FROM keluhan';
$statement = $connection->prepare($sql);
$statement->execute();
$keluhan = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_informasi.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header"><br>
      <center><h2><b>SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN SARAN DAN KRITIK </b></h2></center>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>No. Telepon</th>
          <th>Pesan</th>
          <th>Aksi</th>
       </tr>
        <?php foreach($keluhan as $person): ?>
          <tr>
            <td><?= $person->nama; ?></td>
            <td><?= $person->email; ?></td>
	       		<td><?= $person->nomor_telepon; ?></td>
            <td><?= $person->pesan; ?></td>
            <td>
              <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href="hapus_keluhan.php?id_keluhan=<?= $person->id_keluhan ?>" class='btn btn-danger'>Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

