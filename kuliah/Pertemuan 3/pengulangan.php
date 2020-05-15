<?php 
	$i = 1;

	for ($i=1; $i<10; $i++) {
		echo "Nilai ".$i."<br>";
	}
	echo "Nilai akhir i = ".$i;


	echo "<hr>";
	$i = 1;
	while ($i <= 10) {
		echo "Nilai ".$i."<br>";
		$i++;
	}
	echo "Nilai akhir i = ".$i;


	echo "<hr>";
	do {
		echo "Nilai ".$i."<br>";
		$i++;
	} while ($i<=10);

	echo "Nilai akhir i = ".$i;
 ?>