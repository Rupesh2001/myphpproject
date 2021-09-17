<?php
	$a = array("title"=>"abc_store","price"=>2000,"page"=>500,"aurther"=>"hari");
	echo "<table border=1><tr>";
	echo "<td>title</td>";
	echo "<td>price</td>";
	echo "<td>page</td>";
	echo "<td>aurther</td></tr><tr>";
	
	foreach ($a as $value){
		echo "<td>$value</td>";
	}
	echo "</tr></table>";
?>