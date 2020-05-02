<?php 
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: login.php");
		exit;
	}

	require 'functions.php';

	$elektronik = query("SELECT * FROM elektronik");

 	// ketika tombol cari diklik
 	if (isset($_GET['cari'])) {
 		$keyword = $_GET['keyword'];
 		$elektronik = query("SELECT * FROM elektronik WHERE
 			foto LIKE '%$keyword%' OR
 			jenis LIKE '%$keyword%' OR
 			nama LIKE '%$keyword%' OR
 			deskripsi LIKE '%$keyword%' OR
 			hargabaru LIKE '%$keyword%' ");
 	} else {
 		$elektronik = query("SELECT * FROM elektronik");
 	}
  ?>

 <!DOCTYPE html>
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
 	<form action="" method="get">
 		<input type="text" name="keyword" autofocus>
 		<button type="submit" name="cari">Cari</button>
 	</form>
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
 </body>
 </html>