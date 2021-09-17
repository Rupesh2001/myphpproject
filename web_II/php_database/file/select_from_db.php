<?php
	$connection = mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
	$select = "select * from image_post;";
	$result = mysqli_query($connection,$select) or die ("retrival error");
	if (mysqli_num_rows($result)!=0){
		while ($row=mysqli_fetch_assoc($result)){
			echo "<img src='$row[image_location]'/>";
		}
	}
?>