<?php
$age=array("Ram"=>20,"Hari"=>21,"Gita"=>22);
function display($me)
{
              asort($me);
              foreach($me as $key=>$value)
              {
              echo " key : ".$key." value : ".$value."<br>";
                                             }
              $length=count($me);
              echo "Total no of elements is :".$length;
                       }
display($age);
?>