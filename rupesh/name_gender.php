<?php
if(isset($_GET['submit']))
{
	$uname=$_GET['Uname'];
		$gen=$_GET['gender'];
		
		
		if($gen=="m")
			echo"<h1>Mr.$uname</h1>";
			
		else
			echo"<h1>Mrs.$uname</h1>";
}

		

	

?>
<html>
	<head>
		<title></title>
	</head>
		<body>
		<form action="" method="get">
			<input type="text" name='Uname' id="Uname" placeholder="Username" /><br />
			<input type="radio" name="gender"  value="m"/>male<br/>
			<input type="radio" name="gender"   value="f"/>female<br/>
			<input type="submit" value="submit" name="submit"/>
		</form>
		</body>
</html>