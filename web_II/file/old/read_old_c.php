<?php
	$fp=fopen("example.txt","r");
	while(!feof($fp)){
		echo fgetc($fp);
	}
?>