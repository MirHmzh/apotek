<?php 
	query("DELETE FROM tbljual");
	$buyer = $_GET['buyer'];
	$query = query("SELECT * FROM tblterjual WHERE pembeli = '$buyer'");
 ?>
 <table>
 	<tr>
 		<td>Pembeli</td>
 		<td>Tanggal</td>
 		<td>Faktur</td>
 		<td>Obat</td>
 		<td>Jumlah</td>
 	</tr>
<?php while ($row = mysqli_fetch_array($query)) {
	echo '<tr>';
		echo '<td>'.$row[1].'</td>';
		echo '<td>'.$row[2].'</td>';
		echo '<td>'.$row[3].'</td>';
		echo '<td>'.$row[4].'</td>';
		echo '<td>'.$row[5].'</td>';
	echo '</tr>';
} ?>
 </table>