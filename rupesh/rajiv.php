<?php
$con=mysqli_connect("localhost","root","") or die("create error");
$create="create database user";
mysqli_query($con,$create) or die("query error");
mysqli_select_db('user',$con);
echo"create success";
	

?>

