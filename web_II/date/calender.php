<?php
	$weeks=array("sun","mon","tue","wed","thu","fri","sat");
	
	//date stored
	$d=strtotime("2021-8-1");
	echo date("r",$d)."<br/>";
	
	//no of days in that month
	$noofdays=date('t',$d);
	
	//starting day 
	$get_day=date('w',$d);
	echo $get_day;
	
	echo "<table border='1'><tr>";
	
	foreach ($weeks as $elem)
		echo"<td>$elem</td>";
	echo "</tr><tr>";
	
	if ($get_day>0){
		for ($i=0;$i<$get_day;$i++){
			echo "<td></td>";
		}
	}
	
	for ($i=1; $i<=$noofdays ;$i++){
		echo "<td>$i</td>";
		if(($i+$get_day)%7==0)
			echo "</tr><tr>";
		
	}
	echo "</tr></table>";
?>