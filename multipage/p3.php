<?php

?>
<form action="signup.php"method="POST">

<input type="text" name="name" value="<?php echo $_POST['name'];?>"/>
<input type="text" name="add" value="<?php echo $_POST['add'];?>"/>
<input type="submit" name="submit" value="submit"/>
</form>