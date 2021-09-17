<?php
	if (isset($_GET["submit"])){
		$m=$_GET["month"];
		$y=$_GET["year"];
		$weeks=array("sun","mon","tue","wed","thu","fri","sat");
		
		$d=strtotime("$y-$m-1");
		echo date("r",$d)."<br/>";
		
		//no of days in that month
		$noofdays=date('t',$d);
		
		//starting day 
		$get_day=date('w',$d);
		
		
		echo "<table border='1'><tr>";
		
		foreach ($weeks as $elem)
			echo"<td>$elem</td>";
		echo "</tr><tr>";
		
		if($get_day>0){
			for ($i=0;$i<$get_day;$i++){
				echo "<td></td>";
			}
		}
		for ($i=0; $i<$noofdays ;$i++){
			if(($i+$get_day)%7==0)
				echo "</tr><tr>";
			echo "<td>".($i+1)."</td>";
		}
		echo "</tr></table>";
	}
?>

<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="" method="get">
			<?php
				$a=array("jan","feb","mar","apr","may","june","july","aug","sept","oct","nov","dec");
				echo "<select name='month'>";
				for($i=1;$i<=12;$i++){
					echo"<option value='$i'>".$a[$i-1]."</option>";
				}
				echo "</select>";
				echo "<select name='year'>";
					for ($i=1990;$i<=2020;$i++){
						echo"<option value='$i'>".$i."</option>";
					}
				echo "</select>";
				echo"<input type='submit' name='submit' value='submit'/>"
			?>
			
				
			</select>
		</form>
	</body>
</html>