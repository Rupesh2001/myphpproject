<?php
	$connection = mysqli_connect ("localhost","root","","php_db_1") or die ("connection error");
	$txttitle = $_POST["txttitle"];
	$filename = "uploads/".$_FILES['profilepic']['name'];
	move_uploaded_file  ($_FILES['profilepic']['tmp_name'],$filename);
	echo "<img src='$filename'/>";
	$insert = "insert into image_post values ('$txttitle','$filename')";
	mysqli_query ($connection,$insert) or die ("inserction error");
	echo "$filename";
?>