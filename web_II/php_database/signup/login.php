 <?php
session_start();

	if (isset($_GET["submit"])){
		$email = $_GET["txtemail"];
		$pwd =$_GET["txtpwd"];
		$con = mysqli_connect ("localhost","root","","php_db_1") or die ("connection error");
		$select = "select * from signup where email = '$email' and pass='$pwd';";
		$result=mysqli_query ($con,$select) or die("retive error");
		if (mysqli_num_rows($result) != 0){
			$row = mysqli_fetch_assoc ($result);
			$_SESSION['email']= $row[email];
			//$_SESSION['email']=$email;
			echo "welcome $row[uname] goto <a href='check.php'>next</a> page";
		}
		else 
			echo "user not found : check username and password : if not exist <a href='signup.html'>signup</a>";
	}
	else {
?>
<form action="" method="get">
	<input type="text" name="txtemail" placeholder="enter email"/><br/>
	<input type="password" name="txtpwd" placeholder="enter password"/><br/>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php
	}
?>