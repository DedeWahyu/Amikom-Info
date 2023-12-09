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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="menuchatbot">
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
			<div class="wrapper">
				<div class="title">Layanan Chatbot</div>
				<div class="form">
					<div class="bot-inbox inbox">
						<div class="icon">
							<i class="fas fa-user"></i>
						</div>
						<div class="msg-header">
							<p>Halo kakak ada yang bisa saya bantu?</p>
						</div>
					</div>
				</div>
				<div class="typing-field">
					<div class="input-data">
						<input id="data" type="text" placeholder="Type something here.." required>
						<button id="send-btn">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#send-btn").on("click", function () {
				$value = $("#data").val();
				$msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
				$(".form").append($msg);
				$("#data").val('');

				// start ajax code
				$.ajax({
					url: 'conectbot.php',
					type: 'POST',
					data: 'text=' + $value,
					success: function (result) {
						$replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
						$(".form").append($replay);
						// when chat goes down the scroll bar automatically comes to the bottom
						$(".form").scrollTop($(".form")[0].scrollHeight);
					}
				});
			});
		});
	</script>
</body>

</html>