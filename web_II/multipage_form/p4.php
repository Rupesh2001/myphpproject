<form action="p5.php" method="post">
	<input type="hidden" name="txtname" value='<?php echo $_POST["txtname"];?>' />
	<input type="hidden" name="txtadd" value='<?php echo $_POST["txtadd"];?>'/>
	<input type="hidden" name="txtemail" value='<?php echo $_POST["txtemail"];?>'/>
	<input type="text" name="m_number"  placeholder="enter number"/>
	<input type="submit" name="submit" value="Next"/>	
</form>
