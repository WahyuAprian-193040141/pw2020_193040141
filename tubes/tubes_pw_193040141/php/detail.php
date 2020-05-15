<?php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

$id = $_GET['id'];

$elektronik = query("SELECT * FROM elektronik WHERE id = $id");
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
	<link href="https://fonts.googleapis.com/css2?family=Jost&family=Gelasio:wght@500&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

	<title>Daftar Barang Elektronik</title>
	<link rel="stylesheet" href="../css/css.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="icon" href="../assets/icon/universal.png">
</head>

<body>
	<!-- navbar -->
	<div class="navbar-fixed">
		<nav class="grey darken-3">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center judul">Barang Elektronik</a>
			</div>
		</nav>
	</div>

	<!-- isi -->
	<div class="#424242 grey darken-3">
		<br><br><br><br>
		<div class="container">
			<div class="row">
				<div class="col">
					<?php foreach ($elektronik as $isi) : ?>
						<div class="card-panel grey lighten-5 z-depth-5">
							<div class="row">
								<div class="col s12 m4">
									<img src="../assets/img/<?= $isi['foto']; ?>" class="responsive-img">
								</div>
								<div class="col s12 m8">
									<table>
										<thead>
											<tr>
												<th>Jenis Barang</th>
												<th>Nama Barang</th>
												<th>Deskripsi Produk</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?= $isi["jenis"] ?></td>
												<td><?= $isi["nama"] ?></td>
												<td><?= $isi["deskripsi"] ?></td>
												<td>Rp.<?= $isi["hargabaru"] ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="center">
								<a href="../index.php" class="cyan-effect #006064 cyan darken-4 btn"><i class="material-icons left">arrow_back</i>Back</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br>
	</div>


	<!-- <div class="col s12 m12"> -->

	<!-- <div class="card #fafafa grey lighten-5 z-depth-5">
						<div class="card-content black-text"> -->

	<!-- <table class="white highlight z-depth-5">
						<thead class="center">
							<tr class="universal">
								<th>Foto</th>
								<th>Jenis Barang</th>
								<th>Nama Barang</th>
								<th>Deskrpisi Produk</th>
								<th>Harga Baru</th>
							</tr>
						</thead>
						<?php foreach ($elektronik as $isi) : ?>
							<tbody>
								<tr class="universal">
									<td><img src="../assets/img/<?= $isi['foto']; ?>" class="foto"></td>
									<td><?= $isi['jenis'] ?></td>
									<td><?= $isi['nama'] ?></td>
									<td><?= $isi['deskripsi'] ?></td>
									<td>Rp.<?= $isi['hargabaru'] ?></td>
								</tr>
								<tr>
									<td colspan="5" class="center">
										<a href="../index.php" class="cyan-effect #006064 cyan darken-4 btn"><i class="material-icons left">arrow_back</i>Back</a>
									</td>
								</tr>
							</tbody>
						<?php endforeach; ?>
					</table>
				</div> -->

	<!-- <div class="card-action center">
					<a href="../index.php" class="cyan-effect #006064 cyan darken-4 btn"><i class="material-icons left">arrow_back</i>Back</a>
				</div> -->
	<!-- </div>
				</div> -->

	<!-- </div>
		</div>
		<br>
	</div> -->

	<!-- footer -->
	<footer class="page-footer #424242 grey darken-3">
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