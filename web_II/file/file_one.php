<?php
	if(isset($_GET["submit"])){
		$fp = fopen("story.txt","w");
		fwrite($fp,$_GET["story"]);
		echo "complete";
	}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="get">
			<textarea rows='10' cols='10' name="story"></textarea>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>