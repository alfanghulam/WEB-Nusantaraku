<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - Maritimku UKM Bahari</title>
    <link rel="stylesheet" href="style/beranda.css"> 
    <link rel="stylesheet" href="style/profil.css"> </head>
<body>

<header class="main-header">
        <div class="logo">
            <img src="Logo.png" alt="Logo Maritimku">
            Maritimku
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pasar_digital.php">Pasar Digital</a></li>
                <li><a href="#" class="active">Profil</a></li>
            </ul>
        </nav>
        <div class="cart-icon">&#128722;</div> </header>

    <main class="profile-page">
        <div class="profile-container">
            <h1>Profil Saya</h1>

            <div class="profile-content">
                <aside class="profile-sidebar">
                    <ul>
                        <li class="active"><a href="#detail-akun">&#128100; Detail Akun</a></li>
                        <li><a href="#alamat">&#127968; Alamat Pengiriman</a></li>
                        <li><a href="#riwayat">&#128203; Riwayat Pesanan</a></li>
                        <li><a href="#keamanan">&#128274; Ganti Password</a></li>
                        <li><a href="#">&#10162; Keluar</a></li>
                    </ul>
                </aside>

                <section class="profile-details-area">
                    
                    <div id="detail-akun" class="detail-block active">
                        <h2>Detail Akun</h2>
                        <form class="profile-form">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" value="Ahmad Bahari" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="ahmad.bahari@mail.com" disabled>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Nomor Telepon</label>
                                <input type="tel" id="telepon" name="telepon" value="081234567890">
                            </div>
                            <button type="submit" class="btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>

                    <div id="alamat" class="detail-block">
                        <h2>Alamat Pengiriman</h2>
                        <div class="address-card">
                            <h4>Alamat Utama (Rumah)</h4>
                            <p>Jalan Pelabuhan Lama No. 15, RT 01/ RW 05</p>
                            <p>Kel. Muara, Kec. Utara, Kota Jakarta, 14200</p>
                            <p>Telp: 081234567890</p>
                            <button class="btn-secondary">Ubah Alamat</button>
                            <button class="btn-secondary">Tambah Alamat Baru</button>
                        </div>
                    </div>

                    <div id="riwayat" class="detail-block">
                        <h2>Riwayat Pesanan</h2>
                        <p>Lihat status dan riwayat lengkap pesanan Anda di halaman <a href="pasar_digital.php" style="color:#007bff; font-weight:bold;">Pasar Digital</a>.</p>
                    </div>

                    <div id="keamanan" class="detail-block">
                        <h2>Ganti Password</h2>
                        <form class="profile-form">
                            <div class="form-group">
                                <label for="old_pass">Password Lama</label>
                                <input type="password" id="old_pass" name="old_pass" required>
                            </div>
                            <div class="form-group">
                                <label for="new_pass">Password Baru</label>
                                <input type="password" id="new_pass" name="new_pass" required>
                            </div>
                            <button type="submit" class="btn-primary">Ubah Password</button>
                        </form>
                    </div>

                </section>
            </div>
        </div>
    </main>

    <footer class="main-footer" style="margin-top: 50px; transform: none; padding-top: 70px;">
        <div class="footer-columns">
            <div class="footer-col">
                <h4>UMKM Bahari</h4>
                <p>Platform digitalisasi produk lokal dan e-marketing untuk usaha kecil dan menengah sektor bahari</p>
            </div>
            <div class="footer-col">
                <h4>UMKM Bahari</h4>
                <ul>
                    <li><a href="#">Tentang kami</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                    <li><a href="#">Bantuan</a></li>
                </ul>
            </div>
            <div class="footer-col contact">
                <h4>Hubungi kami</h4>
                <p>&#9993; info@ukmbahari.id</p>
                <p>&#128222; (021)12345</p>
            </div>
        </div>
        <div class="copyright">
            2025 umkm bahari. All rights Reserved
        </div>
    </footer>
</body>
</html>