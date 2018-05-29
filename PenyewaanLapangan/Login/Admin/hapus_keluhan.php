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
$id_keluhan = $_GET['id_keluhan'];
$sql = 'DELETE FROM keluhan WHERE id_keluhan=:id_keluhan';
$statement = $connection->prepare($sql);
if ($statement->execute([':id_keluhan' => $id_keluhan])) {
  header("Location:keluhan.php");
}