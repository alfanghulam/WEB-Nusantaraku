<?php
// Konfigurasi Database MySQL
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');   // Ganti dengan username DB Anda
define('DB_PASSWORD', 'password'); // Ganti dengan password DB Anda
define('DB_NAME', 'maritimku_db'); 

// Membuat koneksi
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>