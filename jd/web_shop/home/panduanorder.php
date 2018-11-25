<?php	
	//»á»°¿ØÖÆ//session
	session_start();
	if(empty($_SESSION['username'])) {
		header("location:./jd-login.php");
	}else{
		header("location:./order.php");
	}
?>