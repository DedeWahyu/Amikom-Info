<?php
session_start();
if ($_SESSION['level'] != "admin") {
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

<body class="adminpengingatphp">
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
						<li class="nav-link-profil">
							<span class="nama-user">Welcome,
								<?php echo $_SESSION['username']; ?>
							</span>
						</li>
						<ul class="menu-links-semua">
							<li class="nav-link-dashboard">
								<a href="menuadmin.php">
									<i class='bx bx-info-circle'></i>
									<span class="text nav-text">Informasi</span>
								</a>
							</li>
							<ul class="menu-links">
								<li class="nav-link-pembayaran">
									<a href="adminpembayaran.php">
										<i class='bx bx-wallet-alt'></i>
										<span class="text nav-text">Pembayaran</span>
									</a>
								</li>
								<li class="nav-link-chatbot">
									<a href="#">
										<i class='bx bx-bot'></i>
										<span class="text nav-text">Chatbot</span>
									</a>
								</li>
								<li class="nav-link-pengingat">
									<a href="adminpengingat.php">
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
			<div class="informasi-container">
				<div class="h1-container">
					<h1>Data pengingat</h1>
				</div>
				<div class="tabel-pembayaran">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Email</th>
								<th>No VA</th>
								<th>Pembayaran</th>
								<th>Nominal</th>
								<th>Bank Pengirim</th>
								<th>No rek</th>
								<th>Nama</th>
								<th>Tahun</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>