<?php
	//Create web form that collects 10 float data and check either they all are float or not. If all the data entered are not float then return the same form to the user with error message. you need to perform this task through PHP.
	
	if (isset($_GET["submit"])){
		foreach($_GET as $value){
			if ($value != 'submit')
				$a[]=$value+0;
		}
		for ($i=0; $i<count($a); $i++){
			if (!is_float($a[$i])){
				$_error[$i]="error";
			}
			else
				$_error[$i]="";
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
				for($i=0;$i<10;$i++){
					echo"<input type='text' name='float$i' placeholder='enter float' ";
					
					if (isset($_error) && $_error[$i]!=''){
						
						$temp=$_GET["float$i"];
						echo "value='$temp'/>";
						echo"<span style='color:red'>$_error[$i]</span>";
					}
					else
						echo"/>";
					
					echo"<br/>";
				}
				
			?>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>