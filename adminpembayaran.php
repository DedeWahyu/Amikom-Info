<?php
session_start();
if ($_SESSION['level'] != "admin") {
	exit(); // Tambahkan baris ini untuk menghentikan eksekusi skrip setelah mengarahkan
}
?>
<?php
include('koneksi.php');

// Fungsi untuk menghapus entri berdasarkan id_bayar
function hapusEntri($id_bayar)
{
	global $koneksi;
	$query = "DELETE FROM payment_info WHERE id_bayar = '$id_bayar'";
	mysqli_query($koneksi, $query);
}

// Cek apakah parameter aksi 'hapus' telah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aksi']) && $_POST['aksi'] === 'hapus' && isset($_POST['id_bayar'])) {
    // Panggil fungsi hapusEntri dengan id_bayar yang diterima dari formulir
    hapusEntri($_POST['id_bayar']);
    header("Location: adminpembayaran.php"); // Redirect kembali ke halaman setelah menghapus
    exit();
}

// Query untuk mengambil data dari tabel pembayaran dan tahun dari tabel lain
$query = "SELECT p.id_bayar, p.bank, p.nova, p.pembayaran, p.nominal, p.selected_bank, p.no_rek, p.season_sender, t.tahun
          FROM payment_info p
          JOIN tb_login t ON p.season_sender = t.username";

$result = mysqli_query($koneksi, $query);

// Cek kesalahan pada query
if (!$result) {
	die("Error in query: " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>user</title>
	<link rel="stylesheet" href="sidebar.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="adminpembayaranphp">
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
					<h1>Pembayaran Langsung</h1>
				</div>
				<div class="tabel-pembayaran">
					<table>
						<thead>
							<tr>
								<th>No</th>
								<th>Bank</th>
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
							<?php
							// Inisialisasi variabel nomor urut
							$nomorUrut = 1;

							// Tampilkan data dari tabel pembayaran dan tahun dari tabel lain
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>{$nomorUrut}</td>";
								echo "<td>{$row['bank']}</td>";
								echo "<td>{$row['nova']}</td>";
								echo "<td>{$row['pembayaran']}</td>";
								echo "<td>{$row['nominal']}</td>";
								echo "<td>{$row['selected_bank']}</td>";
								echo "<td>{$row['no_rek']}</td>";
								echo "<td>{$row['season_sender']}</td>";
								echo "<td>{$row['tahun']}</td>";
								// Tambahkan tombol hapus dengan link yang mengarah ke halaman ini dengan parameter aksi=hapus dan id_bayar yang bersangkutan
								echo "<td><form method='post' action='adminpembayaran.php'>
								          <input type='hidden' name='aksi' value='hapus'>
										  <input type='hidden' name='id_bayar' value='{$row['id_bayar']}'>
										  <button type='submit'>Hapus</button>
									</form></td>";
								echo "</tr>";

								echo "</tr>";

								// Tambahkan nomor urut setiap kali baris ditampilkan
								$nomorUrut++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>

</html>