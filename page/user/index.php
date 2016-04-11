<?php 
	$query = query("SELECT * FROM tbluser");	
 ?>

 <div>
 	<a class ="btn-tambah" href="?menu=1&action=1">Tambah</a><br><br>
 	<table>
 		<tr>
 			<th>Email</th>
 			<th>Nama</th>
 			<th>Password</th>
 			<th>Level</th>
 			<th colspan="2">Pengaturan</th>
 		</tr>
 		<?php while ($row = mysqli_fetch_array($query)) { ?>
 		<tr>
 			<td><?= $row[1] ?></td>
 			<td><?= $row[2] ?></td>
 			<td><?= $row[3] ?></td>
 			<td>
 				<?php 
 					$level = $row[4];
 					switch ($level) {
 						case '1':
 							echo "ADMIN";
 							break;
 						case '2':
 							echo "STAFF";
 							break;
 						default:
 							# code...
 							break;
 					}
 				 ?>
 			</td>
 			<?php
 			echo '<td><a class="btn-hps" href="?menu=1&action=2&id='.$row[0].'">Hapus</a></td>';
 			echo '<td><a class="btn-edt" href="?menu=1&action=3&email='.$row[1].'">Edit</a></td>';
 			 } ?>
 		</tr>
 	</table>
 </div>