<?php
	$a = array("sunday","monday","tuesday","wednesday","thursday","friday","saturday");
	echo "<table border='1'><tr> ";
		foreach ($a as $value)
			echo "<td> $value </td>";
	echo "</tr></table>";
?>