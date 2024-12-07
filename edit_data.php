<?php
include 'config.php';

// Mengambil ID dari URL
$id = $_GET['id'];

// Mengambil data berdasarkan ID
$query = "SELECT * FROM data_pensiun WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['nip'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jabatan_terakhir = $_POST['jabatan_terakhir'];
    $unit_kerja_terakhir = $_POST['unit_kerja_terakhir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tanggal_mulai_pensiun = $_POST['tanggal_mulai_pensiun'];
    $bulan = date('m', strtotime($tanggal_mulai_pensiun));
    $tahun = date('Y', strtotime($tanggal_mulai_pensiun));
    $masa_kerja = $_POST['masa_kerja'];
    $golongan_terakhir = $_POST['golongan_terakhir'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $status_pensiun = $_POST['status_pensiun'];

    $update_query = "UPDATE data_pensiun SET 
        nip = '$nip',
        nama_lengkap = '$nama_lengkap',
        jabatan_terakhir = '$jabatan_terakhir',
        unit_kerja_terakhir = '$unit_kerja_terakhir',
        tanggal_lahir = '$tanggal_lahir',
        tanggal_mulai_pensiun = '$tanggal_mulai_pensiun',
        bulan = '$bulan',
        tahun = '$tahun',
        masa_kerja = '$masa_kerja',
        golongan_terakhir = '$golongan_terakhir',
        alamat = '$alamat',
        nomor_hp = '$nomor_hp',
        status_pensiun = '$status_pensiun'
        WHERE id = $id";

    mysqli_query($conn, $update_query);
    header('Location: data_pensiun.php'); // Redirect ke halaman data pensiun
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pensiun</title>
</head>
<body>
    <h1>Edit Data Pensiun</h1>
    <form method="POST" action="">
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" value="<?php echo $row['nip']; ?>" required><br>

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" required><br>

        <label for="jabatan_terakhir">Jabatan Terakhir:</label>
        <input type="text" id="jabatan_terakhir" name="jabatan_terakhir" value="<?php echo $row['jabatan_terakhir']; ?>" required><br>

        <label for="unit_kerja_terakhir">Unit Kerja Terakhir:</label>
        <input type="text" id="unit_kerja_terakhir" name="unit_kerja_terakhir" value="<?php echo $row['unit_kerja_terakhir']; ?>" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required><br>

        <label for="tanggal_mulai_pensiun">Tanggal Mulai Pensiun:</label>
        <input type="date" id="tanggal_mulai_pensiun" name="tanggal_mulai_pensiun" value="<?php echo $row['tanggal_mulai_pensiun']; ?>" required><br>

        <label for="masa_kerja">Masa Kerja:</label>
        <input type="text" id="masa_kerja" name="masa_kerja" value="<?php echo $row['masa_kerja']; ?>" required><br>

        <label for="golongan_terakhir">Golongan/Pangkat Terakhir:</label>
        <input type="text" id="golongan_terakhir" name="golongan_terakhir" value="<?php echo $row['golongan_terakhir']; ?>" required><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required><?php echo $row['alamat']; ?></textarea><br>

        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" value="<?php echo $row['nomor_hp']; ?>" required><br>

        <label for="status_pensiun">Status Pensiun:</label>
        <input type="text" id="status_pensiun" name="status_pensiun" value="<?php echo $row['status_pensiun']; ?>" required><br>

        <button type="submit">Update Data</button>
    </form>
</body>
</html>
