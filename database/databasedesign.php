<?php

$con=mysqli_connect("localhost", "root", "","rupesh") or die("connection error");
$select="select * from info";
$result=mysqli_query($con,$select) or die("error result"); 
while($arr=mysqli_fetch_array($result))
{
	echo " id:$arr[0]<br/>";
	echo " <span style=color:blue>name:</span> <span style=color:red>$arr[1]</span><br/>";
	echo "$arr[2]<br/>";
}

?>