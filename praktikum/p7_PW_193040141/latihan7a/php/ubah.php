<?php 
	require 'functions.php';

	$id = $_GET['id'];
	$isi = query("SELECT * FROM elektronik WHERE id = $id")[0];

	if (isset($_POST['ubah'])) {
		if (ubah($_POST) > 0) {
			echo "<script>
					alert('Data berhasil diubah');
					document.location.href = 'admin.php';
					</script>";
		} else {
			echo "<script>
					alert('Data gagal diubah');
					document.location.href = 'admin.php';
					</script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Data</title>
	<link rel="stylesheet" type="text/css" href="../css/css2.css">
</head>
<body>
	<h3>Form Ubah Data Eleltronik</h3>
	<form action="" method="post">
	<table border="0" cellpadding="6" cellspacing="0" class="tabel">
		<tr>
			<input type="hidden" name="id" id="id" value="<?= $isi['id']; ?>">
		</tr>
		<tr>
			<td>
				<label for="foto">Foto</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="foto" id="foto" required value="<?= $isi['foto']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="jenis">Jenis Barang</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="jenis" id="jenis" required value="<?= $isi['jenis']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nama">Nama Barang</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="nama" id="nama" required value="<?= $isi['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="deskripsi">Deskripsi Produk</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="deskripsi" id="deskripsi" required value="<?= $isi['deskripsi']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="hargabaru">Harga Baru</label>
			</td>
			<td>:</td>
			<td>
				<input type="text" name="hargabaru" id="hargabaru" required value="<?= $isi['hargabaru']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="3" class="tengah">
				<button type="submit" name="ubah" class="tombol">Ubah Data</button>
				<button type="submit" class="tombol"><a href="../index.php" style="text-decoration: none; color: white">Kembali</a></button>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>