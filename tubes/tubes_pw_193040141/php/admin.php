<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$elektronik = query("SELECT * FROM elektronik");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
	$elektronik = cari($_POST['keyword']);

	// $keyword = $_GET['keyword'];
	// $elektronik = query("SELECT * FROM elektronik WHERE
	// 	foto LIKE '%$keyword%' OR
	// 	jenis LIKE '%$keyword%' OR
	// 	nama LIKE '%$keyword%' OR
	// 	deskripsi LIKE '%$keyword%' OR
	// 	hargabaru LIKE '%$keyword%' ");
}
//   else {
// 	$elektronik = query("SELECT * FROM elektronik");
// }
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
		<nav class="light-blue darken-3">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo left judul center">Barang Elektronik</a>
				<div class="right">
					<div class="row">
						<div class="col">
							<input type="text" name="keyword" placeholder="Search" autofocus class="keyword">
							<button type="submit" name="cari" class="tombol-cari">Cari</button>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<!-- isi -->
	<div class="teal darken-1">
		<br>
		<div class="container">
			<div class="row">
				<div class="col s12 m12">
					<?php if (empty($elektronik)) : ?>
						<div class="row">
							<div class="col s12 m12">
								<div class="card grey lighten-5 z-depth-5">
									<div class="card-content white-text">
										<h1>Data tidak ditemukan</h1>
									</div>
									<div class="card-action">
										<a href="admin.php">Back</a>
									</div>
								</div>
							</div>
						</div>
					<?php else : ?>
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
									<a href="ubah.php?id=<?= $isi['id']; ?>"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">change
											<i class="material-icons left">edit</i>
										</button></a>
									<a href="hapus.php?id=<?= $isi['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">Delete
											<i class="material-icons right">delete</i>
										</button></a>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<br>
	</div>



	<!-- <div class="container">
			<br>
			<div class="row">
				<div class="col s12 m12">
					<?php if (empty($elektronik)) : ?>
						<div class="row">
							<div class="col s12 m6">
								<div class="card blue-grey darken-1 z-depth-5">
									<div class="card-content white-text">
										<span class="card-title">Data tidak ditemukan</span>
									</div>
									<div class="card-action">
										<a href="admin.php" class="center">Refresh</a>
									</div>
								</div>
							</div>
						</div>
					<?php else : ?>
						<?php foreach ($elektronik as $isi) : ?>
							<div class="card horizontal z-depth-5">
								<div class="card-image">
									<br>
									<img height="250px" src="../assets/img/<?= $isi['foto']; ?>">
								</div>
								<div class="card-stacked">
									<div class="card-content">
										<table>
											<thead>
												<tr class="universal">
													<th>Jenis Barang</th>
													<th>Nama Barang</th>
													<th>Deskripsi Produk</th>
													<th>Harga</th>
												</tr>
											</thead>

											<tbody>
												<tr class="universal">
													<td><?= $isi['jenis']; ?></td>
													<td><?= $isi['nama']; ?></td>
													<td><?= $isi['deskripsi']; ?></td>
													<td><?= $isi['hargabaru']; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="card-action center">
										<a href="ubah.php?id=<?= $isi['id']; ?>"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">change
												<i class="material-icons left">edit</i>
											</button></a>
										<a href="hapus.php?id=<?= $isi['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">Delete
												<i class="material-icons right">delete</i>
											</button></a>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
			<br>
		</div>
	</div> -->

	<!-- footer -->
	<footer class="page-footer #e0e0e0 white">
		<div class="container">
			<div class="row">
				<div class="col s6 m6 center">
					<a href="tambah.php" class="waves-effect orange accent-4 btn z-depth-5"><i class="material-icons right">add</i>Add Data</a>
				</div>
				<div class="col s6 m6 center">
					<a href="admin.php" class="orange-effect orange accent-4 btn z-depth-5"><i class="material-icons left">autorenew</i>Refresh</a>
				</div>
			</div>
			<div class="row">
				<div class="col s6 m6 center">
					<a href="logout.php" class="orange-effect orange accent-4 btn z-depth-5"><i class="material-icons right">cloud_off</i>Logout</a>
				</div>
				<div class="col s6 m6 center">
					<a href="../index.php" class="orange-effect orange accent-4 btn z-depth-5"><i class="material-icons left">home</i>Home</a>
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
	<script src="../js/script.js"></script>
</body>

</html>

<!-- <!DOCTYPE html>
<html>

<head>
	<title>latihan 6e</title>
	<link rel="stylesheet" type="text/css" href="../css/latihan6e.css">
</head>

<body>
	<h1>Daftar Barang Elektronik</h1>
	<div class="add">
		<a href="tambah.php">Tambah Data</a>
	</div><br>
	<form action="" method="post">
		<input type="text" name="keyword" autofocus class="keyword">
		<button type="submit" name="cari" class="tombol-cari">Cari</button>
	</form>
	<div class="container">
		<table border="1" cellspacing="0" cellpadding="10">
			<tr class="atas">
				<td class='tengah'><b>No</b></td>
				<td class='tengah'><b>Opsi</b></td>
				<td class='tengah'><b>Foto</b></td>
				<td class='tengah'><b>Jenis Barang</b></td>
				<td class='tengah'><b>Nama Barang</b></td>
				<td class='tengah'><b>Deskripsi Produk</b></td>
				<td class='tengah'><b>Harga Baru</b></td>
			</tr>
			<?php if (empty($elektronik)) : ?>
				<tr>
					<td colspan="7">
						<h1>Data tidak ditemukan</h1>
					</td>
				</tr>
			<?php else : ?>
				<?php $i = 1; ?>
				<?php foreach ($elektronik as $isi) : ?>
					<tr>
						<td><?= $i ?></td>
						<td class="tengah">
							<a href="ubah.php?id=<?= $isi['id']; ?>"><button>Ubah</button></a><br><br>
							<a href="hapus.php?id=<?= $isi['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
						</td>
						<td><img src="../assets/img/<?= $isi["foto"]; ?>"></td>
						<td><?= $isi["jenis"] ?></td>
						<td><?= $isi["nama"] ?></td>
						<td><?= $isi["deskripsi"] ?></td>
						<td>Rp. <?= $isi["hargabaru"] ?></td>
					</tr>
					<?php $i++ ?>
				<?php endforeach; ?>
			<?php endif; ?>
			<tr>
				<td colspan="7" class="tengah">
					<a href="../index.php"><button>Kembali</button></a>
					<a href="logout.php"><button>Logout</button></a>
				</td>
			</tr>
		</table>
	</div>
	<script src="../js/script.js"></script>
</body>

</html> -->