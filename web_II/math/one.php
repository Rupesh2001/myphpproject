<html>
	<head>
		<title></title>
	</head>
	<body>	
		<form action="" method="get">
			<?php
				
				for ($i=0;$i<10;$i++){
					echo "<input type='text' name='val$i'";
					if (isset($_GET["val$i"])){
						$a=$_GET["val$i"];
						echo "value='$a'/>";
					}
					else
						echo"/>";
					
					if (isset($_GET["submit"])){
						$input=$_GET["val$i"]+0;
						if(!is_float($input)){
							echo"<span>error</span>";
						}
						else
							echo "value=''/>";
					}
					
					echo "<br/>";
				}
				echo "<input type='submit' name='submit' value='submit'/>";
			?>
		</form>
	</body>
</html>