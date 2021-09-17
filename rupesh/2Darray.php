<?php
$student = array
(
array("KCMIT",2000,'A'),
array("BIM",4,"SEMESTER",35),
array(78.5,"LIBRARY"),

);
echo"<table border='1'><tr><td>";
echo $student[0][0] . $student[0][1] .$student[0][2] ;
echo "<br/>";
echo $student[1][0] . $student[1][1] .$student[1][2] .$student[1][3];
echo"<br/>";
echo $student[2][0] . $student[2][1]  ;
echo"</td></tr></table>";
?>