<?php
$arr=array(" first name","last name","dob","height","age");
$contents=array ("hari","thapa",2020-28-1,6.5,55);
if($fp=fopen("dataCollected.csv","w"))
{
	fputcsv($fp,$arr);
	fputcsv($fp,$contents);
}
else
{
	echo"file already exist";
}





?>