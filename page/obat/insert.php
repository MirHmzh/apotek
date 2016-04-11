
<form id="frm" action="" method="post">
	<label>Nama Obat : </label>
	<input type="text" name="nama" placeholder="Obat" required/>
	<label>Harga : Rp .</label>
	<input type="number" name="harga" placeholder="Harga" required="required"/>
	<label>Jenis</label>
	<select name="jenis" required>
		<option>Generik</option>
		<option>Bermerk</option>
		<option>Paten Generik</option>
	</select>
	<label>Stok : </label>
	<input type="number" name="stok" placeholder="Stok" required/>
	<label id="label-desc">Deskripsi</label>
	<textarea name="desc" placeholder="Deskripsi Obat" required></textarea> 	
	<input type="submit" name="button" value="Tambah"/>
</form>	 

<?php 
	if (isset($_POST['button'])) {
		$nama = strip_tags($_POST['nama']);
		$harga = strip_tags($_POST['harga']);
		$jenis = strip_tags($_POST['jenis']);
		$desc = strip_tags($_POST['desc']);
		$stok = strip_tags($_POST['stok']);

		$query = query("SELECT * FROM tblobat WHERE namaobat = '$nama'");
		if (mysqli_num_rows($query)) {
			script("Obat sudah tersedia");
		}else{
			$sql = "INSERT INTO tblobat (namaobat, harga, jenis, deskripsi, stok) VALUES ('$nama','$harga','$jenis','$desc','$stok')";
			query($sql);
			header('location:index.php?menu=6&action=0');
			script("Penambahan Obat Berhasil");
		}
	}
 ?>