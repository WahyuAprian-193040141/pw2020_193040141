<?php 

$peralatanElektronik = [

		"elektronik1" =>
			["foto" => "<img src = 'a.jpeg'>", "nama" => "Televisi", "fungsi" => "media penyebaran dan pertukaran informasi, media hiburan dan lain sebagainya.", "merk" => "Lg", "harga" => 1000000],

		"elektronik2" =>
			["foto" => "<img src = 'b.jpg'>", "nama" => "Speaker", "fungsi" => "media yang digunakan untuk membuat volume suara lebih besar.", "merk" => "Samsung", "harga" => 500000],

		"elektronik3" =>
			["foto" => "<img src = 'c.jpg'>", "nama" => "Kulkas", "fungsi" => "media yang digunakan untuk mendinginkan dan mengawetkan makanan, dan minuman.", "merk" => "Polytron", "harga" => 2000000],

		"elektronik4" =>
			["foto" => "<img src = 'd.jpg'>", "nama" => "Ac", "fungsi" => "media yang digunakan untuk mengatur suhu ruangan.", "merk" => "Panasonic", "harga" => 1000000],

		"elektronik5" =>
			["foto" => "<img src = 'e.jpg'>", "nama" => "Rice Cooker", "fungsi" => "media yang digunakan untuk menanak nasi.", "merk" => "Magickom", "harga" => 700000],

		"elektronik6" =>
			["foto" => "<img src = 'f.jpg'>", "nama" => "Blender", "fungsi" => "media yang digunakan untuk membuat jus, atau menghaluskan bahan makanan.", "merk" => "Polytron", "harga" => 700000],

		"elektronik7" =>
			["foto" => "<img src = 'g.jpg'>", "nama" => "Mesin Cuci", "fungsi" => "media yang digunakan untuk membersihkan pakaian yang kotor.", "merk" => "Polytron", "harga" => 1500000],

		"elektronik8" =>
			["foto" => "<img src = 'h.jpg'>", "nama" => "Setrika", "fungsi" => "media yang digunakan untuk menghaluskan pakaian yang kusut.", "merk" => "Polytron", "harga" => 900000],

		"elektronik9" =>
			["foto" => "<img src = 'i.jpg'>", "nama" => "Vacum Cleaner", "fungsi" => "media yang digunakan untuk membersihkan rumah dari debu dan kotoran.", "merk" => "Polytron", "harga" => 1500000],

		"elektronik10" =>
			["foto" => "<img src = 'j.jpg'>", "nama" => "Laptop", "fungsi" => "media yang digunakan untuk mencari informasi, hiburan, dan berproduksi.", "merk" => "Lenovo", "harga" => 7000000],

			];


 ?>

 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Tugas2</title>
	
	<style>

		img{
			width: 140px;
			height: 100px;
		}

		h2{
			text-align: center;
		}

		table{
			text-align: center;
			margin: auto;
		}

		th{
			background-color: lightgray;
		}

	</style>

 </head>
 <body>

 	<h2>Data Perangkat Elektronik</h2>
 	
	<table border="1" cellspacing="0" cellpadding="10">

			<tr>
				
				<th>
					Foto
				</th>
				<th>
					Nama Perangkat
				</th>
				<th>
					Fungsi
				</th>
				<th>
					Merk
				</th>
				<th>
					Harga
				</th>

			</tr>
			
			<?php 

				foreach ($peralatanElektronik as $isi) {
					
					echo "<tr>";

						echo "<td>".$isi['foto']."</td>";
						echo "<td>".$isi['nama']."</td>";
						echo "<td>".$isi['fungsi']."</td>";
						echo "<td>".$isi['merk']."</td>";
						echo "<td>Rp.".$isi['harga']."</td>";

					echo "</tr>";

				} 

			?>

		</table>

 </body>
 </html>