<?php 
	function lingkaranBanyak($lingkaran) {
		for ($i = 0; $i <= $lingkaran; $i++) {
			for ($j = 1; $j <= $i; $j++) {
				echo "<div class = 'lingkaran'>$i</div>";
			}
			echo "<div class = 'clear'></div>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3c</title>
	<style type="text/css">
		.lingkaran {
			font-size: 20px;
			line-height: 50px;
			background-color: salmon;
			float: left;
			margin: 3px;
			width: 50px;
			height: 50px;
			border-radius: 50px;
			border: 2px solid black;
			text-align: center;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php lingkaranBanyak (5) ?>
</body>
</html>