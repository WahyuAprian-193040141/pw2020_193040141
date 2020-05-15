<?php 
	function determinan($a, $b, $c, $d) {
		$hasil = (($a * $d) - ($b * $c));
		echo "<table style = 
			'border-left : 2px solid black';
			border-right : 2px solid black;
			cellspacing = '5';
			cellpadding = '5';>
		<tr>
			<td>$a</td>
			<td>$b</td>
		</tr>
		<tr>
			<td>$c</td>
			<td>$d</td>
		</tr>
		</table>";
		echo "<b>Determinan matriks tersebut adalah $hasil";
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Latihan 3D</title>
	</head>
	<body>
		<?php determinan(1,2,3,4) ?>
	</body>
</html>