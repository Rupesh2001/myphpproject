<?php
	if (isset($_GET['submit'])){
		if (!isset($_GET['terms'])){
			die ("<a href='terms.php'>error</a>");
		}
		
	}
?>

<form action="" method="get"/>
	
	<input type="checkbox" name="terms" value="terms"/>terms and condition
	<input type="submit" name="submit" value="submit"/>
	
</form>