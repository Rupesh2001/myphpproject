<?php
	if(isset($_POST["submit"])){
		$fn = $_FILES['csv']['name'];
		move_uploaded_file($_FILES['csv']['tmp_name'],$fn);
		$fp= fopen($fn,"r");
		$con = mysqli_connect("localhost","root","","php_db_1") or die("connection error");
		$arr = fgetcsv($fp);
		for($arr = fgetcsv($fp); !feof($fp);$arr=fgetcsv($fp)){
			$insert = "insert into csv_upload values('$arr[0]','$arr[1]','$arr[2]','$arr[3]')";
			mysqli_query($con,$insert) or die ("insertion error");
		}
		echo "sucessful";
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="csv" accept="text/csv"/>
	<input type="submit" value="submit" name="submit"/>
</form>