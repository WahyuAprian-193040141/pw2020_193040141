<?php
require '../php/functions.php';
$elektronik = cari($_GET['keyword']);
?>

<div class="row">
	<div class="col s12 m12">

		<?php if (empty($elektronik)) : ?>
			<div class="row">
				<div class="col s12 m12">
					<div class="card grey lighten-5 z-depth-5">
						<div class="card-content white-text">
							<h1>Data tidak ditemukan</h1>
						</div>
						<div class="card-action">
							<a href="admin.php">Back</a>
						</div>
					</div>
				</div>
			</div>
		<?php else : ?>
			<?php foreach ($elektronik as $isi) : ?>
				<div class="card-panel grey lighten-5 z-depth-5">
					<div class="row">
						<div class="col s12 m4">
							<img src="../assets/img/<?= $isi['foto']; ?>" class="responsive-img">
						</div>
						<div class="col s12 m8">
							<table>
								<thead>
									<tr>
										<th>Jenis Barang</th>
										<th>Nama Barang</th>
										<th>Deskripsi Produk</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?= $isi["jenis"] ?></td>
										<td><?= $isi["nama"] ?></td>
										<td><?= $isi["deskripsi"] ?></td>
										<td>Rp.<?= $isi["hargabaru"] ?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="center">
						<a href="ubah.php?id=<?= $isi['id']; ?>"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">change
								<i class="material-icons left">edit</i>
							</button></a>
						<a href="hapus.php?id=<?= $isi['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">Delete
								<i class="material-icons right">delete</i>
							</button></a>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>



<!-- <br><br><br>
<div class="row">
	<div class="col s12 m12">
		<?php if (empty($elektronik)) : ?>
			<div class="row">
				<div class="col s12 m6">
					<div class="card blue-grey darken-1 z-depth-5">
						<div class="card-content white-text">
							<span class="card-title">Data tidak ditemukan</span>
						</div>
						<div class="card-action">
							<a href="admin.php" class="center">Refresh</a>
						</div>
					</div>
				</div>
			</div>
		<?php else : ?>
			<?php foreach ($elektronik as $isi) : ?>
				<div class="card horizontal z-depth-5">
					<div class="card-image">
						<br>
						<img height="250px" src="../assets/img/<?= $isi['foto']; ?>">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<table>
								<thead>
									<tr>
										<th>Jenis Barang</th>
										<th>Nama Barang</th>
										<th>Deskripsi Produk</th>
										<th>Harga</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td><?= $isi['jenis']; ?></td>
										<td><?= $isi['nama']; ?></td>
										<td><?= $isi['deskripsi']; ?></td>
										<td><?= $isi['hargabaru']; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="card-action center">
							<a href="ubah.php?id=<?= $isi['id']; ?>"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">change
									<i class="material-icons left">edit</i>
								</button></a>
							<a href="hapus.php?id=<?= $isi['id']; ?>" onclick="return confirm('Hapus Data??')"><button class="btn orange-effect deep-orange darken-4" type="submit" name="action">Delete
									<i class="material-icons right">delete</i>
								</button></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
<br><br><br> -->