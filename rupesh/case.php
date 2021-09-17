<?php
if(isset($_GET['submit']))
{
	$num=$_GET['number'];
	//echo $num;
	
	switch($num)
	{
		CASE 1: echo"sunday";break;
		CASE 2: echo"monday";break;
		CASE 3: echo"tuesday";break;
		CASE 4: echo"wednesday";break;
		CASE 5: echo"thursday";break;
		CASE 6: echo"friday";break;
		CASE 7: echo"saturday";
	}
	
}

?>
<form action="" method="GET">
<input type="text" name="number"/><br/>
<input type="submit" name="submit" value="submit"/>
</form>