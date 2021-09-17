<?php
	//create web form that collects two images from user and store it in db then display the image in div with dimension of 300*100 each also validate the image type should be png
	
	if (isset($_POST["submit"])){
		
		$ftype_1 = $_FILES["image_1"]["type"]; 
		$ftype_2 = $_FILES["image_2"]["type"];
		
		$arr_1 = explode ("/" , $ftype_1);
		$arr_2 = explode ("/" , $ftype_2);
		if ($arr_1[1] != "png" || $arr_2[1] != "png"){
			die ("enter correct image format <a href='image_post.php'>again</a>");
		}
		
		$con = mysqli_connect ("localhost","root","","php_db_1") or die ("connection error");
		$title = $_POST["txttitle"];
		$fname_1 = $_FILES["image_1"]["name"];
		$fname_2 = $_FILES["image_2"]["name"];
		
		$insert ="insert into image_post(title,image_location) values ('$title','$fname_1');";
		mysqli_query($con,$insert) or die ("insertion error");
		$insert ="insert into image_post(title,image_location) values ('$title','$fname_2');";
		mysqli_query($con,$insert) or die ("insertion error");
		
		$select = "select * from image_post";
		$result = mysqli_query($con,$select) or die ("retrival error");
		while ($arr = mysqli_fetch_assoc($result)){
			echo "<div style='width:300px;height:100px;'><img src='$arr[image_location]' style='width:100%;height:100%'/></div>";
		}
	}
	else{
?>

<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="txttitle" placeholder="enter title"/><br/>
	<input type="file" name="image_1" accept="image/*"/><br/>
	<input type="file" name="image_2" accept="image/png"/><br/>
	<input type="submit" value="submit" name="submit"/><br/>
</form>
<?php
	}
?>