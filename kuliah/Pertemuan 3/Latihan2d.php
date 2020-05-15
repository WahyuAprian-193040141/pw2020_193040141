<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 2d</title>
	<style type="text/css">
		.kotak {
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border : 1px solid;
			color: black;
			margin: 2px;
			float: left;
		}
		.kotak1 {
			background-color: #57e65a;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border : 1px solid;
			color: black;
			margin: 2px;
			float: left;
		}
		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #57e65a;
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
	if (($a+1) == 3) {
		echo "<div class='kotak'>#".$a."</div>";
		echo "<div class='kotak1'>".$a."</div>";
	} else for ($b=1; $b <= 1; $b++) {
			echo "<div class='kotak'>#".$a."</div>";
			echo "<div class='kotak1'><div class='ganjil'>".$a."</div></div>";
		}
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=2) {
		for ($b=1; $b <= 2; $b++) {
			echo "<div class='kotak'>#".$a."</div>";
			echo "<div class='kotak1'>".$b."</div>";
		}
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=3) {
	if (($a+1) == 3) {
		echo "<div class='kotak'>#".$a."</div>";
		echo "<div class='kotak1'>".$a."</div>";
	} else for ($b=1; $b <= 3; $b++) {
			echo "<div class='kotak'>#".$a."</div>";
			echo "<div class='kotak1'><div class='ganjil'>".$b."</div></div>";
		}
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=4) {
		for ($b=1; $b <= 4; $b++) {
			echo "<div class='kotak'>#".$a."</div>";
			echo "<div class='kotak1'>".$b."</div>";
		}
		echo "<div class='clear'></div>";
		$a++;
	}
	while ($a <=5) {
	if (($a+1) == 3) {
		echo "<div class='kotak'>#".$a."</div>";
		echo "<div class='kotak1'>".$a."</div>";
	} else for ($b=1; $b <= 5; $b++) {
			echo "<div class='kotak'>#".$a."</div>";
			echo "<div class='kotak1'><div class='ganjil'>".$b."</div></div>";
		}
		echo "<div class='clear'></div>";
		$a++;
	}
	 ?>	
</body>
</html>