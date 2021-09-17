<?php
	if(isset($_POST['submit']))
	{
		
		$name=$_POST['name'];
	$filename="uploadedimages/".$_FILES['fileupload']['name'];
	move_uploaded_file($_FILES['fileupload']['tmp_name'],$filename);
	
	
	echo"<img src='$filename' width='300' height='300' alt='$name'/>";	
	}
?>
<form action="" method="post" enctype="multipart/form-data">

<input type="text" name="name" placeholder="enter your name"/><br/>
<input type="file" name="fileupload" accept="image/*"/><br/>
<input type="submit" name="submit" value="file upload"/><br/>
</form>