<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user suda melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];

	// ambil username berdasarkan id
	$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($hash === hash('sha256', $row['id'], false)) {
		$_SESSION['username'] = $row['username'];
		header("Location: admin.php");
		exit;
	}
}

// login
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	// mencocokan username dan password
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256', $row['id'], false);

			// jika remember me dicentang
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 * 60 * 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash, time()  + 60 * 60 * 24);
			}

			if (hash('sha256', $row['id']) == $_SESSION['hash']) {
				header("Location: admin.php");
				die;
			}
			header("Location: ../index.php");
			die;
		}
	}
	$error = true;
}
?>

<!DOCTYPE html>
<html>

<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Gelasio:wght@500&family=Hind:wght@600&family=Noto+Serif:wght@700&family=Merienda+One&display=swap" rel="stylesheet">

	<title>Login</title>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="icon" href="../assets/icon/login.png">
</head>

<body>
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="#ffab00 amber accent-4">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center judul">Login</a>
			</div>
		</nav>
	</div>

	<!-- isi -->
	<div class="parallax-container scrollspy">
		<div class="parallax">
			<img src="../assets/background/2.jpg">
		</div>
		<div class="section">

			<div class="container">
				<br>
				<div class="row">
					<div class="col m2"></div>
					<div class="col s12 m8">
						<div class="card #ffffff white z-depth-5">
							<div class="card-content black-text">
								<form action="" method="POST">
									<?php if (isset($error)) : ?>
										<p class="error">Username atau Password salah</p>
									<?php endif; ?>
									<table>
										<tbody>
											<tr>
												<td>
													<label for="username" class="buram">Username</label>
												</td>
												<td>:</td>
												<td>
													<input placeholder="Username" type="text" name="username">
												</td>
											</tr>
											<tr>
												<td>
													<label for="password" class="buram">Password</label>
												</td>
												<td>:</td>
												<td>
													<input placeholder="Password" type="password" name="password">
												</td>
											</tr>
											<tr>
												<td colspan="3" class="center">
													<label>
														<input type="checkbox" name="remember" />
														<span class="buram">Remember me</span>
													</label>
												</td>
											</tr>
											<tr>
												<td colspan="3" class="center">
													<button class="btn brown-effect #795548 brown" type="submit" name="submit">Submit
														<i class="material-icons right">cloud</i>
													</button>
												</td>
											</tr>
										</tbody>
									</table>

								</form>
							</div>
							<div class="card-action center">
								<p class="register">Belum punya akun? Registrasi <a href="registrasi.php">disini</a></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- footer -->
	<footer class="page-footer #ff9100 orange accent-3">
		<div class="container">
			<div class="row center">
				<div class="col s4 m4"></div>
				<div class="col s4 m4">
					<a href="../index.php" class="waves-effect #795548 brown btn"><i class="material-icons left">home</i>Home</a>
				</div>
			</div>
			<div class="row center">
				<div class="col s4 m4"></div>
				<div class="col s4 m4">
					<a href="login.php" class="waves-effect #795548 brown btn"><i class="material-icons left">loop</i>Refresh</a>
				</div>
			</div>
		</div>
		<div class="footer-copyright #263238 blue-grey darken-4">
			<div class="container center kaki">
				© 2020 Wahyu Aprian
			</div>
		</div>
	</footer>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script>
		const parallax = document.querySelectorAll('.parallax');
		M.Parallax.init(parallax);
	</script>
</body>

</html>