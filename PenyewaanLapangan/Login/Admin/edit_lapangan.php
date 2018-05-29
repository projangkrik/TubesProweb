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
$id_lapangan = $_GET['id_lapangan'];
$sql = 'SELECT * FROM lapangan WHERE id_lapangan=:id_lapangan';
$statement = $connection->prepare($sql);
$statement->execute([':id_lapangan' => $id_lapangan ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['id_lapangan']) && isset($_POST['Gambar']) && isset($_POST['nama_lapangan']) && isset($_POST['biaya_sewa']) && isset($_POST['Status']) && isset($_POST['Info']) ) {
  $id_lapangan = $_POST['id_lapangan'];
  $Gambar = $_POST['Gambar'];
  $nama_lapangan = $_POST['nama_lapangan'];
  $biaya_sewa = $_POST['biaya_sewa'];
  $Status = $_POST['Status'];
  $Info = $_POST['Info'];

  $sql = 'UPDATE lapangan SET Gambar=:Gambar,nama_lapangan=:nama_lapangan,biaya_sewa=:biaya_sewa,Status=:Status,Info=:Info WHERE id_lapangan=:id_lapangan';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':id_lapangan' => $id_lapangan, ':Gambar' => $Gambar, ':nama_lapangan' => $nama_lapangan, ':biaya_sewa' => $biaya_sewa, ':Status' => $Status, ':Info' => $Info]))

  {  echo "<script> alert('Berhasil Mengedit Lapangan !'); window.location.href='Informasi_Lapangan_Admin.php';
          </script>";
  }else
  {echo "<script type='text/javascript'>alert('Terjadi Kesalahan ! Silahkan isi kembali')</script>";

  }}
 ?>

<?php require 'header_edit.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <br><center><h2><b><i class="fa fa-star-o"></i> Edit Lapangan <i class="fa fa-star-o"></i></b></h2></center>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="id_lapangan">ID Lapangan</label>
          <input type="text" name="id_lapangan" value="<?= $person->id_lapangan; ?>" id="id_lapangan" class="form-control" readonly>

          <div class="form-group">
          <input hidden="" type="text" name="Gambar" value="<?= $person->Gambar; ?>" class="form-control"></div>
        
        <center><div>
          <label for="Gambar">Gambar</label><br>
          <img src="<?= $person->Gambar; ?>" alt="<?= $person->Gambar; ?>" width="200" height="200">
        </div></center>

        <div class="form-group">
          <label for="nama_lapangan">Nama Lapangan</label>
          <input type="text" name="nama_lapangan" value="<?= $person->nama_lapangan; ?>" id="nama_lapangan" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="biaya_sewa">Biaya Sewa</label>
          <input type="text" name="biaya_sewa" value="<?= $person->biaya_sewa; ?>" id="biaya_sewa" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Status">Status</label>
          <select name="Status" id="Status" class="form-control">
           <option hidden><?= $person->Status; ?></option>
           <option>TERSEDIA</option>
           <option>TIDAK ADA</option>
           <option>DALAM PERBAIKAN</option>
         </select>
        </div>
        <div class="form-group">
          <label for="Info">Info</label>
          <input type="text" name="Info" value="<?= $person->Info; ?>" id="Info" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Edit Lapangan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>