<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
    	<h1>Amikom Info <br>Login<br></h1>
    	<form action="function.php" method="post">
        <div class="txt_field">
		<input type="text" name="username"  required="required">
        	<span></span>
        	<label>Username</label>
        </div>
        <div class="txt_field">
		<input type="password" name="password" required="required">
        	<span></span>
        	<label>Password</label>
        </div>
        <input type="submit" class="tombol_login" value="LOGIN">
		<?php
        session_start();
        if (isset($_SESSION['error_message'])) {
          echo '<div class="error_message">' . $_SESSION['error_message'] . '</div>';
          unset($_SESSION['error_message']); // Hapus pesan kesalahan setelah ditampilkan
        }
      	?>
        </div>		
    	</form>
    </div>
</body>
</html>