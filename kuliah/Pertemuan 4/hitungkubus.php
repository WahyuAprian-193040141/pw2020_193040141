<?php 
	// kubus pertama
	$sisi1 = 9;

	// kubus kedua
	$sisi2 = 4;

	// luas ke 1
	$luas_kb1 = hitungluaskubus($sisi1);
	// $luas_kb1 = $sisi1*$sisi1*6;

	// luas ke 2
	$luas_kb2 = hitungluaskubus($sisi2);
	// $luas_kb2 = $sisi2*$sisi2*6;

	// fungsi tambah luas 2 kubus
	// $total_luas = $luas_kb1+$luas_kb2;
	// echo "Total Luas = ".$total_luas;

	function hitungluaskubus($sisi){
		$luas = $sisi*$sisi*6;
		return $luas;
	}

	echo "Total Luas = ".tanbahluas2kubus($luas_kb1,$luas_kb2);

	function tanbahluas2kubus($luas1, $luas2)
	{
		$total_luas = $luas1+$luas2;
		return $total_luas;
	}

 ?>