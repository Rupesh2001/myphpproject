<?php
	$con = mysqli_connect ("localhost","root","","php_db_1") or die ("connection error");
	//$alter = "alter table student add column age int ;";
	//mysqli_query($con,$alter) or die("alteration error");
		
	//$update = "update student set age =20";
	//mysqli_query($con,$update) or die ("update error");

	//$alter_drop ="alter table student drop column age;";
	//mysqli_query($con,$alter_drop) or die ("drop error");

	$select = "select * from student";
	$result = mysqli_query($con,$select) or die ("selection error");
	echo "<table border='1'>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		foreach ($row as $value)
			echo "<td>$value</td> ";
		echo "</tr>";
	}
	echo "</table>";
	echo "sucessful";
	
?>