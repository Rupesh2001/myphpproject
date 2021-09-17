<?php
function display()
{
$a=array(1.1,1.2,1.3,1.4,1.5,1.6,1.7);
$sum=$a[0]+$a[1]+$a[2]+$a[3]+$a[4]+$a[5]+$a[6];
echo $sum;
}
?>
<body>
<input type="textbox" name="text" value="text" id="hello" />
<input type="button" value="sum" name="btn" onclick="display()" />
</body>