<?php
	function calender($y,$m){
		$weeks = array("sun","mon","tue","wed","thu","fri","sat");

		$d = strtotime($y.'-'.$m.'-1');
		$nd = date('t',$d);
		$sd = date('w',$d);
		
		echo"<table border='1'/><tr>";
		foreach($weeks as $val){
			echo"<td>$val</td>";
		}
		echo"</tr><tr>";

		if($sd > 0 ){
			for ($i = 0 ; $i < $sd ; $i++){
				echo"<td></td>";
			}
		}
		
		for($i=1 ; $i<= $nd ; $i++){
			echo "<td>$i</td>";
			if(($i+$sd)%7==0){
				echo "</tr><tr>";
			}
		}

		echo"</tr>";
		echo"</table>";
	}
	if(isset($_GET['submit'])){
		$y = $_GET['year'];
		$m = $_GET['month'];
		calender($y,$m);
	}
?>

<form action="" method="get">
	<input type="text" name="month" placeholder="enter month">
	<input type="text" name="year" placeholder="enter year">
	<input type="submit" name="submit" value="submit">
</form>