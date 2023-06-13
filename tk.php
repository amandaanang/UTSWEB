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
	<title>Tentang Kami</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Tentang Kami</h1>
		<nav>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="beranda.php">Beranda</a></li>
				<li><a href="buku.php">Buku</a></li>
				<li><a href="tk.php">Tentang Kami</a></li>
			</ul>
		</nav>
	</header>
	<br>
	<center>Toko buku kami adalah toko buku online terpercaya yang menyediakan berbagai macam jenis buku dengan kualitas terbaik.</center>
	<div class="about-us">
		<ul>
			<li>
				<img src="image/Risky.jpeg">
				<h3>Risky Permana Effendy</h3>
				<p>210211060144</p>
			</li>
			<li>
				<img src="image/Cinta.jpeg">
				<h3>Cinta Carmenita Trinity Geruh</h3>
				<p>210211060292</p>
			</li>
			<li>
				<img src="image/Amanda.jpeg">
				<h3>Amanda Tessa Anang</h3>
				<p>210211060302</p>
			</li>
            <li>
				<img src="image/Fheren.jpeg">
				<h3>Fheren Clara Sumolang</h3>
				<p>210211060236</p>
			</li>
		</ul>
	</div>
</body>
</html>