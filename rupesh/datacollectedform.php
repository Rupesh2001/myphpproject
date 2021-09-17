<?php
if(isset($_GET['submit']))
{
		$fp=fopen("retrive.txt","w");
		$a=$_GET['txtname'];
		fwrite($fp,$a);
		echo "<br/>";
		$b=$_GET['txtemail'];
		fwrite($fp,$b);
		echo "<br/>";
		$c=$_GET['password'];
		fwrite($fp,$c);
}

?>


<html>
<head>
	<title></title>
</head>
<body>		
	<form action="" method="">
		Name:<input type="text" name="txtname" placeholder="YourName"/><br>
		Email:<input type="text" name="txtemail" placeholder="YourEmail"/><br>
		Password:<input type="password" name="password" placeholder="Password"/><br>
		<input type="submit" name="submit" value="submit"/>
		
	</form>
</body>
</html>











