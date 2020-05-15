<?php 
	$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

	for ($i=0; $i < count($bulan); $i++) {
		echo "Bulan ".$bulan[$i]."<br>";
	}


	echo "<br><br><br>";
	$angka = array(5,2,6,4,3,1);

	$hasil = array_pop($bulan);
	print_r($bulan);
	echo "<br>";




	echo "<br><br><br><br><br>";
	$hasil = array_push($angka, 10,9,8,7);
	print_r($angka);


	echo "<hr>";
	$hasil = rsort($angka);
	print_r($angka);

	echo "<hr>";
	$hasil = sort($angka);
	print_r($angka);

	echo "<hr>";
	$hasil = rsort($bulan);
	print_r($bulan);
 ?> 