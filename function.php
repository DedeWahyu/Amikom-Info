<?php
// Mulai sesi
session_start();

// Sertakan file koneksi ke database
include('koneksi.php'); // Ganti 'db_connection.php' dengan nama file sebenarnya

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan username dan password dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan query untuk memeriksa apakah pengguna ada
    $query = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Pengguna ada, ambil data pengguna
            $row = mysqli_fetch_assoc($result);

            // Atur variabel sesi
            $_SESSION['id_login'] = $row['id_login'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];

            // Alihkan berdasarkan level pengguna
            if ($_SESSION['level'] == 'admin') {
                header("Location: menuadmin.php");
            } elseif ($_SESSION['level'] == 'user') {
                header("Location: menuuser.php");
            } else {
                // Tangani level pengguna lain sesuai kebutuhan
                echo "Level pengguna tidak dikenal";
            }
        } else {
            // Kredensial login tidak valid
            $_SESSION['error_message'] = "Username atau password tidak valid";
            header("Location: index.php");
        }
    } else {
        // Kesalahan database
        $_SESSION['error_message'] = "Error: " . mysqli_error($koneksi);
        header("Location: index.php");
    }

    // Tutup koneksi ke database
    mysqli_close($koneksi);
}
?>