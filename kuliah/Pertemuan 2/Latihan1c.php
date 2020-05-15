<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1c</title>
	<style type="text/css">
		.boxkecil {
			width: 15px;
			height: 15px;
			border: solid 1px;
			padding: 15px;
		}
	</style>
</head>
<body>
	<?php 
		$a = "A";
		$b = "B";
		$c = "C";
		
	 ?>
	<table class="boxkecil" cellspacing="5">
		<tr>
			<td><div class="boxkecil"><?=$a?></div></td>
			<td><div class="boxkecil"><?=$a?></div></td>
			<td><div class="boxkecil"><?=$a?></div></td>
		</tr>
		<tr>
			<td><div class="boxkecil"><?=$b?></div></td>
			<td><div class="boxkecil"><?=$b?></div></td>
		</tr>
		<tr>
			<td><div class="boxkecil"><?=$c?></div></td>
		</tr>
	</table>
</body>
</html>