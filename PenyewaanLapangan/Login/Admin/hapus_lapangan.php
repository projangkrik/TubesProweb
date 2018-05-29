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
$sql = 'DELETE FROM lapangan WHERE id_lapangan=:id_lapangan';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_lapangan' => $id_lapangan])) {
  header("Location:Informasi_Lapangan_Admin.php");
}