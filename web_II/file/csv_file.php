<?php
	$fp=fopen("data.csv","r");
	
	echo "<table border='1'><tr>";
	while(!feof($fp)) {
		$a=fgetcsv($fp);
		//if ($a!=""){
			foreach($a as $value)
				echo "<td>$value</td>";
			echo"</tr><tr>";
		//}
	}
	echo "</tr></table>";
		
	fseek ($fp,0);
	$i=strlen(fgets($fp));
	fseek ($fp,$i);
	
	do{
		$a=fgetcsv($fp);
		
		//left early
		if(strcasecmp("left",$a[1])==0){
			echo"$a[0] left early <br/>";
		}		
		//to display without repeating name
		$repeat=0;
		if(isset($name)){
			foreach ($name as $value){
				if(strcasecmp($a[0],$value)==0)
					$repeat++;
			}
		}
		if($repeat==0){
			$name[]=$a[0];
			$index=count ($name)-1;
			$time["$name[$index]"] = $a[2];
		}	
		
	}while(!feof($fp));
	
	//display names
	foreach ($name as $value)
		echo "$value <br/>";
	
	//join early or late
	foreach ($name as $value){
		if(strcasecmp("indra pc" , $value)==0){
			echo " $value joined in $time[$value]";
			$std_date_time=strtotime($time[$value]);
		}
		if (strtotime($time[$value]) > $std_date_time)
			echo "$value is late<br/>";
		else 
			echo "$value is early<br/>";
	
		
	}
?>