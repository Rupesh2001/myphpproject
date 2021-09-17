<?php	
		function age($y,$m,$s){
			$y=intval($y);
			$m=intval($m);
			$s=intval($s);
			$d = mktime(0,0,0,$s,$m,$y);
			//echo $y;
			//echo date('r',$d);
			//$da=strtotime('$y/$m/$s');
			$today = time();
			$age=$today-$d;
			//echo date('r',$d);
			$year=$age/(365*24*60*60);
			$month=($year-(int)$year)*12;
			$day=($month-(int)$month)*30;
			echo"<hr/>";
			printf("%d year %d month %d day",$year,$month,$day);
		}
		age(2020,1,3);
?>