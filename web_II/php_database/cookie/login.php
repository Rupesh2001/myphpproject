<?php
	session_start();
	if (isset($_POST["submit"])){
		require(__DIR__."/connection.php");
		$email = $_POST["email"];
		$password=$_POST["password"];
			
		$select = "select * from signup where email='$email' and pass='$password';";
		$result=mysqli_query($con,$select) or die ("retrive error");
		
		if (mysqli_num_rows($result) != 0 ){
			$arr=mysqli_fetch_assoc($result);
			echo "welcome $arr[uname] goto<a href='cookie_utilazation.php'> next</p> ";
			//$_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			setcookie('email',$email,time()+60);
			setcookie('password',$password,time()+60);
		}
		else {
			echo "your record is not found plese goto <a href='signup.php'>signup</a>";
		}
	}
	else {
?>

<form action="" method="post">
	<input type="text" name="email" placeholder="enter email"/><br/>
	<input type="password" name="password" placeholder="enter password"/><br/>
	<input type="submit" value="submit" name="submit"/>
</form>
<?php
	}
?>