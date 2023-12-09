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

<body class="menupembayaran">
	<script>
		function ambilNilai(button) {
			var row = button.parentNode.parentNode;
			var cells = row.getElementsByTagName("td");
			var bank = cells[0].innerText;
			var nova = cells[1].innerText;
			var pembayaran = cells[2].innerText;
			var nominal = cells[3].innerText;

			// Isi nilai ke formulir
			document.getElementById("bank").value = bank;
			document.getElementById("nova").value = nova;
			document.getElementById("pembayaran").value = pembayaran;
			document.getElementById("nominal").value = nominal;

			// Tampilkan formulir
			var form = document.getElementById("form-data");

		}
	</script>
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
									<a href="adminmenupengingat.php">
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
			<div class="h1-container">
				<h1>Informasi Pembayaran</h1>
			</div>
			<div class="tabel-pembayaran">
				<table>
					<thead>
						<tr>
							<th>Bank</th>
							<th>No VA</th>
							<th>Pembayaran</th>
							<th>Nominal</th>
							<th>Bayar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// Ambil data dari database untuk ditampilkan
						// Gantilah 'nama_tabel' dengan nama tabel yang sesuai di database Anda
						$query = "SELECT * FROM payment";
						$result = mysqli_query($koneksi, $query);

						while ($row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo "<td>" . $row['bank'] . "</td>";
							echo "<td>" . $row['nova'] . "</td>";
							echo "<td>" . $row['pembayaran'] . "</td>";
							echo "<td>" . $row['nominal'] . "</td>";
							echo "<td class='center-button'><button onclick='ambilNilai(this)'><span>BAYAR</span>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="h1-container">
				<h1>Form Pembayaran</h1>
			</div>
			<form class="pembatas-form" id="form-data" action="process_payment.php" method="post">
				<div class="form-container">
					<label for="bank">Bank</label>
					<input type="text" id="bank" name="bank" readonly></input>
					<label for="nova">No Virtual Account</label>
					<input type="text" id="nova" name="nova" readonly></input>
					<label for="pembayaran">Pembayaran</label>
					<input type="text" id="pembayaran" name="pembayaran" readonly></input>
					<label for="nominal">Nominal</label>
					<input type="text" id="nominal" name="nominal" readonly></input>
					<label for="pilih-bank">Pilih Bank</label>
					<select id="bank-pilihan" name="bank-pilihan">
						<option value="mandiri">Bank Mandiri</option>
						<option value="bca">BCA</option>
						<option value="bri">BRI</option>
					</select>

					<label for="noRek">Nomor Rekening</label>
					<input type="text" id="noRek" name="noRek" required>
					<?php
					// Menampilkan pesan sukses jika ada
					if (isset($_SESSION['success_message'])) {
						echo '<div class="success-message">' . $_SESSION['success_message'] . '</div>';
						unset($_SESSION['success_message']); // Hapus pesan setelah ditampilkan
					} ?>
					<div class="button-submit">
						<button type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>