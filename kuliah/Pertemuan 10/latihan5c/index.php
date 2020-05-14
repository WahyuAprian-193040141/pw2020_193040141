<?php 
	require 'php/functions.php';

	$elektronik = query("SELECT * FROM elektronik");
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5c</title>
	<link rel="stylesheet" type="text/css" href="css/latihan5c.css">
</head>
<body>
	<h1>Daftar Barang Elektronik</h1>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr class="atas">
			<td class='tengah'><b>Nama Barang</b></td>
			<td class='tengah'>Aksi</td>
		</tr>
		<?php foreach ($elektronik as $isi) : ?>
			<tr>
				<td><?= $isi["nama"] ?></td>
				<td><a href="php/detail.php?id=<?= $isi['id']; ?>">lihat detail</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>