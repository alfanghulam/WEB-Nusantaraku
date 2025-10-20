<?php
// ===========================================
// SIMULASI DATA PRODUK (Ganti dengan Koneksi Database Nyata)
// ===========================================
$products = [
    [
        'category' => 'Produk Unggulan',
        'name' => 'minyak ikan',
        'image_url' => 'assets/minyak_ikan.jpg' // Ganti dengan path gambar Anda
    ],
    [
        'category' => 'Produk Terbaru',
        'name' => 'Kepiting Besar Alaska',
        'image_url' => 'assets/kepiting.jpg'
    ],
    [
        'category' => 'Promo Spesial',
        'name' => 'ikan segar banget',
        'image_url' => 'assets/ikan_segar.jpg'
    ],
    [
        'category' => 'Produk Unggulan',
        'name' => 'Cumi Kering Premium',
        'image_url' => 'assets/cumi.jpg'
    ],
    [
        'category' => 'Produk Terbaru',
        'name' => 'Kerajinan Kulit Kerang',
        'image_url' => 'assets/kerang.jpg'
    ],
    [
        'category' => 'Promo Spesial',
        'name' => 'Garam Laut Organik',
        'image_url' => 'assets/garam.jpg'
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maritimku - Beranda UKM Bahari</title>
    <link rel="stylesheet" href="style/beranda.css"> 
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="Logo.png" alt="Logo Maritimku">
            Maritimku
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pasar_digital.php">Pasar Digital</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>
        <div class="cart-icon">&#128722;</div> </header>

    <main class="homepage">
        
        <section class="hero-banner">
            <div class="overlay">
                <h1>Selamat Datang UKM Bahari</h1>
                <p>Platform Digitalisasi Produk lokal dan e-marketing untuk usaha kecil dan menengah sektor bahari. Produk segar dan kerajinan otentik langsung dari UKM dan nelayan lokal.</p>
                <div class="search-box">
                    <input type="text" placeholder="Cari Makanan Atau Oleh-oleh Khas......">
                    <button>&#128269;</button> </div>
            </div>
        </section>

        <?php for ($i = 1; $i <= 3; $i++): ?>
        <section class="product-showcase">
            <button class="scroll-btn left" onclick="scrollProducts(this, -1)">&#8592;</button> <div class="product-list">
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('<?= htmlspecialchars($product['image_url']); ?>');"></div>
                        <p class="product-category"><?= htmlspecialchars($product['category']); ?></p>
                        <p class="product-name"><?= htmlspecialchars($product['name']); ?></p>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image" style="background-image: url('<?= htmlspecialchars($product['image_url']); ?>');"></div>
                        <p class="product-category"><?= htmlspecialchars($product['category']); ?></p>
                        <p class="product-name"><?= htmlspecialchars($product['name']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="scroll-btn right" onclick="scrollProducts(this, 1)">&#8594;</button> </section>
        <?php endfor; ?>

    </main>

    <footer class="main-footer">
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
    
    <script>
        function scrollProducts(button, direction) {
            // Temukan elemen .product-showcase terdekat (induk)
            const showcase = button.closest('.product-showcase');
            // Temukan elemen .product-list di dalamnya
            const list = showcase.querySelector('.product-list');
            // Tentukan jumlah scroll (sekitar lebar 1.5 kartu)
            const scrollAmount = 450 * direction; 
            
            // Lakukan scroll dengan animasi smooth
            list.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    </script>

</body>
</html>