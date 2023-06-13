<?php

session_start();
// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
    header("location: login.php"); // Jika belum login, redirect ke halaman login
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<header>
		<h1>Penjualan Buku</h1>
		<nav>
			<ul>
			<li><a href="login.php">Login</a></li>
				<li><a href="beranda.php">Beranda</a></li>
				<li><a href="buku.php">Buku</a></li>
				<li><a href="tk.php">Tentang Kami</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section>
			<h2>Daftar Buku</h2>
			<ul id="book-list">
				<li>
					<img src="img/Buku1.jpg">
					<h3>Rentang Kisah</h3>
					<p>Rentang Kisah adalah buku kumpulan cerita pendek karya Gita Savitri Devi yang berisi sepuluh cerita pendek dengan keberagaman tema dan karakter yang menarik. Setiap cerita memiliki gaya penulisan yang unik dan puitis, membuat buku ini layak dijadikan referensi bagi para pecinta sastra dan pembaca yang ingin memperluas wawasan tentang kehidupan dan manusia.</p>
					<p class="price">Rp100.000</p>
					<button class="buy-button">Beli</button>
				</li>
				<li>
					<img src="img/Buku2.jpg">
					<h3>Tentang Waktu</h3>
					<p>Tentang Waktu adalah kumpulan cerita pendek karya Tyas Effendi yang terdiri dari sebelas cerita dengan tema yang berbeda-beda tentang waktu. Setiap cerita hadir dengan nuansa yang berbeda-beda, dan berhasil memberikan pengalaman membaca yang mendalam tentang makna dan nilai waktu dalam kehidupan sehari-hari. Buku ini cocok untuk para pembaca yang menyukai cerita pendek inspiratif dan reflektif.</p>
					<p class="price">Rp150.000</p>
					<button class="buy-button">Beli</button>
				</li>
			</ul>
		</section>
	</main>

	<footer>
		<p>&copy; 2023 Penjualan Buku</p>
	</footer>
</body>
</html>