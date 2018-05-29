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
$id_pesan = $_GET['id_pesan'];
$sql = 'DELETE FROM pesan WHERE id_pesan=:id_pesan';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_pesan' => $id_pesan])) {
  header("Location:Informasi_Pesan.php");
}