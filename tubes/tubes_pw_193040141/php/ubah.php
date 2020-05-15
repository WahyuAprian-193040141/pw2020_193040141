<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];
$isi = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
					alert('Data berhasil diubah');
					document.location.href = 'admin.php';
					</script>";
	} else {
		echo "<script>
					alert('Data gagal diubah');
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

	<title>Form Ubah Data</title>
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="icon" href="../assets/icon/ubah.png">
</head>

<body>
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="#ffab00 amber accent-4">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center judul">Form Ubah Data</a>
			</div>
		</nav>
	</div>

	<!-- isi -->
	<div class="light-blue darken-2">
		<div class="container">
			<br>
			<div class="row">
				<div class="col m2"></div>
				<div class="col s12 m8">
					<div class="card-panel white z-depth-5">
						<form action="" method="post" enctype="multipart/form-data">
							<table class="highlight">
								<tbody>
									<tr>
										<input type="hidden" name="id" id="id" value="<?= $isi['id']; ?>">
									</tr>
									<tr>
										<input type="hidden" name="gambar_lama" value="<?= $isi['foto']; ?>">
										<td>
											<label for="foto" class="buram">Foto</label>
										</td>
										<td>:</td>
										<td>
											<img src="../assets/img/<?= $isi['foto']; ?>" width="120" style="display: block;" class="img-preview">
											<input type="file" name="foto" id="foto" class="foto" onchange="previewImage()">
										</td>
									</tr>
									<tr>
										<td>
											<label for="jenis" class="buram">Jenis Barang</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="jenis" id="jenis" required value="<?= $isi['jenis']; ?>" placeholder="Jenis Barang">
										</td>
									</tr>
									<tr>
										<td>
											<label for="nama" class="buram">Nama Barang</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="nama" id="nama" required value="<?= $isi['nama']; ?>" placeholder="Nama Barang">
										</td>
									</tr>
									<tr>
										<td>
											<label for="deskripsi" class="buram">Deskripsi Produk</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="deskripsi" id="deskripsi" required value="<?= $isi['deskripsi']; ?>" placeholder="Deskripsi Produk">
										</td>
									</tr>
									<tr>
										<td>
											<label for="hargabaru" class="buram">Harga</label>
										</td>
										<td>:</td>
										<td>
											<input type="text" name="hargabaru" id="hargabaru" required value="<?= $isi['hargabaru']; ?>" placeholder="Harga">
										</td>
									</tr>
									<tr>
										<td colspan="3" class="center">

											<button class="btn orange-effect #bf360c deep-orange darken-4 z-depth-2 tombol" type="submit"><a href="admin.php" style="text-decoration: none; color: white;">Back
													<i class="material-icons left">arrow_back</i></a>
											</button>

											<button class="btn orange-effect #bf360c deep-orange darken-4 z-depth-2 tombol" type="submit" name="ubah">Change
												<i class="material-icons right">autorenew</i>
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
		<br>
	</div>

	<!-- footer -->
	<footer class="page-footer light-blue darken-2">
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

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Data</title>
	<link rel="stylesheet" type="text/css" href="../css/css2.css">
</head>
<body>
	<h3>Form Ubah Data Eleltronik</h3>
	<form action="" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="6" cellspacing="0" class="tabel">
		<tr>
			<input type="hidden" name="id" id="id" value="<?= $isi['id']; ?>">
		</tr>
		<tr>
			<input type="hidden" name="gambar_lama" value="<?= $isi['foto']; ?>">
			<td>
				<label for="foto">Foto</label>
			</td>
			<td>:</td>
			<td>
				<input type="file" name="foto" id="foto" class="foto" onchange="previewImage()"> -->

<!-- <input type="file" name="foto" id="foto" required value="<?= $isi['foto']; ?>"> -->
<!-- <img src="../assets/img/<?= $isi['foto']; ?>" width="120" style="display: block;" class="img-preview">
			</td>
		</tr>
		<tr>
			<td>
				<label for="jenis">Jenis Barang</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="jenis" id="jenis" required value="<?= $isi['jenis']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nama">Nama Barang</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" id="nama" required value="<?= $isi['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="deskripsi">Deskripsi Produk</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="deskripsi" id="deskripsi" required value="<?= $isi['deskripsi']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="hargabaru">Harga Baru</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="hargabaru" id="hargabaru" required value="<?= $isi['hargabaru']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="3" class="tengah">
				<button type="submit" name="ubah" class="tombol">Ubah Data</button>
				<button type="submit" class="tombol"><a href="../index.php" style="text-decoration: none; color: white;">Kembali</a></button>
			</td>
		</tr>
	</table>
	</form>
	<script src="../js/script.js"></script>
</body>
</html> -->