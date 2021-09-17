<?php
if(isset($_GET['submit']))
{
	$name=$_GET['title'];
	echo"<b> your story title is :</b><h1>$name</h1>";
	$story=$_GET['story'];
	echo"<p>$story</p>";
	$writer=$_GET['wname'];
	echo"<b>your story writer is </b><h4 align='right'><i>$writer</i></h4>";
	
}
?>
<html>
	<head>
		<title>story display</title>
	</head>
	<body>
	<form action="" method="get">
	<input type="text" name="title" placeholder="enter story title"/><br/>
	<textarea rows="10" cols="30" name="story"></textarea><br/>
	<input type="text" name="wname" placeholder="enter writer name"/><br/>
	<input type="submit" name="submit" value="submit"/>
	</body>
</html>