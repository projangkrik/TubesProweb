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
$message = '';
if (isset ($_POST['Nama_Lapangan']) && isset($_POST['Nama_Penyewa']) && isset($_POST['Email']) && isset($_POST['No_Telpon']) && isset($_POST['Jam_Mulai']) && isset($_POST['Jam_Akhir']) ) {
  $Nama_Lapangan = $_POST['Nama_Lapangan'];
  $Nama_Penyewa = $_POST['Nama_Penyewa'];
  $Email = $_POST['Email'];
  $No_Telpon = $_POST['No_Telpon'];
  $Jam_Mulai = $_POST['Jam_Mulai'];
  $Jam_Akhir = $_POST['Jam_Akhir'];
  $sql = 'INSERT INTO sewa(Nama_Lapangan, Nama_Penyewa, Email, No_Telpon, Jam_Mulai, Jam_Akhir) VALUES(:Nama_Lapangan, :Nama_Penyewa, :Email, :No_Telpon, :Jam_Mulai, :Jam_Akhir)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':Nama_Lapangan' => $Nama_Lapangan, ':Nama_Penyewa' => $Nama_Penyewa, ':Email' => $Email, ':No_Telpon' => $No_Telpon, ':Jam_Mulai' => $Jam_Mulai, ':Jam_Akhir' => $Jam_Akhir])) {
    $message = '<center>Permintaan anda telah di proses anda akan di hubungi oleh pihak kami</center>';
  }else{$message = 'Terjadi Kesalahan Silahkan Cek !';}
}
 ?>

<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header"><br>
      <center><h2><b><i class="fa fa-star-o"></i> Sewa Lapangan <i class="fa fa-star-o"></i></b></h2></center>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="Jenis_Lapangan">Nama Lapangan</label>
          <br>
          <select name="Nama_Lapangan" id="Nama_Lapangan" class="form-control">
           <option value="Futsal Arena">Futsal Arena</option>
           <option value="Olympic Swimming Pool">Olympic Swimming Pool</option>
           <option value="Tennis Indoor">Tennis Indoor</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Nama_Penyewa">Nama Penyewa</label>
          <input type="text" name="Nama_Penyewa" id="Nama_Penyewa" value="<?php echo $nama;?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="Email">Email</label>
          <input type="email" name="Email" id="Email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="No_Telpon">No Telepon</label>
          <input type="number" name="No_Telpon" id="No_Telpon" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Jam_Mulai">Jam Mulai</label>
          <select name="Jam_Mulai" id="Jam_Mulai" class="form-control">
           <option value="08:00:00">08:00:00</option>
           <option value="09:00:00">09:00:00</option>
           <option value="10:00:00">10:00:00</option>
           <option value="11:00:00">11:00:00</option>
           <option value="12:00:00">12:00:00</option>
           <option value="13:00:00">13:00:00</option>
           <option value="14:00:00">14:00:00</option>
           <option value="15:00:00">15:00:00</option>
           <option value="16:00:00">16:00:00</option>
           <option value="17:00:00">17:00:00</option>
           <option value="18:00:00">18:00:00</option>
           <option value="19:00:00">19:00:00</option>
           <option value="20:00:00">20:00:00</option>
           <option value="21:00:00">21:00:00</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Jam_Akhir">Jam Akhir</label>
          <select name="Jam_Akhir" id="Jam_Akhir" class="form-control">
           <option value="08:00:00">08:00:00</option>
           <option value="09:00:00">09:00:00</option>
           <option value="10:00:00">10:00:00</option>
           <option value="11:00:00">11:00:00</option>
           <option value="12:00:00">12:00:00</option>
           <option value="13:00:00">13:00:00</option>
           <option value="14:00:00">14:00:00</option>
           <option value="15:00:00">15:00:00</option>
           <option value="16:00:00">16:00:00</option>
           <option value="17:00:00">17:00:00</option>
           <option value="18:00:00">18:00:00</option>
           <option value="19:00:00">19:00:00</option>
           <option value="20:00:00">20:00:00</option>
           <option value="21:00:00">21:00:00</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Sewa Lapangan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
