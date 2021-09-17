crete a web form which collect name and gender of user and display the name with title mr/ms acc to data collected
<?php
	if(isset ($_GET["submit"])){
		$g=$_GET ["gender"];
		if($g == '1')
			echo 'Mr.'. $_GET["txtname"];
		else
			echo 'Ms.'. $_GET["txtname"];
	}
?>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="txtname" placeholder="name"/><br/>
			gender:
			<input type="radio" name="gender" value="1"/>male
			<input type="radio" name="gender" value="0"/>female<br/>
			<input type="submit" value="submit" name="submit"/>
		</form>
	</body>
</html>