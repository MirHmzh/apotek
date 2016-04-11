<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id']				;
		query("DELETE FROM tblobat WHERE id_obat = '$id'");
		script("Berhasil Dihapus!");
		header('location:index.php?menu=6&action=0');
	}

 ?>

 