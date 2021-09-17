<?php
	/*$con = mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
	$createtb = "create table if not exists info (sname varchar(20), address varchar(30), age int, gender char(6));";
	mysqli_query($con,$createtb) or die ("creation table error");
	if (isset($_GET["submit"])){
		$name = $_GET["sname"];
		$add =$_GET["address"];
		$age = $_GET["age"];
		$gender = $_GET["gender"];
		
		$insert = "insert into info values( '$name','$add','$age','$gender');";
		mysqli_query($con,$insert) or die ("insertion error");
	}
	else {*/
?>

<html>
	<head>
		<title>form_php</title>
	</head>
	<body>
		<form action="store.php" method="get">
			<input type="text" placeholder="enter name" name="sname" /><br/>
			<input type="text" placeholder="enter address" name="address"/><br/>
			<input type="number" placeholder="age" name="age"/><br/>
			<input type="radio" name="gender" value="male" />male<br/>
			<input type="radio" name="gender" value="female" />female<br/>
			<input type="submit" name="submit" />
			
		</form>
	</body>
</html>

<?php
	//}
?>