<?php	
	//»á»°¿ØÖÆ//session
	session_start();
	if(empty($_SESSION['username'])) {
		header("location:./login.php");
	}else{
		header("location:./design.php");
	}
?>