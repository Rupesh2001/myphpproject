<?php
	if (isset($_GET["submit"])){
		//store
		$info["name"]=$_GET["txtname"];
		$info["dob"]=$_GET["txtdob"];
		$info["address"]=$_GET["txtadd"];
		$info["email"]=$_GET["txtemail"];
		$info["moblie_no"]=$_GET["txtmobileno"];
		$info["gender"]=$_GET["gender"];
		$info["qualification"]=$_GET["qualification"];
		$info["hobby"]=" ";
		if (isset($_GET["hobby1"]))
			$info["hobby"]=$_GET["hobby1"];
		if (isset($_GET["hobby2"]))
			$info["hobby"]=$_GET["hobby2"].$info["hobby"];
		if (isset($_GET["hobby3"]))
			$info["hobby"]=$_GET["hobby3"].$info["hobby"];
		
		print_r($info);
		echo" : original<br/>";
		
		//uppercase
		echo strtoupper(implode($info))."<br/>";
		
		//sort key
		ksort($info);
		print_r($info);
		
		//no of element
		echo "<br/>no of element : ".count($info)."<br/>";
		
		//to indexed array
		foreach ($info as $value)
			$i[]=$value;
		print_r($i);
		
		//search 
		if(in_array("male",$info)){
			echo "<br/>Mr.".$info["name"]."<br/>";
		}
		
		//replace
		if($info["qualification"]=="bachelor")
			print_r(str_replace("bachelor","master",$info));
		
		//hobbies in table
		echo "<br/><table border='1'><tr><th>hobbies</th></tr>";
		if (isset($_GET["hobby1"]))
			echo "<tr><td>".$_GET["hobby1"]."</td></tr>";
		if (isset($_GET["hobby2"]))
			echo "<tr><td>".$_GET["hobby2"]."</td></tr>";
		if (isset($_GET["hobby3"]))
			echo "<tr><td>".$_GET["hobby3"]."</td></tr>";
		echo "</table>";
		
		//sort
		print_r($info);
		asort ($info);
		echo"<br/>";
		print_r($info);
	}
	echo"<hr/>";
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="txtname" placeholder="name"/>
			<input type="text" name="txtdob" placeholder="date of birth"/><br/>
			<input type="text" name="txtadd" placeholder="address"/>
			<input type="text" size="70" name="txtemail" placeholder="enter email address"/><br/>
			<input type="text" name="txtmobileno" placeholder="enter mobile no"/></br>
			gender:<input type="radio" name="gender" value="male"/>male
			<input type="radio" name="gender" value="female"/>female<br/>
			Qualification:
			<select name="qualification">
				<option value="slc">SLC</option>
				<option value="+2">+2</option>
				<option value="bachelor">bachelor</option>
			</select><br/>
			hobby:
			<input type="checkbox" name="hobby1" value="reading"/>reading
			<input type="checkbox" name="hobby2" value="football"/>football
			<input type="checkbox" name="hobby3" value="swimming"/>swimming<br/>
			<input type="submit" value="submit" name="submit"/>
		</form>
	</body>
</html>