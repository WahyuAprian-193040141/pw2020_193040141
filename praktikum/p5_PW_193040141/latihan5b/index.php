<?php 
	require 'php/functions.php';
	$elektronik = query("SELECT * FROM elektronik");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5b</title>
	<link rel="stylesheet" type="text/css" href="css/latihan5b.css">
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
				<td><img src="assets/img/<?= $isi["foto"]; ?>"></td>
				<td><?= $isi["jenis"] ?></td>
				<td><?= $isi["nama"] ?></td>
				<td><?= $isi["deskripsi"] ?></td>
				<td>Rp. <?= $isi["hargabaru"] ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
	</table>
</body>
</html>