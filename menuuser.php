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

<body>
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
								<a href="menuuser.php">
									<i class='bx bx-home'></i>
									<span class="text nav-text">Dasboard</span>
								</a>
							</li>
							<ul class="menu-links">
								<li class="nav-link">
									<a href="#">
										<i class='bx bx-bell'></i>
										<span class="text nav-text">Notification</span>
									</a>
								</li>
								<li class="nav-link">
									<a href="#">
										<i class='bx bx-wallet-alt'></i>
										<span class="text nav-text">Pembayaran</span>
									</a>
								</li>
								<li class="nav-link">
									<a href="#">
										<i class='bx bx-bot'></i>
										<span class="text nav-text">Chatbot</span>
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
					<h2>Informasi Singkat 1</h2>
					<p>Ini adalah informasi singkat dalam card 1.</p>
				</div>

				<!-- Card 2 -->
				<div class="card">
					<h2>Informasi Singkat 2</h2>
					<p>Ini adalah informasi singkat dalam card 2.</p>
				</div>

				<!-- Card 3 -->
				<div class="card">
					<h2>Informasi Singkat 3</h2>
					<p>Ini adalah informasi singkat dalam card 3.</p>
				</div>

				<!-- Bottom Card -->
				<div class="full-width-card">
					<h2>Informasi Singkat 4</h2>
					<p>Ini adalah informasi singkat dalam card 4.</p>
				</div>

				<!-- Bottom Card -->
				<div class="full-width-card">
					<h2>Informasi Singkat 4</h2>
					<p>Ini adalah informasi singkat dalam card 4.</p>
				</div>

				<!-- Bottom Card -->
				<div class="full-width-card">
					<h2>Informasi Singkat 4</h2>
					<p>Ini adalah informasi singkat dalam card 4.</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>