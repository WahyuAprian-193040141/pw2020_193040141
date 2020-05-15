<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3b</title>
	<style type="text/css">
		.kotak {
			box-shadow: 1px 1px 1px rgba(0,0,0,1);
			border: 2px solid black;
			padding-left: 10px;
		}
	</style>
</head>
<body>
	<?php 
		$jawabanIsset = "Isset adalah = isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false. <br><br>";
		$jawabanEmpty = "Empty adalah = empty(), digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";

		$GLOBALS ['isset'] = $jawabanIsset;
		$GLOBALS ['empty'] = $jawabanEmpty;

		function soal($style) {
			echo "<div class='$style'>
			<p>$GLOBALS[isset]</p>
			<p>$GLOBALS[empty]</p>
			</div>";
		}
	 ?>
	 <?php 
	 echo soal("kotak");
	  ?>
</body>
</html>