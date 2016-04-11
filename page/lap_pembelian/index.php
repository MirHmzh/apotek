<?php 
	$query = query("SELECT * FROM tblbeli");
 ?>

 <table>
 	<tr>
 		<th>Faktur</th>
 		<th>Nama Staff</th>
 		<th>Nama Obat</th>
 		<th>Harga</th>
 		<th>Jenis</th>
 		<th>Jumlah</th>
 		<th>Total</th>
 	</tr>

 		<?php 
 			$total = mysqli_fetch_array($query);
	 		
	 			while ($row = mysqli_fetch_array($query)) {
	 				$totalharga = $row[4]*$row[7];
	 				echo '<tr>';
	 		 			echo '<td>'.$row[1].'</td>';
			 		 	echo '<td>'.$row[2].'</td>';
			 		 	echo '<td>'.$row[3].'</td>';
			 		 	echo '<td>'.$row[4].'</td>';
			 		 	echo '<td>'.$row[5].'</td>';
			 		 	echo '<td>'.$row[7].'</td>';
			 		 	echo '<td>'.$totalharga.'</td>';
	 				echo '</tr>';
	 			}
 		 ?>

 		 
 </table>