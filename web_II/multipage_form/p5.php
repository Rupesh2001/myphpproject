<form action="register.php" method="post">
	name<input type="text" name="txtname" value='<?php echo $_POST["txtname"];?>' /><br/>
	address<input type="text" name="txtadd" value='<?php echo $_POST["txtadd"];?>'/><br/>
	email<input type="text" name="txtemail" value='<?php echo $_POST["txtemail"];?>'/><br/>
	number<input type="text" name="m_number"  value='<?php echo $_POST["m_number"];?>'/><br/>
	<input type="submit" name="submit" value="submit"/>	
</form>