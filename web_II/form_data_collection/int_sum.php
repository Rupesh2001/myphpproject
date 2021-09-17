<?php
	//white php program that collets 10 integers from web form and displaly their sum in h1
	if (isset($_GET["submit"])){
		$sum=0;
		foreach ($_GET as $value)
			$a[]=$value;
		for ($i=0; $i < count($a)-1 ; $i++)
			$sum=$sum+$a[$i];
		
		echo "<h1>$sum</h1>";
	}
?>

<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="int_sum.php" method="get">
			<?php
				for ($i=0;$i<10;$i++){
					echo "<input type='text' name='int$i' placeholder='enter int'/><br/>";
				}
				echo"<input type='submit' value='submit' name='submit'/>";
			?>
		</form>
	</body>
</html>