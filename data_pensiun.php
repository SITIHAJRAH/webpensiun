<?php
include 'config.php';

$query = "SELECT * FROM data_pensiun";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pensiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #89cff0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 10px 15px;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
        }

        a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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

        .actions {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
        }

        .actions a {
            background-color: #28a745;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
        }

        .actions a.delete {
            background-color: #dc3545;
        }

        .actions a:hover {
            opacity: 0.8;
        }

        
    table {
        max-width: 90%; /* Mengurangi lebar tabel agar tidak penuh layar */
        margin: 0 auto; /* Memusatkan tabel */
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .footer-buttons {
    display: flex;
    justify-content: flex-start; /* Memindahkan tombol ke samping kiri */
    gap: 20px;
    margin: 20px 0;
    padding-left: 5%; /* Menambah jarak ke kiri */
}

    

    .footer-buttons a {
        background-color: #007BFF;
        padding: 10px 20px;
        color: white;
        border-radius: 5px;
        text-decoration: none;
    }

    .footer-buttons a:hover {
        background-color: #0056b3;
    }

    </style>
</head>
<body>
    <h1>Data Pensiun PNS</h1>
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
                <th>Aksi</th>
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
                        <td class='actions'>
                            <a href='edit_data.php?id=" . $row['id'] . "'>Edit</a>
                            <a href='hapus_data.php?id=" . $row['id'] . "' class='delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='15'>Tidak ada data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="footer-buttons">
    <a href="tambah_data.php">Tambah Data</a>
    <a href="laporan.php">Simpan ke Laporan</a>
    <a href="dashboard_petugas.php">Kembali</a>
</div>
</body>
</html>
