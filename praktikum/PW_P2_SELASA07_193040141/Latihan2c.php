<!DOCTYPE html>
<html>
<head>
	<title>Pengulangan bersarang</title>
	<style type="text/css">
		.bulat {
			width: 50px;
			height: 50px;
			border-radius: 50%;
			background-color: salmon;
			border: 2px solid black;
			color: black;
			float: left;
			line-height: 50px;
			margin: 2px;
			text-align: center;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php
		for ($i=1; $i <=3; $i++) { 
		 	for ($j = 1; $j <= $i; $j++) {
				echo "<div class='bulat'>$i</div>";
			}
			echo "<div class='clear'></div>";
		} 
	 ?>
</body>
</html>