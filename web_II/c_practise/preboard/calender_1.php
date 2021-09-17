<?php
	if (isset($_GET['submit'])){
		$yr=$_GET['year'];
		$mth=$_GET['month'];
	
		function calender($year,$month){
			$weeks =array("sun","mon","tue","wed","thu","fri","sat");
			$y=$year;
			$m=$month;
			
			$d=strtotime('$y/$m/1');
			$nd=date('t',$d);
			$sd=date('w',$d);
			
			echo"<table border='1'><tr>";
			foreach($weeks as $val){
				echo"<td>$val</td>";
			}
			echo"</tr><tr>";
			if($sd>0){
				for($i=0;$i<$sd;$i++){
					echo"<td></td>";
				}
			}
			for ($i=0; $i<$nd; $i++){
				if(($i+$sd)%7==0){
					echo"</tr><tr>";
				}
				echo"<td>".($i+1)."</td>";
			}
			echo"</tr></table>";
			
		}
		calender($yr,$mth);
	}
?>

<form action="" method="get">
	<?php
		$month = array ("jan","feb","mar","apr","may","june","july","aug","sept","oct","nov","dec");
		echo "<select name='month'>";
		foreach ($month as $val)
			echo "<option value='$val'>$val</option>";
		echo "</select><select name='year'>";
		for ($i=1950;$i<=2021;$i++)
			echo "<option value='$i'>$i</option>";
		echo  "</select><input type='submit' value='submit' name='submit'/>";
	?>	

	
</form>