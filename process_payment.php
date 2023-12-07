<?php
session_start();
include('koneksi.php'); // Ganti 'db_connection.php' dengan nama file sebenarnya
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data formulir
    $bank = $_POST['bank'];
    $nova = $_POST['nova'];
    $pembayaran = $_POST['pembayaran'];
    $nominal = $_POST['nominal'];
    $selectedBank = $_POST['bank-pilihan'];
    $noRek = $_POST['noRek'];
    $seasonSender = $_SESSION['username'];

    // Cek apakah data sudah ada di database
    $checkQuery = "SELECT * FROM payment_info 
                   WHERE bank = '$bank' 
                   AND nova = '$nova' 
                   AND pembayaran = '$pembayaran' 
                   AND season_sender = '$seasonSender'";

    $checkResult = mysqli_query($koneksi, $checkQuery);

    $sql = "INSERT INTO payment_info (bank, nova, pembayaran, nominal, selected_bank, no_rek, season_sender)
            VALUES ('$bank', '$nova', '$pembayaran', '$nominal', '$selectedBank', '$noRek', '$seasonSender')";

    if (mysqli_query($koneksi, $sql)) {
        $_SESSION['success_message'] = "Data baru berhasil ditambahkan";
        header("Location: menupembayaran.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        header("Location: menupembayaran.php");
        exit();
    }
}
?>