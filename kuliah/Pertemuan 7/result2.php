<?php 
	function cekjumlah($number1, $number2) {
		$hasil = $number1 + $number2;
		return $hasil;
	}

	// ekseskusi
	// _______________________________________
	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	
	echo "Hasil penjumlahan : ".cekjumlah($number1,$number2);
 ?>