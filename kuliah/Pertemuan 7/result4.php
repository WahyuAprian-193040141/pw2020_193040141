<?php 
	function ceklogin($username, $password) {
		if ($username == "admin" && $password == "12345") {
			echo "Selamat Datang Admin";
		} else {
			echo "username / password salah";
		}
	}

	$username = $_GET['username'];
	$password = $_GET['password'];
	ceklogin($username,$password);
 ?>