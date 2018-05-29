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
$sql = 'SELECT * FROM lapangan';
$statement = $connection->prepare($sql);
$statement->execute();
$lapangan = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_edit.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header"><br>
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
          <th>Aksi</th>
       </tr>
        <?php foreach($lapangan as $person): ?>
          <tr>
            <td><center><img src="<?=$person->Gambar;?>" alt="Lapangan" border=3 height=100 width=150></center></img></td>
            <td><?= $person->nama_lapangan; ?></td>
            <td><?= $person->biaya_sewa; ?></td>
	       		<td><?= $person->Status; ?></td>
            <td><?= $person->Info; ?></td>
            <td>
              <a href="edit_lapangan.php?id_lapangan=<?= $person->id_lapangan ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href="hapus_lapangan.php?id_lapangan=<?= $person->id_lapangan ?>" class='btn btn-danger'>Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

