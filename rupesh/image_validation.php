<?php
if(isset($_POST['submit']))
{
	
	$file=$_FILES['fileupload']['name'];
	move_uploaded_file($_FILES['fileupload']['tmp_name'],$file);
	
	$ext=pathinfo($file,PATHINFO_EXTENSION);
	if($ext=="jpg")
	{
		echo $ext;
		echo"<img src='$file' width='100' height='100'/>";
	}
	else
	{
		echo "<h2>you must submit jpg file only</h2>";
	}
}

?>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="fileupload"/>
<input type="submit" name="submit" value="submit"/>
</form>