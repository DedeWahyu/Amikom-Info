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

<body class="menuadminphp">
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
								<a href="menuadmin.php">
									<i class='bx bx-home'></i>
									<span class="text nav-text">Home</span>
								</a>
							</li>
							<ul class="menu-links">
								<li class="nav-link-pembayaran">
									<a href="adminpembayaran.php">
										<i class='bx bx-wallet-alt'></i>
										<span class="text nav-text">Pembayaran</span>
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
			<div class="home-container">
				<h1>Selamat datang admin</h1>
			</div>
		</div>
	</div>
</body>

</html>