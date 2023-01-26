<?php
 session_start();
 include 'koneksi/koneksidb.php';
?>

<!DOCTYPE html>
	<head>
		<title>LOGIN</title>
		<link type="text/css" rel="stylesheet" href="css/login.css">
	</head>
	<body>
	<form method="POST" action="login.php">
	<div class="box">
		<div class="logo">LOGIN</div><br>
		
			<div class="inputBox">
			<input type="text" name="username" autocomplete="off" required="">
			<label>Username</label>
			</div>
			<div class="inputBox">
			<input type="password" name="password" required="">
			<label>Password</label>
			</div>
			
			<input type="submit" name="login" value="Login">
		</form>
	</div>
</body>
</html>