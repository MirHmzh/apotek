<?php 
	date_default_timezone_set("Asia/Jakarta");
	$db = mysqli_connect('localhost','root','','dbapotek');

	function query($sql){
		global $db;
		$result = mysqli_query($db,$sql);
		return $result;
	}

	function formopen($method){
		echo "<form method='".$method."''>";
	}

	function input($type, $name, $value, $placeholder, $required){
		echo '<input type="'.$type.'" name="'.$name.'" value="'.$value.'" placeholder="'.$placeholder.'" '.$required.'>';
	}

	function label($content){
		echo "<label>".$content."</label>";
	}

	function formclose(){
		echo "</form>";
	}

	function script($script){
    	echo '<script>alert("'.$script.'")</script>';
    }
 ?>



