<?php
// ===========================================
// SIMULASI DATA PRODUK (Gunakan data dari file produk Anda)
// ===========================================
$products = [
    ['category' => 'Ikan Segar', 'name' => 'Ikan Tuna Sirip Biru', 'price' => 'Rp 85.000 / kg', 'image_url' => 'assets/tuna.jpg'],
    ['category' => 'Kerajinan', 'name' => 'Miniatur Kapal Pinisi', 'price' => 'Rp 250.000', 'image_url' => 'assets/miniatur_kapal.jpg'],
    ['category' => 'Makanan Olahan', 'name' => 'Kerupuk Ikan Tenggiri', 'price' => 'Rp 25.000', 'image_url' => 'assets/kerupuk.jpg'],
    ['category' => 'Ikan Segar', 'name' => 'Udang Lobster Air Dingin', 'price' => 'Rp 150.000 / kg', 'image_url' => 'assets/lobster.jpg'],
    ['category' => 'Bumbu/Bahan', 'name' => 'Garam Laut Premium 1kg', 'price' => 'Rp 12.000', 'image_url' => 'assets/garam.jpg'],
    ['category' => 'Makanan Olahan', 'name' => 'Abon Ikan Cakalang Pedas', 'price' => 'Rp 45.000', 'image_url' => 'assets/abon.jpg'],
    ['category' => 'Kerajinan', 'name' => 'Lampu Hias Cangkang Kerang', 'price' => 'Rp 180.000', 'image_url' => 'assets/lampu_kerang.jpg'],
    ['category' => 'Ikan Segar', 'name' => 'Kepiting Jumbo Papua', 'price' => 'Rp 95.000 / kg', 'image_url' => 'assets/kepiting_jumbo.jpg'],
    // Ulangi beberapa kali agar halaman penuh
    ['category' => 'Makanan Olahan', 'name' => 'Sambal Cumi Petai', 'price' => 'Rp 35.000', 'image_url' => 'assets/sambal.jpg'],
    ['category' => 'Ikan Segar', 'name' => 'Ikan Salmon Norway', 'price' => 'Rp 120.000 / kg', 'image_url' => 'assets/salmon.jpg'],
];

// Gabungkan dan ulangi data agar terlihat banyak
$full_product_list = array_merge($products, $products, $products); 

// Daftar kategori unik untuk filter
$categories = array_unique(array_column($products, 'category'));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Maritimku UKM Bahari</title>
    <link rel="stylesheet" href="style/beranda.css"> 
    <link rel="stylesheet" href="style/produk.css"> </head>
<body>

  <header class="main-header">
        <div class="logo">
            <img src="Logo.png" alt="Logo Maritimku">
            Maritimku
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="#" class="active">Produk</a></li>
                <li><a href="pasar_digital.php">Pasar Digital</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>
        <div class="cart-icon">&#128722;</div> </header>

    <main class="product-page">
        <div class="container">
            <h1>Katalog Produk UKM Bahari</h1>

            <div class="main-content">
                <aside class="sidebar-filter">
                    <h3>Filter Produk</h3>
                    
                    <div class="filter-group">
                        <h4>Kategori</h4>
                        <?php foreach($categories as $cat): ?>
                            <label class="checkbox-container">
                                <?= htmlspecialchars($cat); ?>
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="filter-group">
                        <h4>Harga</h4>
                        <input type="range" min="10000" max="500000" value="500000" class="slider" id="priceRange">
                        <p>Maksimum: <span id="priceValue">Rp 500.000</span></p>
                    </div>
                    
                    <button class="btn-filter">Terapkan Filter</button>
                </aside>

                <section class="product-grid-container">
                    
                    <div class="sort-area">
                        <p>Menampilkan 1 - <?= count($full_product_list); ?> dari <?= count($full_product_list); ?> Produk</p>
                        <select name="sort" id="sort">
                            <option value="terbaru">Terbaru</option>
                            <option value="termurah">Harga Termurah</option>
                            <option value="termahal">Harga Termahal</option>
                        </select>
                    </div>

                    <div class="product-grid">
                        <?php foreach($full_product_list as $product): ?>
                            <div class="product-item">
                                <div class="product-thumb" style="background-image: url('<?= htmlspecialchars($product['image_url']); ?>');">
                                    <span class="category-tag"><?= htmlspecialchars($product['category']); ?></span>
                                </div>
                                <div class="product-info">
                                    <h4 class="product-title"><?= htmlspecialchars($product['name']); ?></h4>
                                    <p class="product-price"><?= htmlspecialchars($product['price']); ?></p>
                                    <button class="add-to-cart">Tambah Keranjang</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <footer class="main-footer" style="margin-top: 50px; transform: none;">
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
        const priceRange = document.getElementById('priceRange');
        const priceValue = document.getElementById('priceValue');
        priceRange.oninput = function() {
            priceValue.innerHTML = 'Rp ' + new Intl.NumberFormat('id-ID').format(this.value);
        }
    </script>

</body>
</html>