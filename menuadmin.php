<?php
session_start();
if ($_SESSION['level'] != "admin") {
    exit(); // Tambahkan baris ini untuk menghentikan eksekusi skrip setelah mengarahkan
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>admin</title>
</head>

<body>
    <h1>Halaman Admin</h1>
    <p>Halo <b>
            <?php echo $_SESSION['username']; ?>
        </b> Anda telah login sebagai <b>
            <?php echo $_SESSION['level']; ?>
        </b>.</p>
    <a href="logout.php">LOGOUT</a>
</body>

</html>