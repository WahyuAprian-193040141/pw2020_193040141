<?php 
	$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040141") or die("Database salah!");
	$result = mysqli_query($conn, "SELECT * FROM elektronik");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
	<link rel="stylesheet" type="text/css" href="css/latihan5a.css">
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
		<?php while($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><img src="assets/img/<?= $row["foto"]; ?>"></td>
				<td><?= $row["jenis"] ?></td>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["deskripsi"] ?></td>
				<td>Rp. <?= $row["hargabaru"] ?></td>
			</tr>
			<?php $i++ ?>
		<?php endwhile; ?>
	</table>
</body>
</html>