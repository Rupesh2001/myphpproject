<?php
	if(isset ($_POST["submit"])) {
		$con = mysqli_connect ("localhost","root","","php_db_1") or die ("connection error");
		$image = $_FILES['profile']['name'];
		$fn = "image/".$_FILES['profile']['name'];
		if (!empty($_FILES['profile']['tmp_name'])){
			if ($size = getimagesize($_FILES['profile']['tmp_name'])){
			//if (isset ($size)){
			move_uploaded_file($_FILES['profile']['tmp_name'],$fn);
		
			$insert = "insert into image_post (image_location) values ('$image');";
			mysqli_query ($con,$insert) or die("insertion error");
			}
			else {
				echo "wrong image format";
			}
		}
	}
?>

<html>
	<head>
		<title></title>
		<style>
			#display{
				width:500px;
				height:300px;
				background-color:green;
			}
			#display>img{
				width:100%;
				height:100%;
			}
		</style>
	</head>
<div id="display">
	<?php 
	if(isset ($_POST["submit"])) {
		$con = mysqli_connect ("localhost","root","","php_db_1") or die ("connection error");
		$fn = $_FILES['profile']['name'];
		$select = "select * from image_post where image_location='$fn';";
		$result = mysqli_query($con , $select ) or die ("retrival error");
		//echo mysqli_num_rows($result);
		if (mysqli_num_rows($result) !=0){
			$arr = mysqli_fetch_assoc($result);
			echo "<img src='image/$arr[image_location]' />";
		}
		else{
			echo "insert image first";
		}
	}
	?>
</div>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="profile" />
	<input type="submit" name="submit" value="submit"/>
</form>