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
						<tr>
							<td>Muamalat</td>
							<td>123</td>
							<td>Remedial</td>
							<td>Rp. 4.000.000</td>
							<td class="center-button"><button onclick="ambilNilai(this)"><span>BAYAR</span></button></td>
						</tr>
						<tr>
							<td>Muamalat</td>
							<td>123</td>
							<td>SPP Tetap</td>
							<td>Rp. 4.000.000</td>
							<td class="center-button"><button onclick="ambilNilai(this)"><span>BAYAR</span></button></td>
						</tr>
						<tr>
							<td>Muamalat</td>
							<td>123</td>
							<td>SPP Variabel</td>
							<td>Rp. 4.000.000</td>
							<td class="center-button"><button onclick="ambilNilai(this)"><span>BAYAR</span></button></td>
						</tr>
						<tr>
							<td>BRI</td>
							<td>321</td>
							<td>Remedial</td>
							<td>Rp. 4.000.000</td>
							<td class="center-button"><button onclick="ambilNilai(this)"><span>BAYAR</span></button></td>
						</tr>
						<tr>
							<td>BRI</td>
							<td>321</td>
							<td>SPP Tetap</td>
							<td>Rp. 4.000.000</td>
							<td class="center-button"><button onclick="ambilNilai(this)"><span>BAYAR</span></button></td>
						</tr>
						<tr>
							<td>BRI</td>
							<td>321</td>
							<td>SPP Variabel</td>
							<td>Rp. 4.000.000</td>
							<td class="center-button"><button onclick="ambilNilai(this)"><span>BAYAR</span></button></td>
						</tr>
					</tbody>
				</table>
			</div>
			<form id="form-data" action="#">
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
					<input type="text" id="noRek" name="noRek">

					<label for="biaya">Nominal Bayar</label>
					<input type="text"></input>
					<div class="button-submit">
						<button type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>