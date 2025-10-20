<?php
include 'db_config.php'; // Hubungkan ke database
session_start(); // Mulai sesi untuk menyimpan status login

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST['nama']); // Menggunakan 'Nama' sebagai username/identifier, sesuai desain
    $password = $_POST['kata_sandi'];

    // Siapkan query untuk mencari pengguna berdasarkan nama
    $stmt = $conn->prepare("SELECT id, nama, password FROM users WHERE nama = ? OR email = ?");
    // Kami mencari berdasarkan Nama atau Email, karena desain hanya menyebut "Nama"
    $stmt->bind_param("ss", $nama, $nama); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password yang di-hash
        if (password_verify($password, $user['password'])) {
            // Login berhasil
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nama'];
            
            $message = "Selamat datang, " . $user['nama'] . "! Mengarahkan ke Beranda...";
            header("Location: beranda.php");
            exit();
        } else {
            $message = "Kata sandi salah.";
        }
    } else {
        $message = "Nama pengguna atau email tidak ditemukan.";
    }

    $stmt->close();
    $conn->close();
}
// Pesan sukses dari halaman register
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $message = "Akun berhasil dibuat! Silakan masuk.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Maritimku</title>
    <link rel="stylesheet" href="style/auth.css">
</head>
<body class="auth-body">
    <div class="auth-box">
        <div class="logo-auth">
            <img src="assets/logo_maritimku.png" alt="Logo Maritimku">
        </div>
        <h1 class="title">masuk</h1>
        <p class="subtitle">masuk untuk melanjutkan</p>

        <?php if ($message): ?>
            <p class="status-message"><?= $message; ?></p>
        <?php endif; ?>
        
        <form method="POST" action="masuk.php">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kata_sandi">Kata Sandi</label>
            <div class="password-container">
                <input type="password" id="kata_sandi" name="kata_sandi" required>
                <span class="toggle-password" onclick="togglePasswordVisibility('kata_sandi')">&#128065;</span>
            </div>

            <button type="submit" class="btn-auth">masuk</button>
        </form>

        <p class="link-footer">
            <a href="login.php">buat akun</a>
            <span class="separator">|</span>
            <a href="#">lupa sandi?</a>
        </p>
    </div>
    <script src="auth.js"></script>
</body>
</html>