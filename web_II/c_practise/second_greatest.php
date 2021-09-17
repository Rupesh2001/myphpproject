<?php
	//to find second greatest
	$a=5;
	$b=1;
	$c=5;
	echo "the number are: ".$a." ".$b." ".$c."<br/>";
	
	if ($a==$b&&$a==$c)
		echo "all number is equal";
	else if ($a==$b||$a==$c||$b==$c){
		echo "all number are not distint: ";
			if($a==$b)
				echo $a." = ".$b;
			else if($a==$c)
				echo $a." = ".$c;
			else
				echo $c." = ".$b;
	}
	else{
		if (($a>$b&&$a<$c)||($a<$b&&$a>$c))
			echo "second greatest ".$a;
		else if (($b>$a&&$b<$c)||($b<$a&&$b>$c))
			echo "second greatest: ".$b;
		else 
			echo "second greatest: ".$c;
	}
	echo "<br/>";
	
	$a="apple";
	$b="ball";
	$c="cat";
	echo "the string  are: ".$a." ".$b." ".$c."<br/>";
	
	if (($a>$b&&$a<$c)||($a<$b&&$a>$c))
		echo "second greatest ".$a;
	else if (($b>$a&&$b<$c)||($b<$a&&$b>$c))
		echo "second greatest: ".$b;
	else 
		echo "second greatest: '".$c;
	echo "<br/>";
?>