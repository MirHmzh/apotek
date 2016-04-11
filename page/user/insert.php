<form id="frm" action="" method="post">
	<label>E-mail : </label>
	<input type="email" name="email" placeholder="E-mail" required/>
	<label>Password :</label>
	<input type="password" name="pass" placeholder="Password" required="required"/>
	<label>Nama : </label>
	<input type="text" name="nama" placeholder="Nama Lengkap" required/>
	<label>Jabatan</label>
	<select name="level" required>
		<option>ADMIN</option>
		<option>STAFF</option>
	</select>
	<input type="submit" name="button" value="Daftar"/>
</form>	

<?php 
	if (isset($_POST['button'])) {
		$email = strip_tags($_POST['email']);
		$nama  = strip_tags($_POST['nama']);
		$pass  = strip_tags($_POST['pass']);
		$level = strip_tags($_POST['level']);
		if ($level == 'ADMIN') {
			$level1 = 1;
		}else{
			$level1 = 2;
		}

		$query = query("SELECT * FROM tbluser WHERE email = '$email'");
		if (mysqli_num_rows($query)) {
			script("Pengurus sudah terdaftar");
		}else{
			$sql = "INSERT INTO tbluser (email, nama, password, level) VALUES ('$email','$nama','$pass','$level1')";
			query($sql);
			script("Penambahan pengurus berhasil!");
			header('location:index.php');
		}
	}	

 ?>