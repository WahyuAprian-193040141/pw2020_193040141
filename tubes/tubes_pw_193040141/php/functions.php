<?php
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040141") or die("Database salah!");
	return $conn;
}

function query($sql)
{
	$conn = koneksi();
	$elektronik = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($elektronik)) {
		$rows[] = $row;
	}
	return $rows;
}

function upload()
{
	$nama_file = $_FILES['foto']['name'];
	$tipe_file = $_FILES['foto']['type'];
	$ukuran_file = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmp_file = $_FILES['foto']['tmp_name'];

	// ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		// echo "<script>
		// 		alert('pilih gambar terlebih dahulu');
		// 		</script>";
		return 'default.jpg';
	}

	// cek ekstensi file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
					alert('Yang anda pilih bukan gambar');
					</script>";
		return false;
	}

	// cek type file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
		echo "<script>
					alert('Yang anda pilih bukan gambar');
					</script>";
		return false;
	}

	// cek ukuran file
	// maksimal 10Mb == 10000000
	if ($ukuran_file > 10000000) {
		echo "<script>
					alert('Ukuran terlalu besar Maks 10Mb');
					</script>";
		return false;
	}

	// lolos pengecekan
	// siap upload file
	// generate nama file baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

	return $nama_file_baru;
}

function tambah($data)
{
	$conn = koneksi();

	//upload gambar
	$foto = upload();
	if (!$foto) {
		return false;
	}

	// $foto = htmlspecialchars($data['foto']);
	$jenis = htmlspecialchars($data['jenis']);
	$nama = htmlspecialchars($data['nama']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$hargabaru = htmlspecialchars($data['hargabaru']);

	$query = "INSERT INTO elektronik
					VALUES
					('', '$foto','$jenis', '$nama', '$deskripsi', '$hargabaru')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();

	// menghapus gambar di folder img
	// $elektronik = query("SELECT * FROM elektronik WHERE id = '$id'");
	// if ($elektronik['foto'] != 'default.jpg') {
	// 	unlink('../assets/img/' . $elektronik['foto']);
	// }


	mysqli_query($conn, "DELETE FROM elektronik WHERE id = '$id'") or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();
	$id = htmlspecialchars($data['id']);
	$gambar_lama = htmlspecialchars($data['gambar_lama']);
	$jenis = htmlspecialchars($data['jenis']);
	$nama = htmlspecialchars($data['nama']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$hargabaru = htmlspecialchars($data['hargabaru']);

	$foto = upload();
	if (!$foto) {
		return false;
	}

	if ($foto == 'default.jpg') {
		$foto = $gambar_lama;
	}

	$query = "UPDATE elektronik
				SET
				foto = '$foto',
				jenis = '$jenis',
				nama = '$nama',
				deskripsi = '$deskripsi',
				hargabaru = '$hargabaru'
				WHERE id = '$id';
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM elektronik
					WHERE
					foto LIKE '%$keyword%' OR
		 			jenis LIKE '%$keyword%' OR
		 			nama LIKE '%$keyword%' OR
		 			deskripsi LIKE '%$keyword%' OR
		 			hargabaru LIKE '%$keyword%' ";

	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
					alert('Username sudah digunakan');
					</script>";
		return false;
	}

	// enkripsi pasword
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru
	$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}
