<?php
	$counter=0;
	$fp = fopen("data.csv" ,"r");
	
	//1. display table
	echo "<table border='1' ><tr>";
	do{
		$a=fgetcsv($fp);
		foreach($a as $value){
			if ($counter==0){
				echo "<th>$value</th>";
			}
			else
				echo"<td>$value</td>";
		}
		echo "</tr><tr>";
		$counter=2;
	}while(!feof($fp));
	echo"</tr></table>";
	
	rewind($fp);//to move cursor in front 
	$a=fgetcsv($fp);//to eleminate heading
	
	do{
		$a = fgetcsv($fp);
		//check indra pc and display time
		if(in_array("Indra PC" , $a)){
			echo "$a[0] joined at : ".substr($a[2],strpos($a[2],",")+1)."<br/>" ;
			//$std_time = 
			break;
		}
	}while(!feof($fp));
	
	rewind($fp);
	$a=fgetcsv($fp);
	
	do{
		$a = fgetcsv($fp);
		$name[]=$a[0];
		
		if(strcasecmp("joined before",$a[1])==0)
			$join_before[]=$a[0];
			
		if(strcasecmp("left",$a[1])==0)
			$left_early[]=$a[0];
			//echo "$a[0] has left early <br/>";
		if(strcasecmp("joined",$a[1])==0)
			$join_late[] = $a[0];
			//echo "$a[0] has joined late <br/>";
		
	}while(!feof($fp));
	
	echo"<hr/><h1>joined before</h1>";
	foreach ($join_before as $value){
		echo "$value has joined before <br/>";
	}
	echo"<hr/><h1>left early</h1>";
	foreach ($left_early as $value){
		echo "$value has left early <br/>";
	}
	echo"<hr/><h1>joined late</h1>";
	foreach ($join_late as $value){
		echo "$value has join late <br/>";
	}
	echo"<hr/><h1>Names</h1>";
	
	//to display without repeating
	
	//display names
	for($i=0;$i<count($name);$i++){
		$repeat=0;
		if(isset($name_norepeat)){
			foreach ($name_norepeat as $value){
				if(strcasecmp($name[$i],$value)==0)
					$repeat++;
			}
		}
		if($repeat==0){
			$name_norepeat[]=$name[$i];
		}	
		
	}
	//display names
	foreach ($name_norepeat as $value)
		echo "$value <br/>";
		
?>