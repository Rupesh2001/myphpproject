<?php
	$con = mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
	$create = "create table if not exists signup (uname varchar(40),email varchar(50),pass varchar(255))";
	mysqli_query($con, $create) or die ("database creation error");
	$name = $_POST["txtname"];
	$email = $_POST["txtemail"];
	$pwd = $_POST["pwd"];
	$insert = "insert into signup values ('$name','$email','$pwd')";
	mysqli_query ($con,$insert) or die ("insertion error");
	echo "sucessful go to <a href='login.php'> login</a>";
?>