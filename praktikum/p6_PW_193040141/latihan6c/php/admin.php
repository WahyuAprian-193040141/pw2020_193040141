<?php 
	require 'functions.php';

	$elektronik = query("SELECT * FROM elektronik")
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 6c</title>
 	<link rel="stylesheet" type="text/css" href="../css/latihan6c.css">
 </head>
 <body>
 	<h1>Daftar Barang Elektronik</h1>
 	<div class="add">
 		<a href="tambah.php">Tambah Data</a>
 	</div><br>
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
		<?php $i = 1; ?>
		<?php foreach ($elektronik as $isi) : ?>
			<tr>
				<td><?= $i ?></td>
				<td class="tengah">
					<a href=""><button>Ubah</button></a><br><br>
					<a href="hapus.php?id=<?= $isi['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
				</td>
				<td><img src="../assets/img/<?= $isi["foto"]; ?>"></td>
				<td><?= $isi["jenis"] ?></td>
				<td><?= $isi["nama"] ?></td>
				<td><?= $isi["deskripsi"] ?></td>
				<td>Rp. <?= $isi["hargabaru"] ?></td>
			</tr>
			<?php $i++ ?>
		<?php endforeach; ?>
		<tr>
			<td colspan="7" class="tengah">
				<a href="../index.php"><button class="tombol-kembali">Kembali</button></a>
			</td>
		</tr>
	</table>
 </body>
 </html>