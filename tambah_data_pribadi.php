<?php
// Koneksi ke database
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
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

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO data_pribadi (nip, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, no_sk, tanggal_pengangkatan, golongan, jabatan, unit_kerja, alamat, nomor_hp, email, pendidikan_terakhir, status_pernikahan) 
              VALUES ('$nip', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$no_sk', '$tanggal_pengangkatan', '$golongan', '$jabatan', '$unit_kerja', '$alamat', '$nomor_hp', '$email', '$pendidikan_terakhir', '$status_pernikahan')";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pribadi Pegawai PNS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #89cff0;
            padding: 20px;
            text-align: center;
        }
        form {
    max-width: 600px; /* Mengecilkan lebar form */
    background-color: #add8e6;
    margin: 0 auto;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 15px; /* Menambahkan jarak antar elemen form */
}
       
        .form-group {
            margin-bottom: 10px;
            width: 48%; /* Setengah lebar untuk dua kolom */
            text-align: left;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], input[type="email"], select {
            width: 100%;
            padding: 4px; /* Menurunkan padding */
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 14px; /* Menurunkan ukuran font */
        }
        .buttons {
            .buttons {
    width: 100%;
    text-align: left; /* Memindahkan tombol ke sisi kiri */
    margin-top: 15px;
    display: flex; /* Gunakan flex untuk pengaturan tombol */
    gap: 10px; /* Jarak antar tombol */
}
        }
        button {
            padding: 8px 15px;
            font-size: 14px; /* Menurunkan ukuran font */
            cursor: pointer;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: darkblue;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            background-color: blue;
            color: white;
            padding: 8px;
            border-radius: 5px;
        }
        a:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Pribadi Pegawai PNS</h1>
    <form method="POST" action="">
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" id="nip" name="nip" required>
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <select id="agama" name="agama" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="form-group">
            <label for="no_sk">Nomor SK:</label>
            <input type="text" id="no_sk" name="no_sk" required>
        </div>
        <div class="form-group">
            <label for="tanggal_pengangkatan">Tanggal Pengangkatan:</label>
            <input type="date" id="tanggal_pengangkatan" name="tanggal_pengangkatan" required>
        </div>
        <div class="form-group">
            <label for="golongan">Golongan:</label>
            <input type="text" id="golongan" name="golongan" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" required>
        </div>
        <div class="form-group">
            <label for="unit_kerja">Unit Kerja:</label>
            <input type="text" id="unit_kerja" name="unit_kerja" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" id="nomor_hp" name="nomor_hp" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
            <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
        </div>
        <div class="form-group">
            <label for="status_pernikahan">Status Pernikahan:</label>
            <select id="status_pernikahan" name="status_pernikahan" required>
                <option value="">Pilih Status</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Cerai">Cerai</option>
            </select>
        </div>
        <div class="buttons">
            <button type="submit">Simpan Data</button>
            <a href="dashboard_petugas.php">Kembali</a>
        </div>
    </form>
</body>
</html>
