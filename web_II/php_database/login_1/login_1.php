<?php
	if (isset($_POST["submit"])){
		include "../connection/connection.php";
		$email = $_POST["email"];
		$password=$_POST["password"];
		
		//$con = mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
		$select = "select * from signup where email='$email' and pass = '$password'";
		$result = mysqli_query($con ,$select) or die ("retrive error");
		
		if (mysqli_num_rows($result) != 0 ){
			$arr = mysqli_fetch_assoc($result);
			echo "welcome $arr[uname]";
		}
		else {
			echo "user not found";
		}
	}
?>

<form action="" method="post">
	<input type="text" name="email" placeholder="enter email" /><br/>
	<input type="password" name="password" placeholder="enter password"/><br/>
	<input type="submit" name="submit" value="signin"/>
</form>