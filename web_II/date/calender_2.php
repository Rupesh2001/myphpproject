<?php
	//Maintain the selected values in select options  after the calendar is  generated (task done in classwork).
	if (isset($_GET["submit"])){
		$y=$_GET["your_year"];
		$m=$_GET["your_month"];
		$cl_d=strtotime("$y-$m-1");
		
		$noofday=date('t',$cl_d);
		$get_day=date('w',$cl_d);
		
		
		$day=array("sun","mon","tue","wed","thu","fri","sat");
		echo"<table border='1'><tr>";
		foreach ($day as $elem)
			echo"<td>$elem</td>";
		echo"</tr><tr>";
		
		if($get_day>0){
			for($i=0;$i<$get_day;$i++)
				echo"<td></td>";
		}
		for ($i=1;$i<=$noofday;$i++){
			echo"<td>$i</td>";
			if(($i+$get_day)%7==0)
				echo"</tr><tr>";
		}
	}
?>
<html>	
	<head>
		<title>
		</title>
	</head>
	<form action="" method="get">
		<?php
			//year
			echo"<select name='your_year' />";	
				//return
				$temp=$_GET["your_year"];
				if(isset($temp)){
					echo "<option style='background-color:red; ' value='$temp' >$temp</option>";
				}
				
				for($i=1990;$i<=2020;$i++){
					echo "<option value='$i'>$i</option>";
				}
			echo "</select>";
			
			//month
			echo"<select name='your_month'>";
				$months=array("jan","feb","mar","april","may","june","july","aug","sept","oct","nov","dec");
				
				//return
				$t=$_GET["your_month"];
				if(isset($t)){
					echo "<option style='background-color:red;' value='$t'>".$months[$t-1]."</option>";
				}
				
				for($i=1;$i<=12;$i++){
					echo "<option value='$i'>".$months[$i-1]."</option>";
				}
			echo"</select>";
		?>
		<input type="submit" name="submit" value="submit"/>
		
	</form>
</html> 