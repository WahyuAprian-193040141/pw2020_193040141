<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
					alert('Data berhasil ditambahkan');
					document.location.href = 'admin.php';
					</script>";
	} else {
		echo "<script>
					alert('Data gagal ditambahkan');
					document.location.href = 'admin.php';
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

	<title>Form Add Data</title>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="icon" href="../assets/icon/tambah.png">
</head>

<body>
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="amber darken-4">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center judul">Tambah Data</a>
			</div>
		</nav>
	</div>

	<!-- isi -->
	<div class="#ff3d00 deep-orange accent-3">
		<br>
		<div class="container">
			<div class="row">
				<div class="col m2"></div>
				<div class="col s12 m8">
					<div class="card-panel white z-depth-5">
						<form action="" method="post" enctype="multipart/form-data">
							<table>
								<tbody>
									<tr>
										<td>
											<label for="foto" class="buram">Foto</label>
										</td>
										<td>:</td>
										<td>
											<img src="../assets/img/default.jpg" width="120" style="display: block;" class="img-preview">
											<input type="file" name="foto" id="foto" class="foto" onchange="previewImage()">
										</td>
									</tr>
									<tr>
										<td>
											<label for="jenis" class="buram">Jenis Barang</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="jenis" id="jenis" placeholder="Jenis Barang" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="nama" class="buram">Nama Barang</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="nama" id="nama" placeholder="Nmaa Barang" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="deskripsi" class="buram">Deskripsi Produk</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi Produk" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="hargabaru" class="buram">Harga</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="hargabaru" id="hargabaru" placeholder="Harga" required>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="center">
											<button class="btn orange-effect deep-orange darken-4 tombol" type="submit" name="tambah">Add Data
												<i class="material-icons right">add</i>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>

	<!-- footer -->
	<footer class="page-footer #ff9100 orange accent-3">
		<div class="footer-copyright #263238 blue-grey darken-4">
			<div class="container center kaki">
				© 2020 Wahyu Aprian
			</div>
		</div>
	</footer>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script src="../js/script.js"></script>
</body>

</html>