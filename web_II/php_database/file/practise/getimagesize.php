<?php
	if (isset($_POST["submit"])){
		$fn = $_FILES["image"]["tmp_name"];
		//echo $fn;
		if (is_array(getimagesize($fn))){
			echo"yes";
		}
		else {
			echo "no";
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="image" />
	<input type="submit" value="submit" name="submit"/>
</form>