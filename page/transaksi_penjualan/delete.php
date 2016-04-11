<?php 
	echo "Delete page";
	if (isset($_GET['id'])) {
		$buyer = $_GET['id'];
		$obat  = $_GET['value'];
		query("DELETE FROM tbljual WHERE pembeli = '$buyer' AND namaobat = '$obat'");
		header('location:index.php?menu=3&rdr=0&act=0);
	}
	
 ?>