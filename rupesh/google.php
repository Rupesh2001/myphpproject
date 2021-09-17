<?php
$str=file_get_contents("https://www.google.com/");
echo $str;
file_put_contents("google.html",$str);
?>