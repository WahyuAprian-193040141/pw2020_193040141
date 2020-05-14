<?php
require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik");

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
	<title>Latihan 6e</title>
	<link rel="stylesheet" type="text/css" href="css/latihan6e.css">
</head>

<body>
	<h1>Daftar Barang Elektronik</h1>
	<div class="tengah">
		<form action="" method="get">
			<input type="text" name="keyword" autofocus>
			<button type="submit" name="cari">Cari</button>
		</form>
	</div><br>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr class="atas">
			<td class='tengah'><b>Nama Barang</b></td>
			<td class='tengah'>Aksi</td>
		</tr>
		<?php if (empty($elektronik)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan</h1>
				</td>
			</tr>
		<?php else : ?>
			<?php foreach ($elektronik as $isi) : ?>
				<tr>
					<td><?= $isi["nama"] ?></td>
					<td><a href="php/detail.php?id=<?= $isi['id']; ?>">lihat detail</a></td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		<tr>
			<td colspan="2" class="tengah">
				<a href="php/login.php"><button type="" class="opsi">Masuk ke halaman Admin</button></a>
			</td>
		</tr>
	</table>
</body>

</html>