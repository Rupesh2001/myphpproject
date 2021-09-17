<?php
$fp=fopen("cardata.csv","r");
do{
	$arr=fgetcsv($fp);
	print_r($arr);//display in array form
  }
 while(!feof($fp));



?>