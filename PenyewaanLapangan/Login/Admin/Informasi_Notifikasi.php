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
$sql = 'SELECT * FROM notifikasi';
$statement = $connection->prepare($sql);
$statement->execute();
$notifikasi = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header_informasi.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header"><br>
      <center><h2><b>SP<i class="fa fa-futbol-o"></i>RT AREA BALIKPAPAN NOTIFIKASI</b></h2></center>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          
          <th>Isi Notifikasi</th>
          <th>Aksi</th>
       </tr>
        <?php foreach($notifikasi as $person): ?>
          <tr>
            <td><?= $person->isi_notifikasi; ?></td>
            <td>
              <a onclick="return confirm('Apakah anda yakin ingin menghapus ?')" href="hapus_notifikasi.php?id_notifikasi=<?= $person->id_notifikasi ?>" class='btn btn-danger'>Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>

