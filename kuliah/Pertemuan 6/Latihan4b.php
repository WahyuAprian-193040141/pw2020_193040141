<?php 
	$komputer = array("Motherboard",
	"Processor",
	"Hard Disk",
	"PC Coller",
	"VGA Card",
	"SSD");

 ?>

	<!DOCTYPE html>
		<html>
		<head>
			<title>Latihan4b</title>
		</head>
		<body>
		<p><b>Macam-macam perangkat keras komputer</b></p>
		<ol>
			<?php 
				foreach ($komputer as $nama) {
					echo "<li>$nama</li>";
				}
			 ?>
		</ol>
		
			<?php 
				$terakhir = array_push($komputer, "Card Reader", "Modem");
			 ?>
		
		<p><b>Macam-macam perangkat keras komputer baru</b></p>
		<ol>
			<?php 
				$terakhir = sort($komputer);
				foreach ($komputer as $hasil) {
					echo "<li>$hasil</li>";
				}
			 ?>
		</ol>
		</body>
		</html>	