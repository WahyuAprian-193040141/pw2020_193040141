<?php 
	function koneksi() {
		$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
		mysqli_select_db($conn, "tubes_193040141") or die("Database salah!");
		return $conn;
	}

	function query($sql) {
		$conn = koneksi();
		$elektronik = mysqli_query($conn, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($elektronik)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data) {
		$conn = koneksi();

		$foto = htmlspecialchars($data['foto']);
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

	function hapus($id) {
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM elektronik WHERE id = '$id'");

		return mysqli_affected_rows($conn);
	}

	function ubah($data) {
		$conn = koneksi();
		$id = htmlspecialchars($data['id']);
		$foto = htmlspecialchars($data['foto']);
		$jenis = htmlspecialchars($data['jenis']);
		$nama = htmlspecialchars($data['nama']);
		$deskripsi = htmlspecialchars($data['deskripsi']);
		$hargabaru = htmlspecialchars($data['hargabaru']);

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

	function cari($keyword) {
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

	function registrasi($data) {
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
 ?>