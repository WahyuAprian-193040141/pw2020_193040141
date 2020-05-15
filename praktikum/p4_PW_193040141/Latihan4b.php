<?php 
	$pemain = array("Mohammad Salah",
	"Cristiano Ronaldo",
	"Lionel Messi",
	"Zlatan Ibrahimovic",
	"Neymar Jr");

 ?>

	<!DOCTYPE html>
		<html>
		<head>
			<title>Latihan4b</title>
		</head>
		<body>
		<p><b>Daftar pemain bola terkenal</b></p>
		<ol>
			<?php 
				foreach ($pemain as $nama) {
					echo "<li>$nama</li>";
				}
			 ?>
		</ol>
		
			<?php 
				$terakhir = array_push($pemain, "Luca Modric", "Sadio Mane");
			 ?>
		
		<p><b>Daftar pemain bola terkenal baru</b></p>
		<ol>
			<?php 
				$terakhir = sort($pemain);
				foreach ($pemain as $pemainbaru) {
					echo "<li>$pemainbaru</li>";
				}
			 ?>
		</ol>
		</body>
		</html>	