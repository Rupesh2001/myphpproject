<?php
	$name = $_GET['txtname'];
	$con = mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
	$select =  "select * from names_ajax where name like'$name%'";
	$result = mysqli_query($con , $select) or die ("retrival error");
	while ($arr = mysqli_fetch_assoc($result)){
		echo $arr['name']." ";
	}
?>