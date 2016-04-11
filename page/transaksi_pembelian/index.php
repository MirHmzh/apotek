<form id="frm" method="POST">
	<label>Faktur</label>
	<input type="text" name="faktur">
	<label>Nama Obat</label>
	<input type="text" name="nama">
	<label>Harga</label>
	<input type="number" name="harga">
	<label>Jenis</label>
	<select name="jenis">
		<option>Generik</option>
		<option>Bermerk</option>
		<option>Paten Generik</option>
	</select>
	<label>Jumlah</label>
	<input type="number" name="jumlah">
	<label>Deskripsi</label>
	<textarea name="desc"></textarea>
	<input type="submit" name="button">
</form>

<?php 
	if (isset($_POST['button'])) {
		$faktur = $_POST['faktur'];
		$staff = $_SESSION['nama'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$jenis = $_POST['jenis'];
		$desc = $_POST['desc'];
		$jumlah = $_POST['jumlah'];
		$tanggal = date("Y-m-d-h");
		$hargajual = ($harga*10/100)+$harga;

		query("INSERT INTO tblbeli (faktur, staff, namaobat, harga, jenis, deskripsi, jumlah, tanggal)
		VALUES ('$faktur', '$staff', '$nama', '$harga', '$jenis', '$desc', $jumlah, '$tanggal')");
		query("INSERT INTO tblobat (namaobat, harga, jenis, deskripsi, stok) VALUES ('$nama', '$hargajual', '$jenis', '$desc', '$jumlah')");
	}
 ?>