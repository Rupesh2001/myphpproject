<?php
session_start();
//if(isset($_SESSION['a']))
	if(isset($_cookie['c']))
{
	//echo"you have login $_SESSION[a]";
	echo"you have login $_cookie[c]";
}
else
{
	echo"login first to access this page";
}

?>