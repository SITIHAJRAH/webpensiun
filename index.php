<?php
session_start();
include 'config.php'; // Koneksi ke database

// Data default untuk petugas dan pegawai
$default_data = [
    ['nip' => '197511262007011010', 'password' => 'petugas123', 'role' => 'petugas'],
    ['nip' => '196601091987022005', 'password' => 'pegawai123', 'role' => 'pegawai'],
];

// Menambahkan data default ke database jika belum ada
foreach ($default_data as $data) {
    $nip = $data['nip'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $role = $data['role'];

    $check_query = "SELECT * FROM users WHERE nip = '$nip'";
    $result = mysqli_query($conn, $check_query);

    if ($result && mysqli_num_rows($result) == 0) {
        $insert_query = "INSERT INTO users (nip, password, role) VALUES ('$nip', '$password', '$role')";
        mysqli_query($conn, $insert_query);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        // Proses Login
        $nip = trim($_POST['nip']);
        $password = trim($_POST['password']);
        $role = trim($_POST['role']);

        // Validasi panjang NIP dan password
        if (strlen($nip) != 18) {
            $error = "NIP harus terdiri dari 18 karakter.";
        } elseif (strlen($password) > 10) {
            $error = "Password tidak boleh lebih dari 10 karakter.";
        } elseif (!in_array($role, ['petugas', 'pegawai'])) {
            $error = "Role tidak valid.";
        } else {
            // Periksa login
            $login_query = "SELECT * FROM users WHERE nip = '$nip'";
            $result = mysqli_query($conn, $login_query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);

                // Verifikasi password
                if (password_verify($password, $user['password'])) {
                    $_SESSION['nip'] = $user['nip'];
                    $_SESSION['role'] = $user['role'];

                    // Redirect berdasarkan role
                    if ($user['role'] == 'petugas') {
                        header("Location: dashboard_petugas.php");
                    } elseif ($user['role'] == 'pegawai') {
                        header("Location: dashboard_pegawai.php");
                    }
                    exit;
                } else {
                    $error = "Password salah.";
                }
            } else {
                $error = "NIP tidak ditemukan.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Pensiun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #89cff0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Transparansi pada latar belakang container */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .container img {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            
        }
        label {
            margin-bottom: 5px;
            color: #333;
        }
        input, select, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #007BFF;
            color: white;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo.jpg" alt="Logo Dinas">
        <h2>Login Sistem Pensiun</h2>
        <form method="POST">
            <label for="nip">NIP</label>
            <input type="text" name="nip" maxlength="18" required>
            <label for="password">Password</label>
            <input type="password" name="password" maxlength="10" required>
            <label for="role">Role</label>
            <select name="role" required>
                <option value="petugas">Petugas</option>
                <option value="pegawai">Pegawai</option>
            </select>
            <button type="submit" name="login">Login</button>
        </form>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    </div>
</body>
</html>
