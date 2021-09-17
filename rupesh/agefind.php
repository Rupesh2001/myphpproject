<?php
 
  $birthDate = "12/17/1983";
  $birthDate = explode('/', $birthDate);
   $birthDate[0];
   $birthDate[1];
   $birthDate[2];
  
		$todaydate = "12/07/2020";
		$todaydate = explode('/', $todaydate);
	   $todaydate[0];
	   $todaydate[1];
	   $todaydate[2];
	   
	 $year=  $todaydate[2]- $birthDate[2];
	 $date=  $todaydate[1]- $birthDate[1];
	 $day= $todaydate[0]- $birthDate[0];
	 echo "your full date is year=$year date=$date day=$day";
?>