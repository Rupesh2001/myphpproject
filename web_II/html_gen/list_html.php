Create array of size 50 and initialize it. Then display only even numbers as unordered list. 
<?php
	$a[] = "";
	for ($i=0;$i<50;$i++){
		$a[$i]=$i+100;
	}
	echo "<ul>";
	for ($i=0;$i<50;$i++){
		if ($a[$i]%2==0)
			echo "<li>$a[$i]</li>";
	}
	echo "</ul>";
?>	