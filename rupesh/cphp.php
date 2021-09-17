<?php
$month=9;
$year=2020;
$days=array("SUN","MON","TUE","WED","THRU","FRI","SAT");

$d=mktime(0,0,0,9,1,2020);
$noofdays=date('t',$d);
$weekday=date('w',$d);
echo "<table border='1'><tr>";
foreach($days as $value)
echo "<td>$value</td>";
echo"</tr><tr>";
/*if($weekday > 0)
{
	for($i=0; $i<$weekday; $i++)
		echo "<td></td>";
}
*/
for($i=1;$i<=$noofdays;$i++)
echo "<td>$i</td>";
	if(($i%7==0)
		echo "</tr>";
	
 
echo "</table>";
?>