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
            <div class="h1-event">
                <h1>Informasi event</h1>
            </div>
            <div class="card-event-container">
                <div class="card-event">
                    <h2>AMIKOM VIDEO COMPETITION (AVC) 2023</h2>
                    <p>Hai, sobat kreatif!</p>
                    <p>Tahun ini Universitas Amikom Yogyakarta kembali mengadakan event lomba video kreatif tahunan lho!
                        Yaitu Amikom Video Competition 2023. Terdapat dua kategori nih, yaitu Film Pendek dan Film
                        Animasi. Yuk buruan join dan menangkan total hadiah mencapai <b>100 juta dan beasiswa kuliah</b>
                        di Universitas Amikom Yogyakarta! Tema yang diangkat tahun ini adalah “Ubah Ketakutan Menjadi
                        Harapan” dikarenakan maraknya rasa takut dan ragu kalian sebagai siswa-siswi untuk mengenyam
                        pendidikan yang lebih tinggi.</p>
                    <p>Tema yang diangkat tahun ini adalah “<b>Ubah Ketakutan Menjadi Harapan</b>” dikarenakan maraknya
                        rasa takut dan ragu kalian sebagai siswa-siswi untuk mengenyam pendidikan yang lebih tinggi.</p>
                    <div class="card-event-gambar">
                        <img src="lomba.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>