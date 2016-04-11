<?php 
	if (isset($_GET['email'])){
		$email = $_GET['email'];
		$query = query("SELECT * FROM tbluser WHERE email = '$email'");
		$user = mysqli_fetch_array($query);
 ?>

 <form id="frm" method="POST">
 	<?php
 	echo '<label>E-mail : </label>';
	echo '<input type="email" name="email" placeholder="" value="'.$user[1].'" required/>';
	echo '<label>Password :</label>';
	echo '<input type="password" name="pass" value="'.$user[3].'" required="required" />';
	echo '<label>Nama : </label>';
	echo '<input type="text" name="nama" value="'.$user[2].'" required/>';
	echo '<label>Jabatan</label>';
	echo '<select name="level" required> ';
			if ($user[4] == 1) {
				echo "<option selected>ADMIN</option>";
				echo "<option>STAFF</option>";
			}else{
				echo "<option>ADMIN</option>";
				echo "<option selected>STAFF</option>";
			}
	echo '</select>';
	echo '<input type="submit" name="button" value="Daftar"/>';
 	echo '</form>';

 	if(isset($_POST['button'])){
				$mail = strip_tags($_POST['email']);
				$password = strip_tags($_POST['pass']);
				$nama = strip_tags($_POST['nama']);
				$level = strip_tags($_POST['level']);
				if ($level == 'ADMIN') {
					$level1 = 1;
				}else{
					$level1 = 2;
				}
				$_SESSION['nama'] = $nama;


				$sql = "UPDATE tbluser SET email = '$mail', nama = '$nama',password = '$password', level = '$level1' WHERE email = '$email'";
				query($sql);
				header('location:index.php?menu=1&action=0');
				}
			}

  ?>
