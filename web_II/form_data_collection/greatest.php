<?php
	//to find greatest number among 7
	if (isset ($_GET["submit"])){
		foreach ($_GET as $elem)
			$a[]=$elem;
		
		$great=0;
		for ($i = 0; $i < count($a)-1; $i++){
			if($great<$a[$i])
				$great=$a[$i];
		}
		echo "greatest : $great";
	}
	echo "<hr/>";
?>

<html>
	<head>
		<title>
		</title>
		<body>
			<form action="" method="get">	
				<?php
					for ($i=0; $i<7 ;$i++)
						echo "<input type='text' name='A$i' placeholder='enter int'/><br/>";
				?>
				<input type="submit" value="submit" name="submit"/>
			</form>
		</body>
	</head>
</html>