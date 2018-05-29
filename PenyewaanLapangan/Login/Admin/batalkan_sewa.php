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
$id_sewa = $_GET['id_sewa'];
$sql = 'DELETE FROM sewa WHERE id_sewa=:id_sewa';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_sewa' => $id_sewa])) {
  header("Location:info_sewa.php");
}