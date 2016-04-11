<?php 
	$query = query("SELECT * FROM tblobat");
 ?>

<div class="div-cari">
	<input type="text" name="cari">
	<input type="submit" name="caribtn" value="Cari">
</div>
 <div>
 	<a class ="btn-tambah" id="obat" href="?menu=6&action=1">Tambah</a><br><br>
 	<table border="1">
 		<tr>
 			<th>Nama Obat</th>
 			<th>Harga</th>
 			<th>Jenis Obat</th>
 			<th style="width:50%;">Deskripsi</th>
 			<th>Stok</th>
 			<th colspan="2">Pengaturan</th>
 		</tr>
 		<?php while ($row = mysqli_fetch_array($query)) { ?>
 		<tr>
 			<td><?= $row[1]; ?></td>
 			<td><?php echo "Rp ".number_format($row[2],0,",",","); ?></td>
 			<td><?= $row[3]; ?></td>
 			<td><?= $row[4]; ?></td>
 			<td><?= $row[5]; ?></td>
 			<?php
 			echo '<td><a class="btn-hps" href="?menu=6&action=2&id='.$row[0].'">Hapus Obat</a></td>';
 			echo '<td><a class="btn-edt"href="?menu=6&action=3&namaobat='.$row[1].'">Perbarui Obat</a></td>';
 			?>
 		</tr>
 		<?php } ?>
 	</table>