<?php
	//create database
	$con =  mysqli_connect ("localhost","root","") or die ("connection error");
	$db_create =   "create database if not exists php_db_1";
	mysqli_query ($con ,$db_create) or die ("creation error");
	mysqli_select_db($con, "php_db_1") or die("database selection error");

	$createtb ="create table if not exists student(sid int, sname varchar(20), dob datetime, gender char(6)); ";
	mysqli_query ($con,$createtb) or die("table creation error");
	
	$ctime=time();//or time() : gives time in second
	$age=$ctime-864000;
	$t= date('Y-m-d A',$age);
	echo $t;
	$insert =  "insert into student values (3,'aashish','$t','male')";
	mysqli_query($con,$insert) or die("insert error");
	
	//$update = "update student set sname='ram' where sname='aashish';";
	//mysqli_query($con,$update) or die ("update error");
	
	//$delete ="delete from student where sname='ram';";
	//mysqli_query($con,$delete) or die ("deletion error");
	
	
	echo "delete sucessfully";
?>