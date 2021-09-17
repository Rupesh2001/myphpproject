



<html>
	<head>
			<title>calendar</title>
	</head>

	<body>
	<form action="" method="get">
		<?php
		$arr=array("january","febuary","march","april","may","june",
		"july","august","september","october","november","december");
		echo"year:<select name='selyear'>";//year
			for($year=1990;$year<=2020;$year++)
				echo"<option value='$year'>$year</option>";
		echo "</select>";
		
		
		echo "month:<select name='selmonth'>";//month
		for($month=0;$month<=11;$month++)
		{
			echo "<option value='$month'>$arr[$month]</option>";
		}
		echo"</select>";
		
		?>
		
		<input type="submit" name="submit" value="show calendar"/>
	</form>
	</body>
</html>
<?php


?>