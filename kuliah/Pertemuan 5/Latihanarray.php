<?php 
	// array satu dimensi
	$arah = array("Kanan","Kiri");

	$arah[2] = "atas";

	$arah[] = "bawah";

	$arah[1] = "Kanan"; // menukar posisi value dari 0 ke posisi 1
	$arah[0] = "Kiri"; // menukar posisi value dari 1 ke posisi 0

	echo "Panjang Array = ".count($arah); // menghitung jumlah array
	echo "<br>";
	print_r($arah);
	echo "<br>";
	echo "__________________________________________________________________________________________________________";
	echo "<br><br><br><br>";




	for ($i=0; $i < count($arah); $i++) {
		echo "Arah = ".$arah[$i];
		echo "<br>";
	}
	echo "<br><br><br><br>";




	foreach ($arah as $namaarah) {
		echo $namaarah;
	}
	echo "<br><br><br><br>";




	// array multidimensi
	$mahasiswa = array();
	$mahasiswa[0][0] = "193040141";
	$mahasiswa[0][1] = "Wahyu Aprian";
	$mahasiswa[1][0] = "Karawang";
	$mahasiswa[1][1] = "085871xxxxxx";

	print_r($mahasiswa); // penggunaan print_r
	echo "<br><br>";
	echo "__________________________________________________________________________________________________________<br>";
	print("<pre>".print_r($mahasiswa,true)."</pre>"); // penggunaan "<pre>....</pre>" menghasilkan beberapa baris terurut
	echo "__________________________________________________________________________________________________________<br>";




	echo "<br><br>";
	echo "__________________________________________________________________________________________________________<br>";
	var_dump($mahasiswa); // penggunaan var_dump menghasilkan hasil yang lengkap beserta jumlah stringnya
	echo "__________________________________________________________________________________________________________<br>";




	echo "<br><br><br><br>";
	echo "Nama : ".$mahasiswa[0][1];
	echo "<br>";
	echo "Kota : ".$mahasiswa[1][0];
	echo "<br><br><br><br>";




	for ($i=0; $i < count($mahasiswa); $i++) {
		for ($j=0; $j < count($mahasiswa); $j++) {
			echo $mahasiswa[$i][$j];
			echo "<br>";
		}
	}

 ?>