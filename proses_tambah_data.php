<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nip = $_POST['nip'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jabatan_terakhir = $_POST['jabatan_terakhir'];
    $unit_kerja_terakhir = $_POST['unit_kerja_terakhir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tanggal_mulai_pensiun = $_POST['tanggal_mulai_pensiun'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $masa_kerja = $_POST['masa_kerja'];
    $golongan_terakhir = $_POST['golongan_terakhir'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $status_pensiun = $_POST['status_pensiun'];

    $query = "INSERT INTO data_pensiun (nip, nama_lengkap, jabatan_terakhir, unit_kerja_terakhir, 
                tanggal_lahir, tanggal_mulai_pensiun, bulan, tahun, masa_kerja, golongan_terakhir, 
                alamat, nomor_hp, status_pensiun) 
              VALUES ('$nip', '$nama_lengkap', '$jabatan_terakhir', '$unit_kerja_terakhir', 
                      '$tanggal_lahir', '$tanggal_mulai_pensiun', '$bulan', '$tahun', 
                      '$masa_kerja', '$golongan_terakhir', '$alamat', '$nomor_hp', '$status_pensiun')";

    if (mysqli_query($conn, $query)) {
        header("Location: data_pensiun.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pensiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f9;
        }
        .container {
            display: flex;
            width: 80%;
            margin-top: 20px;
        }
        .sidebar {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .sidebar button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .sidebar button:hover {
            background-color: #45a049;
        }
        .form-container {
            flex: 3;
            margin-left: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input, form select, form textarea {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <img src="logo.png" alt="Logo">
            <p>Profil Petugas</p>
            <button onclick="window.location.href='simpan_data.php'">Simpan</button>
            <button onclick="window.location.href='kembali.php'">Kembali</button>
        </div>
        <!-- Form -->
        <div class="form-container">
            <h2>Tambah Data Pensiun</h2>
            <form action="" method="POST">
                <label for="nip">NIP:</label>
                <input type="text" id="nip" name="nip" required>

                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>

                <label for="jabatan_terakhir">Jabatan Terakhir:</label>
                <input type="text" id="jabatan_terakhir" name="jabatan_terakhir">

                <label for="unit_kerja_terakhir">Unit Kerja Terakhir:</label>
                <input type="text" id="unit_kerja_terakhir" name="unit_kerja_terakhir">

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">

                <label for="tanggal_mulai_pensiun">Tanggal Mulai Pensiun:</label>
                <input type="date" id="tanggal_mulai_pensiun" name="tanggal_mulai_pensiun">

                <label for="bulan">Bulan:</label>
                <input type="number" id="bulan" name="bulan">

                <label for="tahun">Tahun:</label>
                <input type="number" id="tahun" name="tahun">

                <label for="masa_kerja">Masa Kerja:</label>
                <input type="text" id="masa_kerja" name="masa_kerja">

                <label for="golongan_terakhir">Golongan Terakhir:</label>
                <input type="text" id="golongan_terakhir" name="golongan_terakhir">

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat"></textarea>

                <label for="nomor_hp">Nomor HP:</label>
                <input type="text" id="nomor_hp" name="nomor_hp">

                <label for="status_pensiun">Status Pensiun:</label>
                <select id="status_pensiun" name="status_pensiun">
                    <option value="Aktif">Aktif</option>
                    <option value="Pensiun Dini">Pensiun Dini</option>
                </select>
            </form>
        </div>
    </div>
</body>
</html>
