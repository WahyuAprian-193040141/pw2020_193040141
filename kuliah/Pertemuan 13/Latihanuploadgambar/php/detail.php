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
 	<title>latihan 6e</title>
 	<link rel="stylesheet" type="text/css" href="../css/latihan6e.css">
 </head>
 <body>
 	<h1>Daftar Barang Elektronik</h1>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr class="atas">
			<td class='tengah'><b>No</b></td>
			<td class='tengah'><b>Foto</b></td>
			<td class='tengah'><b>Jenis Barang</b></td>
			<td class='tengah'><b>Nama Barang</b></td>
			<td class='tengah'><b>Deskripsi Produk</b></td>
			<td class='tengah'><b>Harga Baru</b></td>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($elektronik as $isi) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><img src="../assets/img/<?= $isi["foto"]; ?>"></td>
				<td><?= $isi["jenis"] ?></td>
				<td><?= $isi["nama"] ?></td>
				<td><?= $isi["deskripsi"] ?></td>
				<td>Rp. <?= $isi["hargabaru"] ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
		<tr>
			<td colspan="6" class="tengah"><button class="tombol-kembali"><a href="../index.php">Kembali</a></button></td>
		</tr>
	</table>
 </body>
 </html>