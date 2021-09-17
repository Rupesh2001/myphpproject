<?php 
	if (isset($_GET["submit"])){
		//store
		for ($i=0;$i<5;$i++){
			$name["person_$i"]=($_GET["txtname$i"]);
			$b=$_GET["txtname$i"];
			$rem_info["$b"]=(" Address : ".$_GET["txtadd$i"]." Gender : ".$_GET["gender$i"]);
		}
		
		//search
		if(in_array("Ram bdr",$name)){
			
			$x=array_search("Ram bdr" , $name);
			
			echo "<h4>found at $x </h4>";
			
			if(array_key_exists("Ram bdr",$rem_info))
				echo "<h1>Name : ".$name["$x"].$rem_info["Ram bdr"]."</h1>";
		}
		else 
			echo "not found";
	}
	
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>	
		<form action="" method="get" >
			<?php
				for ($i = 0 ; $i < 5; $i++){
					echo "<input type='text' name='txtname$i' placeholder='enter name' <br/>";
					echo "<input type='text' name='txtadd$i' placeholder='enter address'<br/>";
					echo "gender : <input type='radio' name='gender$i' value='male'/> male" ;
					echo "<input type='radio' name='gender$i' value='female'> female <br/>";
				}
			?>
			<input type="submit" value="submit" name="submit"/>
		</form>
	</body>
</html>