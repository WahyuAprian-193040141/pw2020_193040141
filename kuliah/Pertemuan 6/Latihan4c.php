<?php 
	$komputer = array("Motherboard" => "Papan Sirkuit komponen komputer",
	"Processor" => "Sebuah IC yang mengontrol seluruh jalannya sistem komputer",
	"Hard Disk" => "Media penyimpanan sekunder",
	"PC Coller" => "Mengurangi panas yang dihasilkan oleh komputer",
	"VGA Card" => "Mengolah data grafik yang akan ditampilkan oleh monitor",
	"Optical Drive" => "Membaca, maupun menulis data dari kepingan CD",
	"Card Reader" => "Untuk membaca data-data yang tersimpan didalam memory card",
	"Modem" => "Mengubah sinyal digital menjadi sinyal analog"
	);

 ?>

	<!DOCTYPE html>
		<html>
		<head>
			<title>Latihan4c</title>
		</head>
		<body>
			<p><b>Macam-macam perangkat keras komputer dan fungsinya</b></p>
			<table>
				<?php 
					foreach ($komputer as $hardware => $desk) {
						echo "<tr><td><b>$hardware</b></td><td>:</td><td>$desk</td></tr>";
					}
				 ?>
			</table>
		</body>
		</html>	