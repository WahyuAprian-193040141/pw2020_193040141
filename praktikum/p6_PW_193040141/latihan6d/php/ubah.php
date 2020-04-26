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
</head>
<body>
	<h3>Form Ubah Data Eleltronik</h3>
	<form action="" method="post">
		<ul>
			<input type="hidden" name="id" id="id" value="<?= $isi['id']; ?>">
			<li>
				<label for="foto">Foto :</label><br>
				<input type="text" name="foto" id="foto" required value="<?= $isi['foto']; ?>"><br><br>
			</li>
			<li>
				<label for="jenis">Jenis Barang :</label><br>
				<input type="text" name="jenis" id="jenis" required value="<?= $isi['jenis']; ?>"><br><br>
			</li>
			<li>
				<label for="nama">Nama Barang :</label><br>
				<input type="text" name="nama" id="nama" required value="<?= $isi['nama']; ?>"><br><br>
			</li>
			<li>
				<label for="deskripsi">Deskripsi Produk :</label><br>
				<input type="text" name="deskripsi" id="deskripsi" required value="<?= $isi['deskripsi']; ?>"><br><br>
			</li>
			<li>
				<label for="hargabaru">Harga Baru :</label><br>
				<input type="text" name="hargabaru" id="hargabaru" required value="<?= $isi['hargabaru']; ?>"><br><br>
			</li>
			<br>
			<button type="submit" name="ubah">Ubah Data</button>
			<button type="submit">
				<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
			</button>
		</ul>
	</form>
</body>
</html>