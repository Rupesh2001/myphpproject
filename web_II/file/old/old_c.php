<?php
	$fp=fopen ("example.txt" ,"w");
	
	fputs($fp,"hellow_world");
	fwrite($fp,"98");
	fprintf($fp,"123");
	fclose($fp);
?>