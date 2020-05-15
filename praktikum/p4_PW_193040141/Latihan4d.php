<?php 
	$pemain = array(
				array( 
					"nama" => "Cristiano Ronaldo", "club" => "Juventus", "main" => "100", "gol" => "76", "assist" => "30"),
				array( 
					"nama" => "Lionel Messi", "club" => "Barcelona", "main" => "120", "gol" => "80", "assist" => "12"),
				array( 
					"nama" => "Luca Modric", "club" => "Real Madrid", "main" => "87", "gol" => "12", "assist" => "48"),
				array( 
					"nama" => "Mohammad Salah", "club" => "Liverpool", "main" => "90", "gol" => "103", "assist" => "8"),
				array( 
					"nama" => "Neymar Jr", "club" => "Paris Saint Germain", "main" => "109", "gol" => "56", "assist" => "15"),
				array( 
					"nama" => "Sadio Mane", "club" => "Liverpool", "main" => "63", "gol" => "30", "assist" => "70"),
				array( 
					"nama" => "Zlatan Ibrahimovic", "club" => "Ac Milan", "main" => "100", "gol" => "10", "assist" => "12")
	);
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Latihan 4d</title>
	</head>
	<body>
		<table border="1" cellspacing="0" cellpadding="6">
			<tr>
				<td><b>NO</b></td>
				<td><b>NAMA</b></td>
				<td><b>CLUB</b></td>
				<td><b>MAIN</b></td>
				<td><b>GOL</b></td>
				<td><b>ASSIST</b></td>
			</tr>
			<?php 

				$i = 1;
				foreach ($pemain as $abc) {
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$abc["nama"]."</td>";
						echo "<td>".$abc["club"]."</td>";
						echo "<td>".$abc["main"]."</td>";
						echo "<td>".$abc["gol"]."</td>";
						echo "<td>".$abc["assist"]."</td>";
					echo "</tr>";
					$i++;
				} 
			?>
			<tr>
				<td><b>#</b></td>
				<td colspan="2"><center><b>Jumlah</b></center></td>
				<td>
					<?php 
						$jumlah = 0;
						foreach ($pemain as $value) {
							$jumlah += $value["main"];
						}
						echo $jumlah;
					?>
				</td>
				<td>
					<?php
						$jumlah = 0;
						foreach ($pemain as $value) {
							$jumlah += $value["gol"];
						}
						echo $jumlah;
					?>
				</td>
				<td>
					<?php
						$jumlah = 0;
						foreach ($pemain as $value) {
							$jumlah += $value["assist"];
						}
						echo $jumlah;
					?>
				</td>
			</tr>
		</table>
	</body>
</html>