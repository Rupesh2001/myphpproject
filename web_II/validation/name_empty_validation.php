<?php
	//Create web form that collects name , address and mobile no of user and validate user input for the blank field. If any of the field is left blank than return the form to the user with error message.
	
	if (isset($_GET["submit"])){
		//name
		if (strlen($_GET["txtname"])<1 ){
			$name_error=" name is blank";
		}
		//address
		if (strlen ($_GET["txtaddress"])<1){
			$address_error=" address is blank";
		}
		//number
		if(strlen($_GET["number"])<1){
			$number_error=" number is empty";
		}
		else{
			if(!is_int($_GET["number"]+0)){
				$number_error=" invalid";
			}
		}
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="txtname" placeholder="enter name" />
				<?php
					if (isset($name_error))
						echo "<span style='color:red' >$name_error</span><br/>";
					else
						echo "<br/>";
				?>
			<input type="text" name="txtaddress" placeholder="enter address"/>
			<?php
				if(isset($address_error))
					echo"<span style='color:red'>$address_error</span><br/>";
				else
					echo"<br/>";
			?>
			<input type="text" name="number" placeholder="enter number"
			<?php
				if(isset($number_error)){
					echo "value='".$_GET["number"]."'/>";
					echo"<span style='color:red'>$number_error</span><br/>";
				}
				else
					echo "/><br/>";
			?>
			<input type="submit" name="submit" value="submit"/>

		</form>
	</body>
</html>