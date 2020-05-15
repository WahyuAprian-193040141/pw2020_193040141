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
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Gelasio:wght@500&family=Noto+Serif:wght@700&family=Merienda+One&display=swap" rel="stylesheet">

	<title>Form Registrasi</title>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="icon" href="../assets/icon/register.png">
</head>

<body>
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="#ff6f00 amber darken-4">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center judul">Registrasi</a>
			</div>
		</nav>
	</div>

	<!-- isi -->
	<div class="parallax-container scrollspy">
		<div class="parallax">
			<img src="../assets/background/1.jpg">
		</div>
		<div class="section">
			<div class="container">
				<br><br><br>
				<div class="row">
					<div class="col m2"></div>
					<div class="col s12 m8">
						<div class="card-panel white">
							<form action="" method="post">
								<table>
									<tbody>
										<tr>
											<td>
												<label for="username" class="buram">Username</label>
											</td>
											<td>:</td>
											<td>
												<input type="text" name="username" placeholder="Username">
											</td>
										</tr>
										<tr>
											<td>
												<label for="password" class="buram">Password</label>
											</td>
											<td>:</td>
											<td>
												<input type="password" name="password" placeholder="Password">
											</td>
										</tr>
										<tr>
											<td colspan="3" class="center">
												<button class="btn waves-effect grey darken-4 tombol" type="submit" name="register">Register
													<i class="material-icons right">send</i>
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer class="page-footer #ff6f00 amber darken-4">
		<div class="container">
			<div class="row center">
				<div class="col s4 m4"></div>
				<div class="col s4 m4">
					<a href="../index.php" class="waves-effect white btn black-text"><i class="material-icons left">home</i>Home</a>
				</div>
			</div>
			<div class="row center">
				<div class="col s4 m4"></div>
				<div class="col s4 m4">
					<a href="admin.php" class="waves-effect white btn black-text"><i class="material-icons left">arrow_back</i>Back</a>
				</div>
			</div>
		</div>
		<div class="footer-copyright black">
			<div class="container center kaki">
				<p class="white-text">© 2020 Wahyu Aprian</p>
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