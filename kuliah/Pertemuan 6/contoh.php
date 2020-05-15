<?php
	$daftar_anak = array(
	    "Azis" => array("Ahmad", "Elsa", "Agus"),
	    "Hilman" => array("sulung" => "Rifki", "tengah" => "Rizal", "bungsu" => "Asep")
	    );
			echo "Daftar anak dari Pa Azis adalah: <br>";
			
			echo $daftar_anak['Azis'][0] . 
			", " . $daftar_anak['Azis'][1] . 
			", dan " . $daftar_anak['Azis'][2];
			
			echo "<br>Sedangkan anak dari Pa Hilman adalah: <br>";
			
			echo $daftar_anak['Hilman']['sulung'] . 
			", " . $daftar_anak['Hilman']['tengah'] . 
			", dan " . $daftar_anak['Hilman']['bungsu'];
?>