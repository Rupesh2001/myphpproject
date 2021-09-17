<html>
	<head>
		<title></title>
		<style>
			p{
				border:solid 1px;
				padding:10px;
				width:50%;
			}
		</style>
	</head>
<form action="" method="get">
	<textarea name="txtstory" rows="4" cols="50">
	</textarea>
	<input type="submit" name="submit" value="submit"/>
</form>
<p>
	<?php
		if (isset($_GET["submit"])){
			echo $_GET["txtstory"];
		}
	?>
</p>