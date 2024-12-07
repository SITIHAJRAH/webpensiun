<?php
include 'config.php';

// Mengambil ID dari URL
$id = $_GET['id'];

// Query untuk menghapus data
$query = "DELETE FROM data_pribadi WHERE id = $id";
mysqli_query($conn, $query);

// Redirect ke halaman data pribadi setelah penghapusan
header('Location: data_pribadi_pegawai_pns.php');
?>
