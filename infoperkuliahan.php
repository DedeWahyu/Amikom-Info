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
                <h1>Informasi perkuliahan</h1>
            </div>
            <div class="card-perkuliahan-container">
                <div class="card-perkuliahan">
                    <h2>JADWAL KULIAH SEMESTER GANJIL 2023/2024</h2>
                    <p>Update tanggal 11 September 2023 Jam 12.00 WIB</p>
                    <p><b>FAKULTAS ILMU KOMPUTER</b></p>
                    <ol>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi D3 Teknik Informatika</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi D3 Manajemen informatika</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Informatika dan BCI</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Sistem Informasi dan BCIS</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Teknologi Informasi dan BCIT</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Teknik Komputer</li></a>
                    </ol>
                    <p><b>FAKULTAS EKONOMI DAN SOSIAL</b></p>
                    <ol>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Akutansi</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Ekonomi</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Hubungan Internasional</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Ilmu Komunikasi dan BCS</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Ilmu Pemerintahan</li></a>
                        <li><a href="https://drive.google.com/file/d/1VbqY6gJJ-nOm2CmKGod6ZGbcfUg-51ZL/view?usp=sharing">Prodi S1 Kewirausahaan</li></a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</body>

</html>