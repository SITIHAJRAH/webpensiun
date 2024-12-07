<?php
include 'config.php';

// Mengambil ID dari URL
$id = $_GET['id'];

// Mengambil data berdasarkan ID
$query = "SELECT * FROM data_pribadi WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['nip'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $no_sk = $_POST['no_sk'];
    $tanggal_pengangkatan = $_POST['tanggal_pengangkatan'];
    $golongan = $_POST['golongan'];
    $jabatan = $_POST['jabatan'];
    $unit_kerja = $_POST['unit_kerja'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $email = $_POST['email'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $status_pernikahan = $_POST['status_pernikahan'];

    $update_query = "UPDATE data_pribadi SET 
        nip = '$nip',
        nama_lengkap = '$nama_lengkap',
        tempat_lahir = '$tempat_lahir',
        tanggal_lahir = '$tanggal_lahir',
        jenis_kelamin = '$jenis_kelamin',
        agama = '$agama',
        no_sk = '$no_sk',
        tanggal_pengangkatan = '$tanggal_pengangkatan',
        golongan = '$golongan',
        jabatan = '$jabatan',
        unit_kerja = '$unit_kerja',
        alamat = '$alamat',
        nomor_hp = '$nomor_hp',
        email = '$email',
        pendidikan_terakhir = '$pendidikan_terakhir',
        status_pernikahan = '$status_pernikahan'
        WHERE id = $id";

    mysqli_query($conn, $update_query);
    header('Location: data_pribadi_pegawai_pns.php'); // Redirect ke halaman data pribadi
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pribadi Pegawai PNS</title>
</head>
<body>
    <h1>Edit Data Pribadi Pegawai PNS</h1>
    <form method="POST" action="">
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" value="<?php echo $row['nip']; ?>" required><br>

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" required><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" required><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" required><br>

        <label for="agama">Agama:</label>
        <input type="text" id="agama" name="agama" value="<?php echo $row['agama']; ?>" required><br>

        <label for="no_sk">Nomor SK:</label>
        <input type="text" id="no_sk" name="no_sk" value="<?php echo $row['no_sk']; ?>" required><br>

        <label for="tanggal_pengangkatan">Tanggal Pengangkatan:</label>
        <input type="date" id="tanggal_pengangkatan" name="tanggal_pengangkatan" value="<?php echo $row['tanggal_pengangkatan']; ?>" required><br>

        <label for="golongan">Golongan:</label>
        <input type="text" id="golongan" name="golongan" value="<?php echo $row['golongan']; ?>" required><br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" id="jabatan" name="jabatan" value="<?php echo $row['jabatan']; ?>" required><br>

        <label for="unit_kerja">Unit Kerja:</label>
        <input type="text" id="unit_kerja" name="unit_kerja" value="<?php echo $row['unit_kerja']; ?>" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>

        <label for="nomor_hp">Nomor HP:</label>
        <input type="text" id="nomor_hp" name="nomor_hp" value="<?php echo $row['nomor_hp']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>

        <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
        <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" value="<?php echo $row['pendidikan_terakhir']; ?>" required><br>

        <label for="status_pernikahan">Status Pernikahan:</label>
        <input type="text" id="status_pernikahan" name="status_pernikahan" value="<?php echo $row['status_pernikahan']; ?>" required><br>

        <button type="submit">Update Data</button>
    </form>
</body>
</html>
