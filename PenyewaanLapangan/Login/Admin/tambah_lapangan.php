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
$message = '';
if (isset ($_POST['Gambar']) && isset($_POST['nama_lapangan']) && isset($_POST['biaya_sewa']) && isset($_POST['Status']) && isset($_POST['Info']) ) {
  $Gambar = $_POST['Gambar'];
  $nama_lapangan = $_POST['nama_lapangan'];
  $biaya_sewa = $_POST['biaya_sewa'];
  $Status = $_POST['Status'];
  $Info = $_POST['Info'];
  $sql = 'INSERT INTO Lapangan(Gambar, nama_lapangan, biaya_sewa, Status, Info) VALUES("../../images/lapangan/":Gambar, :nama_lapangan, :biaya_sewa, :Status, :Info)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':Gambar' => $Gambar, ':nama_lapangan' => $nama_lapangan, ':biaya_sewa' => $biaya_sewa, ':Status' => $Status, ':Info' => $Info])) {
    $message = '<center>Penambahan Lapangan Telah Berhasil Silahkan Cek !</center>';
  }else{echo "<script type='text/javascript'>alert('Terjadi Kesalahan ! Silahkan isi kembali')</script>";}
  }
 ?>

<?php require 'header_tambah_lapangan.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <center><h2><b><i class="fa fa-star-o"></i> Tambah Lapangan <i class="fa fa-star-o"></i></b></h2></center>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <center><p><b> Peringatan ! Gambar harus di PenyewaanLapangan/Images/Lapangan Kemudian masukan file gambarnya !</b></p></center>
        <div class="form-group">
          <label for="Gambar">Gambar</label>
          <input type="file" name="Gambar" id="Gambar" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="nama_lapangan">Nama Lapangan</label>
          <input type="text" name="nama_lapangan" id="nama_lapangan" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="biaya_sewa">Biaya Sewa</label>
          <input type="text" name="biaya_sewa" id="biaya_sewa" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Status">Status</label>
          <select name="Status" id="Status" class="form-control">
           <option value="TERSEDIA">TERSEDIA</option>
           <option value="TIDAK ADA">TIDAK ADA</option>
           <option value="DALAM PERBAIKAN">DALAM PERBAIKAN</option>
         </select>
        </div>
        <div class="form-group">
          <label for="Info">Info</label>
          <input type="text" name="Info" id="Info" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" id="submit" class="btn btn-info">Tambah Lapangan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Script Gambar Deteksi-->

<?php require 'footer.php'; ?>


