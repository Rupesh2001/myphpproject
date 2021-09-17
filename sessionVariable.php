<?php
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['uname'];
	$pass=$_POST['pwd'];
	$con=mysqli_connect("localhost","root","","lmc") or die("error");
	$select ="select * from info where name='$name' and password='$pass'";
	$result=mysqli_query($con,$select) or die("error");
	if(mysqli_num_rows($result)!=0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			//echo "<img src='$row[image]' alt='$row[name]' width='200' height='100'>";
			//$_SESSION['a']=$name;
			setcookie('c',$name,time()+90);
			//$_SESSION['b']=$pass;
		//	echo"welcome $_SESSION[a]";
			setcookie('d',$pass,time()+90);
			//echo"welcome $_cookie[c]";
		}
	}
	else
	{
		echo"wrong name and password";
		echo"Do you want to login click the link<a href='login.php'>login in</a>";
	}

}
?>
<form method="POST">
<input type="text" name="uname" placeholder="enter your name"/>
<input type="password" name="pwd" placeholder="enter your password">
<input type="submit" name="submit" value="submit"/>
</form>