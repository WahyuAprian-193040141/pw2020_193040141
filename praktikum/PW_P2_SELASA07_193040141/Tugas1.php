<!DOCTYPE html>
<html>
<head>
	<title>Tugas1</title>
	<style type="text/css">
		.kotak1 {
			width: 30px;
			height: 30px;
			background-color: lightblue;
			border: 2px solid black;
			margin: 2px;
			float: left;
		}
		.kotak2 {
			width: 30px;
			height: 30px;
			background-color: salmon;
			border: 2px solid black;
			float: left;
			margin: 2px;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
		for ($i=1; $i <= 6; $i++) {
			for ($j=1; $j <= 6; $j++) {
				if (($i+$j)% 2 ==1) {
					echo "<div class='kotak2'></div>";
				} else {
					echo "<div class='kotak1'></div>";
				}
					
			}
			echo "<div class='clear'></div>";
		}
	 ?>
</body>
</html>