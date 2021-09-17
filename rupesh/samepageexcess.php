<?php
if(isset($_GET['submit']))
{
$a=$_GET['hello1'];

$b=$_GET['hello'];
echo"<h1> welcome $a,you are from $b</h1>";
}
?>
<html>
<head>
<title>my bio</title>
</head>
<body>
<form action="" method="get">
name:<input type="textbox" name="hello1"  id="hello1" placeholder="enter your name"/><br/>
address:<input type="textbox" name="hello" id="hello" placeholder="addresss"/><br/>
<input type="submit" name="submit" type="submit"/><br/>
</form>
</body>
</html>