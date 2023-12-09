<?php
session_start();
if ($_SESSION['level'] != "user") {
	exit(); // Tambahkan baris ini untuk menghentikan eksekusi skrip setelah mengarahkan
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>user</title>
	<link rel="stylesheet" href="sidebar.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="menuuserphp">
	<div class="container">
		<nav class="sidebar">
			<header>
				<div class="image-text">
					<span class="image"><img src="logo.png" alt="logo">
					</span>
					<div class="text header-text">
						<span class="name">Amikom</span>
						<span class="profession">Informasi</span>
					</div>
				</div>
			</header>
			<div class="menu-bar">
				<div class="menu">
					<ul class="menu-links">
						<p>
							<span class="nama-user"> Welcome,
								<?php echo $_SESSION['username']; ?>
							</span>
						</p>
						<ul class="menu-links-semua">
							<li class="nav-link-dashboard">
								<a href="menuuser.php">
									<i class='bx bxs-dashboard'></i>
									<span class="text nav-text">Dasboard</span>
								</a>
							</li>
							<ul class="menu-links">
								<li class="nav-link-pembayaran">
									<a href="menupembayaran.php">
										<i class='bx bx-wallet-alt'></i>
										<span class="text nav-text">Pembayaran</span>
									</a>
								</li>
								<li class="nav-link-chatbot">
									<a href="menuchatbot.php">
										<i class='bx bx-bot'></i>
										<span class="text nav-text">Chatbot</span>
									</a>
								</li>
								<li class="nav-link-pengingat">
									<a href="menupengingat.php">
										<i class='bx bx-notification-off'></i>
										<span class="text nav-text">Pengingat</span>
									</a>
								</li>
								<ul class="menu-links-logout">
									<li class="nav-link-logout">
										<a href="logout.php">
											<i class='bx bx-log-out'></i>
											<span class="text nav-text">logout</span>
										</a>
									</li>
								</ul>
							</ul>
						</ul>
					</ul>
				</div>
			</div>
		</nav>
		<div class="content">
			<!-- Container for Cards -->
			<div class="card-container">
				<!-- Card 1 -->
				<div class="card">
					<h2>Informasi Perkuliahan</h2>
					<p>Informasi ini berisi tentang pengumuman terkait perkuliahan, kalender akademis dan informasi
						penting.</p>
					<div class="button-read-more">
						<button onclick="window.location.href='infoperkuliahan.php'">Read More</button>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="card">
					<h2>Informasi Syarat Kelulusan</h2>
					<p>Informasi ini berisi tentang syarat apa saja yang dibutuhkan mahasiswa untuk lulus dari
						Universitas Amikom Yogyakarta.</p>
					<div class="button-read-more">
						<button onclick="window.location.href='infosyarat.php'">Read More</button>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="card">
					<h2>Informasi Wajib</h2>
					<p>Informasi ini berisi tentang pengumuman yang wajib dilakukan mahasiswa seperti pengumpulan berkas
						atau pembaruan berkas.</p>
					<div class="button-read-more">
						<button onclick="window.location.href='infowajib.php'">Read More</button>
					</div>
				</div>

				<!-- Bottom Card -->
				<div class="full-width-card">
					<h2>Informasi Event</h2>
					<p>Informasi ini berisi tentang event yang dapat mencakup berbagai jenis kegiatan, baik akademis
						maupun non-akademis seperti seminar, konferensi, lomba dan festival.</p>
					<div class="button-read-more">
						<button onclick="window.location.href='infoevent.php'">Read More</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>