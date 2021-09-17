<?php
	if (isset($_POST["submit"])){
		require (__DIR__."/connection.php");
		
		$txtname = $_POST["txtname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$insert = "insert into signup values ('$txtname','$email','$password')";
		mysqli_query($con,$insert) or die ("insertion error");
		
		echo "insert sucessful goto login";
	}
	else {
?>
<form action="" method="post">
	<input type="text" name="txtname" placeholder="enter your name"/><br/>
	<input type="text" name="email" size="40" placeholder="enter your email"/><br/>
	<input type="password" name="password" placeholder="enter password"/><br/>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php
	}
?>