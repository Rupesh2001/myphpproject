<?php
	if (isset($_GET['submit'])){
		foreach ($_GET as $value)
			$a[]=$value;
		$sum = 0;
		foreach ($a as $value)
			$sum = $sum + intval($value);
		echo "<h1>$sum</h1>";
	}
?>

<form action="" method="get">
	<?php
		for ($i=1;$i<=10;$i++){
			echo "<input type='text' placeholder='enter integer' name='$i' /><br/>";
		}
		echo"<input type='submit' vlaue='submit' name='submit'/>";
	?>
</form>