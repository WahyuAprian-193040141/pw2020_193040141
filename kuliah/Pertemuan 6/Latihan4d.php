<?php 
	$komputer = array(array("Motherboard", "Papan Sirkuit komponen komputer", 500000, 200000),
	array("Processor", "Sebuah IC yang mengontrol seluruh jalannya sistem komputer", 300000, 200000),
	array("Hard Disk", "Media penyimpanan sekunder", 800000, 500000),
	array("PC Coller", "Mengurangi panas yang dihasilkan oleh komputer", 200000, 100000),
	array("VGA Card", "Mengolah data grafik yang akan ditampilkan oleh monitor", 900000, 800000),
	array("Optical Drive", "Membaca, maupun menulis data dari kepingan CD", 500000, 300000),
	array("Card Reader", "Untuk membaca data-data yang tersimpan didalam memory card", 10000, 5000),
	array("Modem", "Mengubah sinyal digital menjadi sinyal analog", 200000, 150000)
	);

 ?>

	<!DOCTYPE html>
		<html>
		<head>
			<title>Latihan4d</title>
		</head>
		<body>
			<p><b>Macam-macam perangkat keras komputer dan fungsinya</b></p>
			<table border="1" cellspacing="0" cellpadding="10">
				<tr>
					<td><b>No.</b></td>
					<td><b>Nama Perangkat</b></td>
					<td><b><center>Fungsi</center></b></td>
					<td><b>Harga Baru</b></td>
					<td><b>Harga Sekon</b></td>
				</tr>
				<tr>
					<td>1</td>
					<td><?php echo $komputer[0][0] ?></td>
					<td><?php echo $komputer[0][1] ?></td>
					<td><?php echo "Rp. ".$komputer[0][2] ?></td>
					<td><?php echo "Rp. ".$komputer[0][3] ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td><?php echo $komputer[1][0] ?></td>
					<td><?php echo $komputer[1][1] ?></td>
					<td><?php echo "Rp. ".$komputer[1][2] ?></td>
					<td><?php echo "Rp. ".$komputer[1][3] ?></td>
				</tr>
				<tr>
					<td>3</td>
					<td><?php echo $komputer[2][0] ?></td>
					<td><?php echo $komputer[2][1] ?></td>
					<td><?php echo "Rp. ".$komputer[2][2] ?></td>
					<td><?php echo "Rp. ".$komputer[2][3] ?></td>
				</tr>
				<tr>
					<td>4</td>
					<td><?php echo $komputer[3][0] ?></td>
					<td><?php echo $komputer[3][1] ?></td>
					<td><?php echo "Rp. ".$komputer[3][2] ?></td>
					<td><?php echo "Rp. ".$komputer[3][3] ?></td>
				</tr>
				<tr>
					<td>5</td>
					<td><?php echo $komputer[4][0] ?></td>
					<td><?php echo $komputer[4][1] ?></td>
					<td><?php echo "Rp. ".$komputer[4][2] ?></td>
					<td><?php echo "Rp. ".$komputer[4][3] ?></td>
				</tr>
				<tr>
					<td>6</td>
					<td><?php echo $komputer[5][0] ?></td>
					<td><?php echo $komputer[5][1] ?></td>
					<td><?php echo "Rp. ".$komputer[5][2] ?></td>
					<td><?php echo "Rp. ".$komputer[5][3] ?></td>
				</tr>
				<tr>
					<td>7</td>
					<td><?php echo $komputer[6][0] ?></td>
					<td><?php echo $komputer[6][1] ?></td>
					<td><?php echo "Rp. ".$komputer[6][2] ?></td>
					<td><?php echo "Rp. ".$komputer[6][3] ?></td>
				</tr>
				<tr>
					<td>8</td>
					<td><?php echo $komputer[7][0] ?></td>
					<td><?php echo $komputer[7][1] ?></td>
					<td><?php echo "Rp. ".$komputer[7][2] ?></td>
					<td><?php echo "Rp. ".$komputer[7][3] ?></td>
				</tr>
				<tr>
					<td>#</td>
					<td colspan="2"><center>Jumlah</center></td>
					<td>
						<?php 
							$total_harga = 0;
							foreach ($komputer as $item => $value) {
								$total_harga += $value[2];
							}
							echo "Rp. ".$total_harga;
						?>
					</td>
					<td>
						<?php 
							$total_harga = 0;
							foreach ($komputer as $item => $value) {
								$total_harga += $value[3];
							}
							echo "Rp. ".$total_harga;
						?>
					</td>
				</tr>
			</table>
		</body>
		</html>