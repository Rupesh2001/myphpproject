<?php
$a=array("rahul","bibek","praksh","rajiv","ronish");
if(isset($_GET['submit']))
{
	$q=$_GET['search'];
	$con=mysqli_connect("localhost","root","","lmc") or die("error");
	$select ="select * from info where name='$q'";
	$result=mysqli_query($con,$select) or die("error");
	if(mysqli_num_rows($result)!=0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<img src='$row[image]' alt='$row[name]' width='200' height='100'>";
			
			echo"this name is already taken<br/>";
			echo"suggested name:<br/>";
		foreach($a as $name)
		echo"$name ";
		}
	}
	else
	{
		echo" this name is available ";
	}
}
	?>
<form method="GET">
<input type="text" name="search"/>
<input type="submit" name="submit" value="submit"/>
</form>