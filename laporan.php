<?php
include 'config.php';

// Menyimpan data ke tabel laporan jika tombol diklik
if (isset($_POST['simpan_laporan'])) {
    $query = "SELECT * FROM data_pensiun";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nip = $row['nip'];
            $nama_lengkap = $row['nama_lengkap'];
            $jabatan_terakhir = $row['jabatan_terakhir'];
            $unit_kerja_terakhir = $row['unit_kerja_terakhir'];
            $tanggal_lahir = $row['tanggal_lahir'];
            $tanggal_mulai_pensiun = $row['tanggal_mulai_pensiun'];
            $bulan = $row['bulan'];
            $tahun = $row['tahun'];
            $masa_kerja = $row['masa_kerja'];
            $golongan_terakhir = $row['golongan_terakhir'];
            $alamat = $row['alamat'];
            $nomor_hp = $row['nomor_hp'];
            $status_pensiun = $row['status_pensiun'];

            // Insert data ke tabel laporan_pensiun
            $insert_query = "INSERT INTO laporan_pensiun (nip, nama_lengkap, jabatan_terakhir, unit_kerja_terakhir, tanggal_lahir, tanggal_mulai_pensiun, bulan, tahun, masa_kerja, golongan_terakhir, alamat, nomor_hp, status_pensiun)
                             VALUES ('$nip', '$nama_lengkap', '$jabatan_terakhir', '$unit_kerja_terakhir', '$tanggal_lahir', '$tanggal_mulai_pensiun', '$bulan', '$tahun', '$masa_kerja', '$golongan_terakhir', '$alamat', '$nomor_hp', '$status_pensiun')";
            mysqli_query($conn, $insert_query);
        }
        echo "<script>alert('Laporan berhasil disimpan ke database!');</script>";
    } else {
        echo "<script>alert('Tidak ada data yang dapat disimpan!');</script>";
    }
}

// Query untuk mengambil data
$query = "SELECT * FROM data_pensiun";
$result = mysqli_query($conn, $query);

// Menyimpan data ke dalam laporan
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Pensiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: blue;
        }

        .btn-container {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn-container a {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .btn-container a:hover {
            background-color: #0056b3;
        }

        .no-data {
            text-align: center;
            font-weight: bold;
            color: #555;
        }

        .btn-wrapper {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Laporan Data Pensiun PNS</h1>
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
                echo "<tr><td colspan='14' class='no-data'>Tidak ada data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="btn-wrapper">
        <form method="post" class="btn-container">
            <button type="submit" name="simpan_laporan">Simpan Laporan</button>
            <a href="dashboard_petugas.php">Kembali</a>
        </form>
    </div>
</body>
</html>
