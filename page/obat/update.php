<?php 
	if (isset($_GET['namaobat'])) {
		$nama = $_GET['namaobat'];
		$query = query("SELECT * FROM tblobat WHERE namaobat = '$nama'");
		$obat = mysqli_fetch_array($query);
	}
 ?>

 <form id="frm" method="POST">
 	<?php
 	echo '<label>Nama Obat : </label>';
	echo '<input type="text" name="nama" placeholder="Obat" value="'.$obat[1].'" required/>';
	echo '<label>Harga : Rp .</label>';
	echo '<input type="number" name="harga" placeholder="Harga" value="'.$obat[2].'" required="required"/>';
	echo '<label>Jenis</label>';
	echo '<select name="jenis" required>';
		if ($obat[3] == 'Generik') {
			echo '<option selected>Generik</option>';
			echo '<option>Bermerk</option>';
			echo '<option>Paten Generik</option>';
		}else if($obat[3] == 'Bermerk'){
			echo '<option>Generik</option>';
			echo '<option selected>Bermerk</option>';
			echo '<option>Paten Generik</option>';
		}else if($obat[3] == 'Paten Generik'){
			echo '<option>Generik</option>';
			echo '<option>Bermerk</option>';
			echo '<option selected>Paten Generik</option>';
		}
	echo '</select>';
	echo '<label>Stok : </label>';
	echo '<input type="number" name="stok" placeholder="Stok" value="'.$obat[5].'" required/>';
	echo '<label>Deskripsi</label>';
	echo '<textarea name="desc" placeholder="Deskripsi Obat"required>'.$obat[4].'</textarea> ';
	echo '<input type="submit" name="button" value="Perbarui"/>';
	?>
 </form>

 <?php 
 	if (isset($_POST['button'])) {
 		$nama = strip_tags($_POST['nama']);
 		$harga = strip_tags($_POST['harga']);
 		$jenis = strip_tags($_POST['jenis']);
 		$desc = strip_tags($_POST['desc']);
 		$stok = strip_tags($_POST['stok']);

 		$sql = "UPDATE tblobat SET namaobat = '$nama', harga = $harga, jenis = '$jenis', deskripsi = '$desc', stok = $stok WHERE namaobat = '$nama'";
 		query($sql);
 		header('location:index.php?menu=6&action=0');
 	}
  ?>