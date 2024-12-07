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

    h1 {
        text-align: center;
    }

    table {
        max-width: 40%; /* Membatasi lebar tabel lebih kecil */
        margin: 20px auto; /* Memusatkan tabel di halaman */
        border-collapse: collapse;
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
        display: flex;
        gap: 10px;
        margin-top: 20px;
        justify-content: flex-start; /* Posisi tombol ke paling kiri */
    }

    .buttons a {
        padding: 10px 15px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        display: inline-block;
    }

    .buttons a:hover {
        background-color: #45a049;
    }
    

    td a.edit {
        background-color: #4CAF50; /* Hijau untuk Edit */
        color: white;
        padding: 8px 15px;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
        display: flex;
    }

    td a.delete {
        background-color: #f44336; /* Merah untuk Hapus */
        color: white;
        padding: 8px 15px;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
        display: flex;
    }

    td a.edit:hover {
        background-color: #45a049;
        transform: scale(1.05); /* Efek zoom */
    }

    td a.delete:hover {
        background-color: #d32f2f;
        transform: scale(1.05); /* Efek zoom */
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
                <th>Aksi</th> <!-- Kolom Aksi -->
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
                <td>
                    <a href="edit_data_pribadi.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                    <a href="hapus_data_pribadi.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td> <!-- Tombol Edit dan Hapus -->
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="buttons">
        <a href="tambah_data_pribadi.php">Tambah Data Pribadi</a>
        <a href="dashboard_petugas.php">Kembali</a>
    </div>
</body>
</html> 