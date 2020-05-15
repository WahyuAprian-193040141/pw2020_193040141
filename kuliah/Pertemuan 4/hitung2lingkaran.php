<?php 
	$jari1 = 25;
	$jari2 = 30;
	$phi = 3.14;

	$luas1 = hitungluaslingkaran($phi,$jari1);
	$luas2 = hitungluaslingkaran($phi,$jari2);

	echo "Total Luas 1 Lingkaran = ".hitungluaslingkaran($phi,$jari1)."<br>";
	echo "Total 2 Lingkaran = ".hitungluas2lingakaran($luas1,$luas2);

	function hitungluaslingkaran($jari,$phi) {
		$total = $phi*$jari*$jari;
		return $total;
	}

	function hitungluas2lingakaran($luas1,$luas2) {
		$total = $luas1+$luas2;
		return $total;
	}
 ?>