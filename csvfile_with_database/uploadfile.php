<?php
if(isset($_POST['submit']))
{
$filename=$_FILE['csvfile']['name'];
move_uploaded_file($_FILE['csvfile'],['temp-data'],$filename);
$conn=mysqli_connect("localhost","root","","csv_db") or  die("connection loss");
$fp=fopen('$info.csv','r');
$arr=fgetcsv($fp);
for($arr=fgetcsv($fp)!feof($fp),$arr=fgetcsv($fp))
{
    "insert into student values ('$arr[0]','$arr[1]','$arr[2]','$arr[3]','$arr[4]')" or die("insert error");
}

}



?>
<form method="post" action="" enctype="multipart/form-data">

<input type="file" name="csvfile" accept="csv"/>
<input type="submit" name="submit" value="uploadfile"/>
</form>