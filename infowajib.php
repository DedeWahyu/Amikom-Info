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
                <h1>Informasi Wajib</h1>
            </div>
            <div class="card-wajib-container">
                <div class="card-wajib">
                    <h2>Pemberkasan dan Melengkapi Data Profil untuk Mahasiswa Angkatan <br>2016-2022</h2>
                    <p>Kepada Yth Mahasiswa Universitas Amikom Yogyakarta</p>
                    <p>Diinformasikan kepada Seluruh Mahasiswa Angkatan 2016-2022 Universitas Amikom Yogyakarta yang
                        belum mengikuti/belum daftar ujian pendadaran, Silahkan wajib melengkapi data profil dashboard
                        <a href="mhs.amikom.ac.id">mhs.amikom.ac.id</a> dan melakukan pemberkasan dokumen secara Offline
                        atau Online (pilih salah
                        satu), antara lain:
                    </p>
                    <p><b>WNI Jenjang S1/D3</b></p>
                    <ul type="disc">
                        <li>Scan Ijazah SMA/SMK Asli halaman 1 dan 2 digabung jadi 1 file pdf</li>
                        <li>Scan SKHU Asli (Jika ada) (format pdf).</li>
                        <li>Scan KTP (format pdf).</li>
                        <li>Scan Kartu Keluarga (format pdf).</li>
                        <li>Scan Kartu Keluarga Orangtua / Scan KTP Kedua Orangtua (format pdf)</li>
                        <li>Scan Surat Pernyataan Penghasilan Orangtua/Wali (format pdf)</li>
                        <li>Scan Surat Pernyataan Bebas Narkoba (format pdf).</li>
                        <li>Scan Surat Pernyataan Penyelesaian Studi (format pdf).</li>
                        <li>Scan Surat Pernyataan Domisili (format pdf).</li>
                        <li>Template surat pernyataan dapat didownload di link
                            <a
                                href="https://drive.google.com/drive/folders/1pcn5MGgD0gP2s-GnReugh_Ln4qmolPxQ?usp=sharing">https://drive.google.com/drive/folders/1pcn5MGgD0gP2s-GnReugh_Ln4qmolPxQ?usp=sharing</a>
                        </li>
                    </ul>
                    <p>Berkas-berkas tersebut diatas dapat dikumpulkan secara Offline (bagi yang ada di Yogyakarta) di
                        ruang pemberkasan DAAK Gedung 4 lantai 1 atau dapat diupload secara Online (bagi yang diluar
                        kota Yogyakarta) melalui link <a
                            href="https://bit.ly/BerkasMahasiswaLama">https://bit.ly/BerkasMahasiswaLama</a> (Silahkan
                        login menggunakan
                        email students Amikom terlebih dahulu untuk dapat mengakses link ini) pada tanggal 15 Agustus-21
                        Agustus 2023.
                    </p>
                    <p>Jika sampai batas waktu diatas tidak mengumpulkan atau tidak diupload, maka PIN (Penomoran Ijazah
                        Nasional) tidak dapat diajukan ke Dikti sehingga Ijazah tidak dapat dicetak dan Mahasiswa tidak
                        dapat mengikuti Wisuda.
                    </p>
                    <p>Informasi resminya dapat dilihat di web
                        <a
                            href="https://daak.amikom.ac.id/artikel/informasi-pemberkasan-dan-melengkapi-data-profil-untuk-mahasiswa-angkatan-2016-2022">https://daak.amikom.ac.id/artikel/informasi-pemberkasan-dan-melengkapi-data-profil-untuk-mahasiswa-angkatan-2016-2022</a>
                    </p>
                    <p>Demikian informasi ini kami sampaikan. Jika ada hal yang belum jelas, silahkan menghubungi
                        Hotline Pusat Amikom : WA 08525-3444-999</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>