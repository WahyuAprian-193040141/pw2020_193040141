<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1c</title>
	<style type="text/css">
		.bulat {
			width: 60px;
			height: 60px;
			line-height: 60px;
			border: 1px solid black;
			background-color: salmon;
			border-radius: 50%;
			margin: 2px;
			text-align: center;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php $a="A"; $b="B"; $c="C"; ?>

	<div class="bulat"><?php echo $a; ?></div>
	<div class="clear"></div>
	<div class="bulat"><?php  echo$b; ?></div>
	<div class="bulat"><?php  echo$b; ?></div>
	<div class="clear"></div>
	<div class="bulat"><?php  echo$c; ?></div>
	<div class="bulat"><?php  echo$c; ?></div>
	<div class="bulat"><?php echo $c; ?></div>
	<div class="clear"></div>
</body>
</html>