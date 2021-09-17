<?php
	//set time
	//$d=mktime(12,5,0,06,03,1999);//h m s d month y
	//echo date('r',$d)."<br/>";
	
	$dob=strtotime("12:5:0 1999-06-03 ");//month in middle
	echo "birth date/time : ".date ('r',$dob)."<br/>";
	
	//current time
	echo "current time/date : ".date("D, M dS Y h:i:s t")."<br/>";
	//d m y h i s (total no of days in month)t (total no of days till now)z w;
	
	//finding age
	$ctime=mktime();//or time() : gives time in second
	$age=$ctime-$dob;
	$year=$age/(365*24*60*60);
	$month=($year-(int)$year)*12;
	$day=($month-(int)$month)*30;
	printf("your age : %d years %d months %d days",$year,$month,$day);
	
?>