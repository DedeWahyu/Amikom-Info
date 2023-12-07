<?php
session_start();
include("koneksi.php");
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

<body class="menupengingat">
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
			<div class="fitur-pengingat">
				<h1>Mengaktifkan / Menonaktifkan Pengingat </h1>
			</div>
			<div class="onoff-switch">
				<label class="switch">
					<input type="checkbox">
					<span class="slider"></span>
				</label>
			</div>
			<?php
			 // Ambil data dari database berdasarkan sesi pengguna
			 $username = $_SESSION['username'];
			 $query = "SELECT p.* FROM pengingat p JOIN tb_login l ON p.season_sender = l.username WHERE l.username = '$username'";
			 $result = mysqli_query($koneksi, $query);
 
			 if ($result) {
				 while ($row = mysqli_fetch_assoc($result)) {
					 // Tampilkan data email, WhatsApp, dan Telegram
					 echo '<div class="card-pengingat">';
					 echo '<div class="full-card">';
					 echo '<img src="gmail.png" alt="logo">';
					 echo '<h2>Email</h2>';
					 echo '<p>' . $row['email'] . '</p>';
					 echo '</div>';
 
					 echo '<div class="full-card">';
					 echo '<img src="whatsapp.png" alt="logo">';
					 echo '<h2>WhatsApp</h2>';
					 echo '<p>' . $row['whatsapp'] . '</p>';
					 echo '</div>';
 
					 echo '<div class="full-card">';
					 echo '<div class="gambar-telegram">';
					 echo '<img src="telegram.png" alt="logo">';
					 echo '</div>';
					 echo '<h2>Telegram</h2>';
					 echo '<p>' . $row['telegram'] . '</p>';
					 echo '</div>';
					 echo '</div>';
				 }
			 } else {
				 echo "Error mengambil data: " . mysqli_error($koneksi);
			 }
 
			 // Tutup koneksi ke database
			 mysqli_close($koneksi);
			 ?>
		</div>
	</div>
</body>

</html>