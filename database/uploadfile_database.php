<?php
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
	$filename=$_FILES['fileupload']['name'];
	move_uploaded_file($_FILES['fileupload']['tmp_name'],$filename);
	
	
	//echo"<img src='$filename' width='300' height='300' alt='$name'/>";
	$conn=mysqli_connect("localhost","root","","image_db") or die("connection error");
	$insert="insert into myimage values('$id','$name','$filename')" or die("insert error");
	mysqli_query($conn,$insert) or die("insert query error");
	}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="id" placeholder="enter your id"/><br/>
<input type="text" name="name" placeholder="enter your name"/><br/>
<input type="file" name="fileupload" accept="image/*"/><br/>
<input type="submit" name="submit" value="file upload"/><br/>
</form>