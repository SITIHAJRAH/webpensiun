<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pensiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #89cff0;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            margin: 15px 0;
            color: #0056b3;
            font-size: 18px; /* Ukuran font judul diperkecil */
        }

        form {
            max-width: 450px; /* Lebar form diperkecil */
            margin: 20px auto;
            padding: 10px; /* Padding form diperkecil */
            background-color: #add8e6;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 8px; /* Jarak antar field diperkecil */
        }

        .form-group label {
            flex: 0 0 130px; /* Lebar label diperkecil */
            font-weight: bold;
            margin-right: 5px;
            font-size: 12px; /* Ukuran font label diperkecil */
        }

        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="number"],
        .form-group textarea,
        .form-group select {
            flex: 1;
            padding: 6px; /* Padding input diperkecil */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 12px; /* Ukuran font input diperkecil */
        }

        textarea {
            resize: vertical;
            min-height: 50px; /* Tinggi textarea diperkecil */
        }

        .button-container {
    display: flex;
    justify-content: flex-start; /* Tombol bersebelahan di sisi kiri */
    margin-top: 10px;
    gap: 5px; /* Jarak antar tombol diatur */
}


        button {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 6px 12px; /* Padding tombol diperkecil */
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px; /* Ukuran font tombol diperkecil */
        }

        button:hover {
            background-color: #003d80;
        }

        button:active {
            transform: scale(0.98);
        }

        .back-button {
            background-color: blue; /* Warna tombol kembali */
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .back-button:hover {
            background-color: blue; /* Hover warna tombol kembali */
        }

        .back-button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <h1>Tambah Data Pensiun</h1>
    <form method="POST" action="proses_tambah_data.php">
        <div class="form-group">
            <label>NIP:</label>
            <input type="text" name="nip" required>
        </div>

        <div class="form-group">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" required>
        </div>

        <div class="form-group">
            <label>Jabatan Terakhir:</label>
            <input type="text" name="jabatan_terakhir" required>
        </div>

        <div class="form-group">
            <label>Unit Kerja Terakhir:</label>
            <input type="text" name="unit_kerja_terakhir" required>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label>Tanggal Mulai Pensiun:</label>
            <input type="date" name="tanggal_mulai_pensiun" required>
        </div>

        <div class="form-group">
            <label>Bulan:</label>
            <input type="number" name="bulan" min="1" max="12" placeholder="1-12" required>
        </div>

        <div class="form-group">
            <label>Tahun:</label>
            <input type="number" name="tahun" min="1900" max="2100" placeholder="YYYY" required>
        </div>

        <div class="form-group">
            <label>Masa Kerja:</label>
            <input type="text" name="masa_kerja" required>
        </div>

        <div class="form-group">
            <label>Golongan/Pangkat Terakhir:</label>
            <input type="text" name="golongan_terakhir" required>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
        </div>

        <div class="form-group">
            <label>Nomor HP/Telepon:</label>
            <input type="text" name="nomor_hp" required>
        </div>

        <div class="form-group">
            <label>Status Pensiun:</label>
            <select name="status_pensiun" required>
                <option value="Aktif">Aktif</option>
                <option value="Non-Aktif">Non-Aktif</option>
            </select>
        </div>

        <div class="button-container">
            <button type="submit">Simpan</button>
            <a href="dashboard_petugas.php">
                <button type="button" class="back-button">Kembali</button>
            </a>
        </div>
    </form>
</body>
</html>
