<?php
// Koneksi ke database
include 'config.php';

// Query untuk mengambil data
$query = "SELECT * FROM data_pribadi";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pribadi Pegawai PNS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #89cff0;
            margin: 0;
            padding: 20px;
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
        .buttons {
            text-align: left;
            display: flex;
            gap: 10px;
        }
        .buttons a, .buttons button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
        }
        .buttons a:hover, .buttons button:hover {
            background-color: #45a049;
        }
        .buttons button {
            border: none;
        }

        td {
    white-space: nowrap; /* Hindari tombol melipat ke baris berikutnya */
}

td a.edit {
    background-color: #4CAF50; /* Warna hijau untuk Edit */
    color: white; /* Warna teks putih */
    padding: 8px 15px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

td a.delete {
    background-color: #f44336; /* Warna merah untuk Hapus */
    color: white; /* Warna teks putih */
    padding: 8px 15px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

td a.edit:hover {
    background-color: #45a049; /* Warna hover untuk Edit */
    transform: scale(1.05); /* Efek zoom saat hover */
}

td a.delete:hover {
    background-color: #d32f2f; /* Warna hover untuk Hapus */
    transform: scale(1.05); /* Efek zoom saat hover */
}



    </style>
</head>
<body> 
    <h1>Data Pribadi Pegawai PNS</h1>
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Nomor SK</th>
                <th>Tanggal Pengangkatan</th>
                <th>Golongan</th>
                <th>Jabatan</th>
                <th>Unit Kerja</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Pendidikan Terakhir</th>
                <th>Status Pernikahan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['nip']; ?></td>
                <td><?php echo $row['nama_lengkap']; ?></td>
                <td><?php echo $row['tempat_lahir']; ?></td>
                <td><?php echo $row['tanggal_lahir']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
                <td><?php echo $row['agama']; ?></td>
                <td><?php echo $row['no_sk']; ?></td>
                <td><?php echo $row['tanggal_pengangkatan']; ?></td>
                <td><?php echo $row['golongan']; ?></td>
                <td><?php echo $row['jabatan']; ?></td>
                <td><?php echo $row['unit_kerja']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['nomor_hp']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['pendidikan_terakhir']; ?></td>
                <td><?php echo $row['status_pernikahan']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="buttons">
        <a href="dashboard_pegawai.php">Kembali</a>
    </div>
</body>
</html>



