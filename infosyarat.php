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
            <div class="h1-syarat">
                <h1>JALUR KELULUSAN</h1>
                <h1>S1 Informatika</h1>
            </div>
            <div class="h2-syarat">
                <h2>I.
                    <h2>Jalur Skripsi Reguler</h2>
                </h2>
            </div>
            <div class="syarat-content">
                <p>Skripsi di Program Studi Informatika Fakultas Ilmu Komputer Universitas Amikom
                    Yogyakarta merupakan karya ilmiah berupa laporan penelitian yang ditulis dan
                    disusun oleh mahasiswa S1 sebagai persyaratan akhir pendidikan akademik dengan
                    bobot 6 SKS.</p>
                <ol>
                    <li><a href="https://informatika.amikom.ac.id/page/jalur-kelulusan">Panduan penyusunan laporan
                            skripsi</a></li>
                    <li><a href="https://informatika.amikom.ac.id/page/jalur-kelulusan">Template Laporan Skripsi</a>
                    </li>
                </ol>
            </div>
            <div class="h2-syarat">
                <h2>II.
                    <h2>Jalur Non Skripsi/Skripsi Non Reguler</h2>
                </h2>
            </div>
            <div class="syarat-content">
                <p>Jalur Non Skripsi atau skripsi non reguler merupakan salah satu jalur yang dapat
                    digunakan untuk syarat kelulusan mahasiswa selain jalur skripsi. Berdasarkan
                    Peraturan Rektor Universitas Amikom Yogyakarta Nomor
                    004/PR.REK/AMIKOM/VII/2020 tentang Penyelenggaraan Program Diploma,
                    Sarjana, Profesi dan Pascasarjana Universitas Amikom Yogyakarta, Terdapat 6 jalur
                    non skripsi di Fakultas Ilmu Komputer yaitu Jalur Scientist, Jalur Profesional: Lomba,
                    Magang, Start Up dan Artist.</p>
            </div>
            <div class="h2-syarat">
                <h2>III.
                    <h2>Syarat Umum :</h2>
                </h2>
            </div>
            <div class="syarat-content">
                <ol>
                    <li>Mahasiswa aktif Informatika</li>
                    <li>Telah menempuh minimal 138 sks</li>
                    <li>Tidak ada nilai E</li>
                    <li>Jika ada nilai D tidak lebih dari 25% dari total SKS</li>
                    <li>Minimal nilai C untuk Mata Kuliah : Pendidikan Agama, Pendidikan Pancasila, Pendidikan
                        Kewarganegaraan, Bahasa Indonesia</li>
                    <li>Memiliki produk/karya yang akan diklaim pada jalur non reguler</li>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</body>

</html>