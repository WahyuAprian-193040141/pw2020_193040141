<?php 
	echo "Ini tampilannya";
	echo "<hr>";

	// echo "username : ".$_GET['username']."<br>";
	// echo "password : ".$_GET['password'];

	// fungsi
	// _______________________________________
	function ceklogin($username, $password) {
		if ($username == "wahyu" && $password == "qwerty") {
			echo "Berhasil Login";
		} else {
			echo "Gagal login";
		}
	}

	// ekseskusi
	// _______________________________________
	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username,$password);
 ?>