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
 ?>