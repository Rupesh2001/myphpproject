<?php
	
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$a = "John Doe\n";
fwrite($myfile, $a);
$b = "Jane Doe\n";
fwrite($myfile, $b);


fclose($myfile);

	
	
?>