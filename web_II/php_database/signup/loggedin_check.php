<?php
	session_start();
	if (!isset($_SESSION['email'])){	
		echo "you are not authorized";
		die();
	}
?>