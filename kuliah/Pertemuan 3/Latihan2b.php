<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="15" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>

	<?php 
	$i = 1;
	while ($i <= 5) {
		echo "<tr>";
		if ($i == 2) {
			echo "<td></td>"."<td></td>"."<td></td>"."<td></td>"."<td></td>";
		} else if ($i == 4) {
			echo "<td></td>"."<td></td>"."<td></td>"."<td></td>"."<td></td>";
		} else for ($j=1; $j<=5; $j++) {
				echo "<td>";
				echo "Kolom ".$i.", "."Kolom ".$j;
				echo "</td>";
		}
		$i++;
	}
	 ?>
	</table>
</body>
</html>