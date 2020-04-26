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
</head>
<body>
	<h3>Form Tambah Data Mahasiswa</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="foto">Foto :</label><br>
				<input type="text" name="foto" id="foto" required><br><br>
			</li>
			<li>
				<label for="jenis">Jenis Barang :</label><br>
				<input type="text" name="jenis" id="jenis" required><br><br>
			</li>
			<li>
				<label for="nama">Nama Barang :</label><br>
				<input type="text" name="nama" id="nama" required><br><br>
			</li>
			<li>
				<label for="deskripsi">Deskripsi Produk :</label><br>
				<input type="text" name="deskripsi" id="deskripsi" required><br><br>
			</li>
			<li>
				<label for="hargabaru">Harga Baru :</label><br>
				<input type="text" name="hargabaru" id="hargabaru" required><br><br>
			</li>
			<br>
			<button type="submit" name="tambah">Tambah Data</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>