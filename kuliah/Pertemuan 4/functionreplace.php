<?php 
	$tulisan = "Balonku ada lima, rupa-rupa warnanya, hijau kuning kelabu, merah muda dan biru, meletus balon hijau Dorrr....., hatiku sangat kacau, balonku tinggal empat, kupegang erat-erat";

	$tulisan = str_replace("a", "o", $tulisan);
	$tulisan = str_replace("i", "o", $tulisan);
	$tulisan = str_replace("u", "o", $tulisan);
	$tulisan = str_replace("e", "o", $tulisan);

	echo "$tulisan";
 ?>