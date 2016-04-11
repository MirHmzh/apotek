<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="divlogin"><h1 class="judullogin">Login Admin / Staff Apotek Seger Waras</h1></div>
<?php 
 	require_once 'lib/function.php';
 	session_start();
 	echo '<div class="logindiv">';
 	echo '<form id="frm" class="loginform" method="POST">';
 	echo "<label>User : </label>";
 	input('text','user','','Email','required');
 	echo "<label>Pass : </label>";
 	input('password','pass','','Password','required');
 	input('submit','button','Login','','');
 	formclose();
 	echo "</div>";

 	if (isset($_POST['button'])) {
 		$user	= strip_tags($_POST['user']);
 		$pass   = strip_tags($_POST['pass']);
 		$Quser  = query("SELECT * FROM tbluser WHERE email = '$user' AND password = '$pass' AND level = 1 OR level = 2");

 		if (mysqli_num_rows($Quser) == 0) {
 				echo "Anda bukan pengurus Apotek";
 		}else{
 			$data = mysqli_fetch_array($Quser);
 			$_SESSION['id_user'] = $data[0];
 			$_SESSION['level'] = $data[4];
 			$_SESSION['nama'] = $data[2];
 			header('location:index.php?menu=7');
 		}	
 	}
 ?>


</body>
</html>