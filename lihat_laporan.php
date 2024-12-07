<?php
session_start();
include 'config.php';

// Pastikan pengguna telah login
if (!isset($_SESSION['nip'])) {
    header("Location: index.php");
    exit();
}

// Query untuk mengambil data laporan pensiun
$query = "SELECT * FROM data_pensiun ORDER BY nama_lengkap ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lihat Laporan Pensiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #444;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0056b3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .buttons {
            margin-top: 20px;
            text-align: center;
        }

        .buttons a {
            padding: 10px 20px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons a:hover {
            background-color: #003f7f;
        }
    </style>
</head>
<body>
    <h1>Lihat Laporan Pensiun</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>Jabatan Terakhir</th>
                <th>Unit Kerja Terakhir</th>
                <th>Tanggal Lahir</th>
                <th>Tanggal Mulai Pensiun</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Masa Kerja</th>
                <th>Golongan/Pangkat Terakhir</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Status Pensiun</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>" . $no++ . "</td>
                        <td>" . $row['nip'] . "</td>
                        <td>" . $row['nama_lengkap'] . "</td>
                        <td>" . $row['jabatan_terakhir'] . "</td>
                        <td>" . $row['unit_kerja_terakhir'] . "</td>
                        <td>" . $row['tanggal_lahir'] . "</td>
                        <td>" . $row['tanggal_mulai_pensiun'] . "</td>
                        <td>" . $row['bulan'] . "</td>
                        <td>" . $row['tahun'] . "</td>
                        <td>" . $row['masa_kerja'] . "</td>
                        <td>" . $row['golongan_terakhir'] . "</td>
                        <td>" . $row['alamat'] . "</td>
                        <td>" . $row['nomor_hp'] . "</td>
                        <td>" . $row['status_pensiun'] . "</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='14'>Tidak ada data laporan pensiun.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="buttons">
        <a href="dashboard_pegawai.php">Kembali ke Beranda</a>
    </div>
</body>
</html>
