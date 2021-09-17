<?php
// 1. display in table

	$fp = fopen ("12thoct.csv","r");
	echo "<table border='1'>";
	$counter=0;
	do {
		echo "<tr>";
		$a = fgetcsv($fp);
		foreach ($a as $value){
			if ($counter == 0)
				echo "<th>$value</th>";
			else
				echo "<td>$value</td>";
		}
		echo "</tr>";
		$counter=10;
	}while( !feof($fp) );
	echo "</table>";
	
//2. in which time Indra PC has joined 

	rewind($fp);
	$a=fgetcsv($fp);
	do {
		$a = fgetcsv($fp);
		if ( strcasecmp("indra pc",$a[0])==0 ){
			$_time = substr ($a[2] ,  strpos ($a[2] , "," )+1);
			echo "<h1>$a[0] joined at $_time</h1>";
			$count = 0;
			break;
		}
		else 
			$count = 100;
	}while(!feof($fp));
	if ($count == 100)
		echo "<h1>not found</h1>";
	echo "<hr/>";
	
//4. name of student who left earlier
	rewind ($fp);
	$a=fgetcsv($fp);
	
	echo "<h2>left earlier : </h2>";
	do{
		$a = fgetcsv($fp);
		$left_repeat=0;
		if ( strcasecmp($a[1],"left")==0 ){
			if (isset($left_name)){
				foreach ($left_name as $value){
					if ( strcasecmp($a[0],$value)==0 )
						$left_repeat++;
				}
			}
		}
		else
			$left_repeat++;
		
		if ($left_repeat==0)
			$left_name[]= $a[0];
		
	}while ( !feof($fp) );
	
	echo "<ol>";
	foreach ($left_name as $value)
		echo "<li>$value left earlier</li>";
	echo "</ol>";
	echo "<hr/>";
//5. joined earlier
	rewind($fp);
	
	echo "<h3>join earlier : </h3><ol>";
	do{
		$a= fgetcsv($fp);
		if ( strcasecmp($a[1],"joined before")==0 )
			echo "<li>$a[0] $a[1]</li>";
	}while ( !feof($fp) );
	echo "</ol>";
	
//6. copy file 
	rewind($fp);
	$new_fp=fopen("12thoct_webii","w");
	do {
		$a = fgetcsv($fp);
		fputcsv($new_fp , $a);
	}while (!feof($fp));
	echo "file copied";
	fclose($new_fp);
	
//3.  display name of all student in the list
	
	rewind($fp);
	$a=fgetcsv($fp);
	do{
		$a = fgetcsv($fp);
		$name_repeat=0;
		if ( isset($names) ){
			foreach ($names as $value){
				if ( strcasecmp ($value , $a[0])== 0 )
					$name_repeat=1;
			}
		}
		
		if ($name_repeat==0)
			$names[] = $a[0];
		
	}while( !feof($fp) );
	
	echo "<h2>names : </h2><ol>";
	foreach ($names as $value)
		echo "<li>$value</li>";
	echo "</ol>";
	echo "<hr/>";
	
//7. no fo participant
	echo "<h3>no of participant : ".count($names)."</h3>";
//orgainzer
	echo "<h3>name of organizer : $names[0]</h3>";
//no of atendee
	$noofatendee=count($names)-1;
	echo "<h3> total atendee : $noofatendee</h3>";
//total absent 
	$noofstudent = 26;
	echo "<h3> total absents : ".($noofstudent-$noofatendee)."</h3>";
?>