<?php 
	session_start();
	require 'functions.php';

	// melakukan pengecekan apakah user suda melakukan login jika sudah redirect ke halaman admin
	if (isset($_SESSION['username'])) {
		header("Location: admin.php");
		exit;
	}

	//login
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
		// mencocokan username dan password
		if (mysqli_num_rows($cek_user) > 0) {
			$row = mysqli_fetch_assoc($cek_user);
			if ($password == $row['password']) {
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['hash'] = $row['id'];
			}
			if ($row['id'] == $_SESSION['hash']) {
				header("Location: admin.php");
				die;
			}
			header("Location: ../index.php");
			die;
		}
		$error = true;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/css2.css">
</head>
<body>
	<h1>Login</h1>
	<form action="" method="post">
		<?php if (isset($error)) : ?>
			<p class="error">Username atau Password salah</p>
		<?php endif; ?>
		<table border="0" cellpadding="6" cellspacing="0" class="tabel">
			<tr>
				<td>
					<label for="username">Username</label>
				</td>
				<td>:</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password</label>
				</td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td colspan="3" class="tengah">
					<input type="checkbox" name="remember">
					<label for="remember">Remember me</label>
				</td>
			</tr>
			<tr>
				<td colspan="3" class="tengah">
					<button type="submit" name="submit" class="tombol">Login</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>