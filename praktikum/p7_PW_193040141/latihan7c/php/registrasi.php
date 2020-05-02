<?php 
	require 'functions.php';

	if (isset($_POST["register"])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
					alert('Registrasi Berhasil');
					document.location.href = 'login.php';
					</script>";
		} else {
			echo "<script>
					alert('Registrasi Gagal');
					</script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="../css/css2.css">
</head>
<body>
	<h3>Registrasi</h3>
	<form action="" method="post">
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
					<button type="submit" name="register" class="tombol">Register</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>