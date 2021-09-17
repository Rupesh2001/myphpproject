<?php
if(isset($_GET['submit']))
{
		$info=$_GET['uname'];
		echo $info;
		$a=$_GET['address'];
		echo $a;
		$b=$_GET['email'];
		echo $b;
		$c=$_GET['number'];
		echo $c;
		///$d=$_GET['gender'];
		//echo $d;
		$f=$_GET['sel'];
		echo $f;
		//$e=$_GET['chkbox'];
		//echo $e;
	
}
?>
	
<html>
	<head>	
		<title>array manipulation</title>
	</head>
		<body>
			<form action="" method="get">	
			<input type="text" name="uname" placeholder="enter your name"/><br/>
			
		<input type="text" name="address" placeholder="enter your address"/><br/>
			<input type="text" name="email" placeholder="enter your email"/><br/>
			<input type="text" name="number" placeholder="enter your number"/><br/>
			select your gender:<br/>
				<input type="radio" name="gender" value="m"/>male
				<input type="radio" name="gender" value="f"/>female<br/>
				choose academic qualification<br/>
				<select name="sel">
				<option>8 pass</option>
				<option>slc</option>
				<option>+2</option>
				<option>baclelor</option>
				<option>master level</option>
				</select><br/>
				select your hobbies<br/>
				<input type="checkbox" name="chkbox"/>playing<br/>
				<input type="checkbox" name="chkbox"/>studying<br/>
				<input type="checkbox" name="chkbox"/>reading<br/>
				<input type="checkbox" name="chkbox"/>dancing<br/>
				<input type="checkbox" name="chkbox"/>acting<br/>
				<input type="checkbox" name="chkbox"/>fighting<br/>
				<input type="submit" type="submit" name="submit"/>
			</form>
		</body>
</html>