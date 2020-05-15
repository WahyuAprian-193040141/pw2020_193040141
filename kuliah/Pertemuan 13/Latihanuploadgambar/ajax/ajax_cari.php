<?php 
	require '../php/functions.php';
	$elektronik = cari($_GET['keyword']);
 ?>

<table border="1" cellspacing="0" cellpadding="10">
		<tr class="atas">
			<td class='tengah'><b>Nama Barang</b></td>
			<td class='tengah'>Aksi</td>
		</tr>
		<?php if (empty($elektronik)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan</h1>
				</td>
			</tr>
		<?php else : ?>
			<?php foreach ($elektronik as $isi) : ?>
				<tr>
					<td><?= $isi["nama"] ?></td>
					<td><a href="php/detail.php?id=<?= $isi['id']; ?>">lihat detail</a></td>
				</tr>
			<?php endforeach; ?>
		<?php endif; ?>
		<tr>
			<td colspan="2" class="tengah">
				<a href="php/login.php"><button type="" class="opsi">Masuk ke halaman Admin</button></a>
			</td>
		</tr>
	</table>