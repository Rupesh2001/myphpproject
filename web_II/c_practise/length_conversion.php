<?php
	$l=1200065;
	echo "length in cm: ".$l."cm <br/>";
	$k=$l/100000;
	$l=$l%100000;
	$m=$l/100;
	$l=$l%100;
	echo "conversion length: ".(int)$k."km ".(int)$m."m ".(int)$l."cm ";
?>