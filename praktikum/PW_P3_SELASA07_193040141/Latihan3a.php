<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3a</title>
	<style type="text/css">
		.tulisan {
			color: #8c782d;
			font-family: arial;
			font-size: 28px;
			font-style: italic;
			font-weight: bold;
		}
		.border{
			box-shadow: 1px 1px 1px rgba(0,0,0,1);
			border: 2px solid black;
			border-radius: 10px;
			width: 550px;
			height: 50px;
			line-height: 0px;
		}
	</style>
</head>
<body>
	<?php 
		function gantiStyle($tulisan, $style1, $style2) {
			echo "<div class='$style1'>
			<p class='$style2'>$tulisan</p>
			</div>";
		}
	 ?>
	 <?php 
	 	echo gantiStyle("Selamat datang di praktikum PW 2020","border","tulisan");
	  ?>
</body>
</html>