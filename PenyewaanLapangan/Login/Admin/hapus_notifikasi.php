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
$id_notifikasi = $_GET['id_notifikasi'];
$sql = 'DELETE FROM notifikasi WHERE id_notifikasi=:id_notifikasi';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_notifikasi' => $id_notifikasi])) {
  header("Location:Informasi_Notifikasi.php");
}