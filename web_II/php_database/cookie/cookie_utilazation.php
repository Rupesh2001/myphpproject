<?php
	session_start();
	if (isset($_COOKIE['email'])&&isset($_COOKIE['password'])){
		echo "you are logged in";
	}
	else {
		echo "goto<a href='login.php'> login </a>";
	}
?>