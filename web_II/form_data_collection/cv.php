<!--Write php program to collect name, date of birth, height, weight, address, mobile no, gender, hobbies, academic qualification and profile pic from user and display as CV. -->
<?php
	if (isset($_GET["submit"])){
		$name=$_GET["txtname"];
		$height=$_GET["height"];
		$weight=$_GET["weight"];
		$address=$_GET["txtaddress"];
		$number=$_GET["number"];
		$gender=$_GET["gender"];
		$hobby=$_GET["txthobby"];
		echo "<ul>";
		echo "<li> name : $name</li>";
		echo "<li> Height : $height</li>";
		echo "<li> Weight : $weight</li>";
		echo "<li> Address : $address</li>";
		echo "<li> Number : $number</li>";
		echo "<li> Gender : $gender</li>";
		echo "<li> Hobby : $hobby</li>";
	}
	echo "<hr/>";
?>

<html>
	<head>
		<title>cv</title>
	</head>
	<body>
		<form action="cv.php" method="get">
			name: <input type="text" name="txtname"/><br/>
			Date of birth :<input type="text" name="txtdob" /><br/>
			Height: <input type="text" name="height"/><br/>
			Weight: <input type="number" name="weight"/><br/>
			Address: <input type="text" name="txtaddress"/><br/>
			Number: <input type="number" name="number"/><br/>
			Gender: <input type="radio" value="male" name="gender" />male
					<input type="radio" value="female" name="gender" />female<br/>
			hobbies:<input type="checkbox" value="dancing" name="txthobby"/>dancing
					<input type="checkbox" value="singing" name="txthobby"/>singing
					<input type="checkbox" value="painting" name="txthobby"/>painting
					<input type="checkbox" value="swimming" name="txthobby"/>swimming<br/>
			
				<input type="submit" value="submit" name="submit"/>
		</form>
	</body>
</html>