<?php 
	$query = query("SELECT * FROM tblobat");
 ?>
<form id="frm" method="POST">
	<label>Nama Pembeli : </label>
	<input type="text" name="buyer" required="required"><br>
	<?php
	echo '<label>Obat</label>';
	echo '<select id="obat" name="obat" required="required">';
	while ($row = mysqli_fetch_array($query)) {
		echo '<option>'.$row[1].'</option>';
	}
	echo '</select>';
	echo "<br><label>Jumlah</label>";
	echo '<input type="number" name="jumlah" min=0 max=10 required="required"><br>';
	?>
		<input type="submit" name="button" value="Submit">
</form>
<script>
	$(document).ready(function(){
		$('#obat').select2({});
	});
</script>

<?php 
	if (isset($_POST['button'])) {	
		$date   = date('Y-m-d-h');
		$faktur = date('Ymdhi');
		
		$buyer  = $_POST['buyer'];
		$obat   = $_POST['obat'];
		
		$jumlah = $_POST['jumlah'];
				
		$sqlin  =("INSERT INTO tblterjual (pembeli, tanggal, faktur, namaobat, total) 
			   VALUES ('$buyer', '$date', '$faktur', '$obat', '$jumlah')");
		$sqlin2 =("INSERT INTO tbljual (pembeli, namaobat, total) VALUES ('$buyer','$obat','$jumlah')");
		query($sqlin);
		query($sqlin2);
		$querybeli = query("SELECT * FROM tbljual");
		echo '<br>';
		echo '<table>';
			echo '<tr>';
				echo '<td>Nama Pembeli</td>';
				echo '<td>Obat</td>';
				echo '<td>Jumlah</td>';
				echo "<td>Hapus </td>";
			echo '</tr>';
				while ($row = mysqli_fetch_array($querybeli)) {
					echo '<tr>';
						echo '<td>'.$row[1].'</td>';
						echo '<td>'.$row[2].'</td>';
						echo '<td>'.$row[3].'</td>';
						echo '<td><a href="?menu=3&rdr=0&act=1&id='.$buyer.'&value='.$obat.'">Hapus</a></td>';
					echo '</tr>';
				}
		echo '</table>';	
		echo '<a href="?menu=3&rdr=1&act=0&buyer='.$buyer.'" class="btn-tambah">Checkout</a>';
	}
	
 ?>
 	

