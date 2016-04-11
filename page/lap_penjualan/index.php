<?php 
	$query = query("SELECT * FROM tbljual");

 ?>

 <table>
 	<tr>
 		<th>Pembeli</th>
 		<th>Tanggal</th>
 		<th>Faktur</th>
 		<th>Obat</th>
 		<th>Total</th>
 	</tr>
 	<?php 
 		while ($row = mysqli_fetch_array($query)) {
 			echo '<tr>';
		 		echo '<td>'.$row[1].'</td>';
		 		echo '<td>'.$row[2].'</td>';
		 		echo '<td>'.$row[3].'</td>';
		 		echo '<td>'.$row[4].'</td>';
		 		echo '<td>'.$row[5].'</td>';
		 	echo '</tr>';
 		}
 	 ?>
 	
 </table>