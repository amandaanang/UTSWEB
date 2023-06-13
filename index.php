<?php

session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
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
		<h1>Selamat Datang di Toko Buku Online</h1>
		<nav>
			<ul>
				<li><a href="beranda.php">Beranda</a></li>
				<li><a href="buku.php">Buku</a></li>
				<li><a href="tk.php">Tentang Kami</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>

	<main>
        <h2>Buku Terbaru</h2>
        <div class="book">
          <img src="img/Buku1.jpg" alt="Book 1">
          <h3>Rentang Kisah</h3>
          <p>Penulis: Gita Savitri Devi</p>
          <p>Harga: Rp100.000</p>
        </div>
      </main>

	<footer>
		<p>&copy; 2023 Penjualan Buku</p>
	</footer>
</body>
</html>