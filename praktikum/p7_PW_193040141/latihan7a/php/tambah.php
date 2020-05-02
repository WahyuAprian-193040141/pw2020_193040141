<?php 
	require 'functions.php';

	if (isset($_POST['tambah'])) {
		if (tambah($_POST) > 0) {
			echo "<script>
					alert('Data berhasil ditambahkan');
					document.location.href = 'admin.php';
					</script>";
		} else {
			echo "<script>
					alert('Data gagal ditambahkan');
					document.location.href = 'admin.php';
					</script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="../css/css2.css">
</head>
<body>
	<h3>Form Tambah Data Elektronik</h3>
	<form action="" method="post">
		<table border="0" cellpadding="6" cellspacing="0" class="tabel">
			<tr>
				<td>
					<label for="foto">Foto</label>
				</td>
				<td>:</td>
				<td>
					<input type="text" name="foto" id="foto" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="jenis">Jenis Barang</label>
				</td>
				<td>:</td>
				<td>
					<input type="text" name="jenis" id="jenis" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="nama">Nama Barang</label>
				</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" id="nama" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="deskripsi">Deskripsi Produk</label>
				</td>
				<td>:</td>
				<td>
					<input type="text" name="deskripsi" id="deskripsi" required>
				</td>
			</tr>
			<tr>
				<td>
					<label for="hargabaru">Harga Baru</label>
				</td>
				<td>:</td>
				<td>
					<input type="text" name="hargabaru" id="hargabaru" required>
				</td>
			</tr>
			<tr>
				<td colspan="3" class="tengah">
					<button type="submit" name="tambah" class="tombol">Tambah Data</button>
					<button type="submit" class="tombol"><a href="../index.php" class="kembali">Kembali</a></button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>