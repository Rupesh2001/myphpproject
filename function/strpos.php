<?php
$a="where are you now  ";
if($b=strpos($a,'a'))
{
	echo "found in $b position";
	
}
else 
{
	echo" not found";
}
echo"<hr>";
$b=strrev($a);
echo"$b";

?>