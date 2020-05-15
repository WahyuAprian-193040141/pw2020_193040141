<?php 
	$papatong = "Beurang maju ka lohor <br>
				Papatong nu koneng euntreup na regang <br>
				Ngageter jangjangna keur ngagupayan <br>
				Pancen keur wasiatan <br>
				<br>
				Sore mengok ka Ashar <br>
				Papatong nu koneng hiber teu luhur <br>
				ngalayang ngawahan arek pamitan <br>
				poma tong ka jongjonan <br>
				<br>
				Papatong nu koneng teu tembong deui <br>
				Leungit indit teu pamit <br>
				Papatong nu koneng teu tembong deui <br>
				Tilem bewara baturna <br>
				<br>
				Prak reureuh tina ka riweuh <br>
				Prak pasrah kanu Kawasa <br>
				Prak reureuh tina ka riweuh <br>
				Prak pasrah kanu Kawasa";

	$papatong = str_replace("a", "o", $papatong);
	$papatong = str_replace("i", "o", $papatong);
	$papatong = str_replace("u", "o", $papatong);
	$papatong = str_replace("e", "o", $papatong);

	echo "$papatong";
 ?>