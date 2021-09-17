<?php
	//create indexed array which store name of 10 person and display them using for and foreach loop
	//$a = array('asish','ram','shyam','hari','sita','ramesh','rajesh','laxmi','gopal','anil');
	$a[]="ashish";
	$a[]="ram";
	$a[]="shyam";
	$a[]="hari";
	$a[]="sita";
	$a[]="ramesh";
	$a[]="rajesh";
	$a[]="laxmi";
	$a[]="gopal";
	$a[]="anil";
	$a[]=100;
	for($i=0;$i<10;$i++)
		echo "$a[$i]  ";
	
	echo "<hr/>";
	
	foreach ($a as $value)
		echo "$value  ";
		
	print_r ($a);
?>