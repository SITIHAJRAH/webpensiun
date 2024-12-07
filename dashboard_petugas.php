<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'petugas') {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda Petugas</title>
    <!-- Menambahkan link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset margin dan padding */
        body, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #89cff0;
            color: #333;
            display: flex;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #444;
        }

        /* Styling sidebar navigasi */
        nav {
            background-color: #0056b3;
            width: 200px;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            text-align: center;
            color: white;
        }

        .header-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .menu-links a {
            display: block;
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 8px 12px;
            margin: 8px 0;
        }

        .menu-links a:hover {
            background-color: #003d80;
            border-radius: 5px;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .shortcuts {
            margin-top: 30px;
            text-align: left;
        }

        .shortcut-btn {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .shortcut-btn:hover {
            background-color: #003d80;
        }

        .shortcut-btn i {
        font-size: 24px; /* Ukuran ikon */
        color: white; /* Warna ikon */
        }

        .shortcut-btn:hover i {
        color: #ffc107; /* Warna ikon saat hover */
        }

        .divider {
        width: 80%; /* Panjang garis sesuai kebutuhan */
        height: 2px; /* Ketebalan garis */
        background-color: white; /* Warna garis */
        margin: 10px auto; /* Ruang di sekitar garis */
        border-radius: 5px; /* Membuat ujung garis melengkung */
        }


    </style>
</head>
<body>
    <nav>
    <div class="header-section">
    <div class="logo">
        <img src="logo.jpg" alt="Logo Dinas">
        <p>Dinas ESDM Prov.NTT</p>
    </div>
    <!-- Garis Pembatas -->
    <div class="divider"></div>
    <div class="profile">
        <img src="profil.jpg" alt="Profil Petugas">
        <p>Petugas</p>
    </div>
</div>

        <div class="menu-links">
            <a href="tambah_data.php">Tambah Data Pensiun</a>
            <a href="data_pensiun.php">Data Pensiun</a>
            <a href="tambah_data_pribadi.php">Tambah Data Pribadi Pegawai</a>
            <a href="data_pribadi_pegawai_pns.php">Data Pribadi Pegawai</a>
            <a href="laporan.php">Laporan</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="content">
        <h1>Selamat Datang, Petugas</h1>
        <p>Berikut adalah informasi dan panduan penggunaan aplikasi ini:</p>

        <!-- Panduan Penggunaan -->
        <div class="guide">
            <h2>Panduan Penggunaan</h2>
            <ol>
                <li>Pilih menu di sebelah kiri sesuai kebutuhan Anda.</li>
                <li>Gunakan "Tambah Data Pensiun" untuk menambahkan data pensiun baru.</li>
                <li>Gunakan "Data Pensiun" untuk melihat atau mengelola data pensiun.</li>
                <li>Gunakan "Tambah Data Pribadi Pegawai" untuk menambahkan informasi pegawai baru.</li>
                <li>Gunakan "Laporan" untuk melihat laporan terkait data pensiun.</li>
            </ol>
        </div>

       <!-- Tombol Shortcut -->
<div class="shortcuts">
    <h2>Akses Cepat</h2>
    <a href="tambah_data.php" class="shortcut-btn" title="Tambah Data Pensiun">
        <i class="fas fa-plus-circle"></i> <!-- Ikon Tambah -->
    </a>
    <a href="data_pensiun.php" class="shortcut-btn" title="Lihat Data Pensiun">
        <i class="fas fa-database"></i> <!-- Ikon Database -->
    </a>
    <a href="tambah_data_pribadi.php" class="shortcut-btn" title="Tambah Data Pegawai">
        <i class="fas fa-user-plus"></i> <!-- Ikon Tambah Pengguna -->
    </a>
    <a href="data_pribadi_pegawai_pns.php" class="shortcut-btn" title="Data Pegawai">
        <i class="fas fa-users"></i> <!-- Ikon Pengguna -->
    </a>
</div>

        </div>
    </div>
</body>
</html>
