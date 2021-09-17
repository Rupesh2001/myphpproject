<?php
	if(isset($_GET["submit"])){
		$count=0;
		for ($i=0;$i<3;$i++){
			if (isset($_GET["h_$i"]))
				$count++;
		}
		if($count<1){
			die("not enough check box selected");
		}
		if((strlen($_GET["txtname"])) <2 || (strlen($_GET["txtname"])) >10 ){
			die("name error");
		}
	}
?>

<form action="" method="get">
	<input type="text" name="txtname" placeholder="enter name"/><br/>
	<input type="text" name="age" placeholder="enter age"/><br/>
	
	<?php
		$hobbies=array("swimming","dancing","playing");
		for ($i=0;$i<sizeof($hobbies);$i++){
			echo "<input type='checkbox' name='h_$i' value='$i'/>";
		}
	?>
	<input type="submit" name="submit" value="submit"/>
</form>