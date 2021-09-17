<?php
	$n=-9;
	//check negative positive or zero
	echo "the number is ".$n."<br/>";
	if($n<0)
		echo $n." is negative";
	else if ($n>0)
		echo $n." is positive";
	else 
		echo $n." is zero";
	
	echo "<br/>";
	
	//check greater than 100 or not
	if($n>100)
		echo $n." is greater than 100";
	else	
		echo $n." is less than 100";
	
	echo "<br/>";
	
	//check greatest string
	$a="apple";
	$b="apple";
	echo "the string are ".$a." ".$b."<br/>";
	if($a>$b)
		echo $a;
	else 
		echo $b;
?>