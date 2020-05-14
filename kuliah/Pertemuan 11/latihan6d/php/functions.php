<?php 
	function koneksi() {
		$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
		mysqli_select_db($conn, "tubes_193040141") or die("Database salah!");
		return $conn;
	}

	function query($sql) {
		$conn = koneksi();
		$elektronik = mysqli_query($conn, "$sql");
		
		// if( mysqli_num_rows($elektronik) == 1) {
		// 	return mysqli_fetch_assoc($elektronik);
		// }

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
 ?>