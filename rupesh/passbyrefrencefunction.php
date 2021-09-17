<?php
function addfive(&$num)//passed by refrence
{
    $num+=5;
    }
function addsix(&$num)
{
   $num+=6;
    }
$orginum=10;
addfive($orginum);
echo "orginal value is :".$orginum."<br>";
addsix($orginum);
echo "orginal value is :".$orginum;
?>