<?php
	//Create web form that collects hobbies (through checkbox) from user and make sure user should have chosen at least 2 hobbies otherwise return that form to the user with error message.
	if(isset($_GET["submit"])){
		foreach($_GET as $elem){
			if ($elem != 'submit')
				$a[]=$elem;
		}
		if (count($a)<2){
			$_error="error";
		}
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="get">
			<?php
			echo "<b>Hobbies </b>";
			if(isset($_error) )
				echo "<span style='color:red'>$_error</span><br/>";
			else
				echo "<br/>";
			
				$hobbies = array("writing","swimming","reading","fishing");
				for ($i=0;$i<4;$i++){
					echo "<label><input type='checkbox' value='$i' name='A$i'  ";
					if (isset($_error) && isset($_GET["A$i"])){
						echo"checked=checked";
					}
					echo "/>". ucwords($hobbies[$i]) ."</label><br/>";
				}
			?>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>