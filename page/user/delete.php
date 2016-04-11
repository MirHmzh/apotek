<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		query("DELETE FROM tbluser WHERE id_user = '$id' ");
		script("Berhasil Dihapus!");
		header('location:index.php?menu=1&action=0');
		
	}
 ?>