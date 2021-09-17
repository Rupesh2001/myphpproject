
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="your_csv" accept="text/csv">
	<input type="submit" name="submit" value="submit">
</form>
<?php
//write php program that reads csv file which contain (itemid,itemdesc,rate,qty) and insert them into database.
	if (isset($_POST['submit'])){
		$con =mysqli_connect("localhost","root","","php_db_1") or die ("connection error");
		
		$fn = $_FILES['your_csv']['name'];
		//move_uploaded_file($_FILES['your_csv']['tmp_name'],$fn);
		$fp =fopen($fn,'r');
		$arr = fgetcsv($fp);
		while (!feof($fp)){
			$arr = fgetcsv($fp);
			$insert="insert into csv_items_2019 values ('$arr[0]','$arr[1]','$arr[2]','$arr[3]');";
			mysqli_query($con ,$insert) or die ("insertion error");
		}
		echo "sucessful";
	}
?>
