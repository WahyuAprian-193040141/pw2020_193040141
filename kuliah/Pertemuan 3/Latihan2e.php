<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2e</title>
	<style type="text/css">
		.kotakhitam {
			background-color: black;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border : 1px solid;
			color: black;
			margin: 2px;
			float: left;
		}
		.kotakputih {
			background-color: white;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border : 1px solid;
			color: black;
			margin: 2px;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
	$a = 1;
	$b = 1;

	while ($a <=1) {
		for ($b=1; $b <= 2; $b++) {
			echo "<div class='kotakhitam'></div>";
			echo "<div class='kotakputih'></div>";
		}
		echo "<div class='kotakhitam'></div>";
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=2) {
		for ($b=1; $b <= 2; $b++) {
			echo "<div class='kotakputih'></div>";
			echo "<div class='kotakhitam'></div>";
		}
		echo "<div class='kotakputih'></div>";
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=3) {
		for ($b=1; $b <= 2; $b++) {
			echo "<div class='kotakhitam'></div>";
			echo "<div class='kotakputih'></div>";
		}
		echo "<div class='kotakhitam'></div>";
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=4) {
		for ($b=1; $b <= 2; $b++) {
			echo "<div class='kotakputih'></div>";
			echo "<div class='kotakhitam'></div>";
		}
		echo "<div class='kotakputih'></div>";
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=5) {
		for ($b=1; $b <= 2; $b++) {
			echo "<div class='kotakhitam'></div>";
			echo "<div class='kotakputih'></div>";
		}
		echo "<div class='kotakhitam'></div>";
		echo "<div class='clear'></div>";
		$a++;
	}
	 ?>
</body>
</html>