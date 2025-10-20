<?php
include 'db_config.php'; // Hubungkan ke database

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $password = $_POST['kata_sandi'];
    $telepon = trim($_POST['no_telepon']);

    // Validasi sederhana
    if (empty($nama) || empty($email) || empty($password) || empty($telepon)) {
        $message = "Semua field harus diisi!";
    } else {
        // Hash password sebelum disimpan (Wajib!)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Siapkan query untuk mencegah SQL Injection
        $stmt = $conn->prepare("INSERT INTO users (nama, email, password, no_telepon) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $email, $hashed_password, $telepon);

        if ($stmt->execute()) {
            $message = "Akun berhasil dibuat! Silakan masuk.";
            header("Location: masuk.php?success=1"); // Redirect ke halaman login
            exit();
        } else {
            // Error handling, misal email sudah terdaftar
            if ($conn->errno == 1062) {
                $message = "Email sudah terdaftar. Silakan coba email lain.";
            } else {
                $message = "Terjadi kesalahan: " . $stmt->error;
            }
        }
        $stmt->close();
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun - Maritimku</title>
    <link rel="stylesheet" href="style/auth.css">
</head>
<body class="auth-body">
    <div class="auth-box">
        <h1 class="title">buat akun</h1>
        <p class="subtitle">buat akun anda</p>
        
        <?php if ($message): ?>
            <p class="status-message"><?= $message; ?></p>
        <?php endif; ?>
        
        <form method="POST" action="buat_akun.php">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required value="<?= htmlspecialchars($_POST['nama'] ?? ''); ?>">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? ''); ?>">

            <label for="kata_sandi">Kata sandi</label>
            <div class="password-container">
                <input type="password" id="kata_sandi" name="kata_sandi" required>
                <span class="toggle-password" onclick="togglePasswordVisibility('kata_sandi')">&#128065;</span>
            </div>
            
            <label for="no_telepon">no. telepon</label>
            <input type="tel" id="no_telepon" name="no_telepon" required value="<?= htmlspecialchars($_POST['no_telepon'] ?? ''); ?>">

            <button type="submit" class="btn-auth">buat akun</button>
        </form>
        
        <p class="link-footer">
            sudah punya akun? <a href="login.php">masuk</a>
        </p>
    </div>
    <script src="auth.js"></script>
</body>
</html>