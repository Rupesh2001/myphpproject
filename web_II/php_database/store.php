<?php
	if (isset($_GET["submit"])){
		$con = mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
		$createtb = "create table if not exists info (sname varchar(20), address varchar(30), age int, gender char(6));";
		mysqli_query($con,$createtb) or die ("creation table error");
	
		$name = $_GET["sname"];
		$add =$_GET["address"];
		$age = $_GET["age"];
		$gender = $_GET["gender"];
		
		$insert = "insert into info values( '$name','$add','$age','$gender');";
		mysqli_query($con,$insert) or die ("insertion error");
	}
	else 
		echo "return";
?>