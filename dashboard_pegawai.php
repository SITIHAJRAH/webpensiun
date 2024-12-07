<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'pegawai') {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pegawai</title>
    <style>
        /* Reset margin dan padding */
        body, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
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
            height: 100vh; /* Menyesuaikan dengan tinggi viewport */
            padding-top: 20px;
            position: fixed; /* Sidebar tetap saat halaman digulir */
            text-align: center;
            color: white;
        }

        /* Styling logo dinas dan profil */
        .logo {
            margin-bottom: 10px;
            text-align: center;
        }

        .logo img {
            width: 80px;
            height: 80px;
            border-radius: 50%; /* Membuat logo berbentuk lingkaran */
            border: 3px solid white; /* Tambahkan border putih */
        }

        .logo p {
            margin-top: 5px;
            font-size: 14px;
            font-weight: bold;
            color: white;
        }

        .divider {
            width: 80%;
            height: 2px;
            background-color: white;
            margin: 10px auto;
        }

        .profile {
            margin-bottom: 20px;
        }

        .profile img {
    width: 50px; /* Mengubah ukuran lebar gambar menjadi 80px */
    height: 50px; /* Mengubah ukuran tinggi gambar menjadi 80px */
    border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
    border: 3px solid white; /* Menambahkan border putih */
}


        .profile p {
            margin-top: 10px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 15px 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            display: block;
            padding: 10px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #003d80;
            border-radius: 5px;
        }

        /* Konten utama */
        .content {
            margin-left: 220px; /* Memberikan ruang untuk sidebar */
            padding: 20px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
<nav>
    <div class="logo">
        <img src="logo.jpg" alt="Logo Dinas">
        <p>Dinas ESDM Prov. NTT</p>
    </div>
    <div class="divider"></div>
    <div class="profile">
        <img src="profil.jpg" alt="Profil Pegawai">
        <p>Pegawai</p>
    </div>
    <ul>
        <li><a href="lihat_laporan.php">Laporan Pensiun</a></li>
        <li><a href="lihat_data_pribadi.php">Data Pribadi</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

    <div class="content">
        <h1>Selamat Datang, Pegawai</h1>
        <p>Silakan pilih menu di sebelah kiri untuk melihat data pensiun, laporan, atau data pribadi Anda.</p>
    </div>
</body>
</html>
