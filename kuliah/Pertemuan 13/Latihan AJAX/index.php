<?php
require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik");

if (isset($_POST['cari'])) {
	$elektronik = cari($_POST['keyword']);
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
		<form action="" method="post">
			<input type="text" name="keyword" autofocus class="keyword">
			<button type="submit" name="cari" class="tombol-cari">Cari</button>
		</form>
	</div><br>

	<div class="container">
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
	</div>
	<script src="js/script.js"></script>
</body>

</html>