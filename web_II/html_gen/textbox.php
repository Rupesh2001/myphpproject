Store 7 float data in array and display sum in textbox. 

<?php
	$a = array(1.1,1.2,1.2,1.4,1.5,1.6,1.7);
	$sum=0;
	foreach ($a as $value)
		$sum=$sum+$value;
	
	echo "<textarea rows='2' cols='2'>$sum</textarea>"
?> 

