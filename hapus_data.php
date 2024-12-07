<?php
include 'config.php';

// Mengambil ID dari URL
$id = $_GET['id'];

// Query untuk menghapus data
$query = "DELETE FROM data_pensiun WHERE id = $id";
mysqli_query($conn, $query);

// Redirect ke halaman data pensiun setelah penghapusan
header('Location: data_pensiun.php');
?>
