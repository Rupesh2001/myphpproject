<form action="p4.php" method="post">
	<input type="hidden" name="txtname" value='<?php echo $_POST["txtname"];?>' />
	<input type="hidden" name="txtadd" value='<?php echo $_POST["txtadd"];?>'/>
	<input type="text" name="txtemail" placeholder="email"/>
	<input type="submit" name="submit" value="Next"/>	
</form>
