<?php 
 	$pemain = array("Cristiano Ronaldo" => "Juventus",
		"Lionel Messi" => "Barcelona",
		"Luca Modric" => "Real Madrid",
		"Mohammad Salah" => "Liverpool",
		"Neymar Jr" => "Paris Saint Germain",
		"Sadio Mane" => "Liverpool",
		"Zlatan Ibrahimovic" => "Ac Milan"
 	);
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Latihan4c</title>
		</head>
		<body>
		<p><b>Daftar pemain bola terkenal baru</b></p>
		<table>
			<?php 
				foreach ($pemain as $pemainbaru => $club) {
					echo "<tr>
							<td><b>$pemainbaru</b></td>
							<td>:</td>
							<td>$club</td>
						</tr>";
				}
			?>
		</table>
	</body>
</html>	