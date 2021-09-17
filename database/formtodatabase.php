<?php

$con=mysqli_connect("localhost", "root", "","rupesh") or die("connection error");
/*
$createdb="create database rupesh";
mysqli_query($con, $createdb) or die("not create");
mysqli_select_db($conn,"rupesh");
echo"DB create success";
*/

/*
$table="create table info (id int , name varchar(20), email varchar(10) )";
mysqli_query($con,$table) or die("table insert error");
echo"success";*/

/*$insert ="insert into info values(1,'rupesh','rupesh2020@gmail')";
mysqli_query($con,$insert) or die("error insert");

$insert1 ="insert into info values(2,'hari','hari2021@gmail')";
mysqli_query($con,$insert1) or die("error insert1");

$insert2 ="insert into info values(3,'shyam','shyam1212@gmail')";
mysqli_query($con,$insert2) or die("error insert2");

$insert3 ="insert into info values(4,'rita','rita125@gmail')";
mysqli_query($con,$insert3) or die("error insert3");

$insert4 ="insert into info values(5,'lolita','lolita2020@gmail')";
mysqli_query($con,$insert4) or die("error insert4");

echo"wow ! you insert into table";*/

$select="select * from info";
$result=mysqli_query($con,$select) or die("error result"); 
while($arr=mysqli_fetch_assoc($result))
{
	foreach($arr as $a)
	
		echo $a;
}
?>