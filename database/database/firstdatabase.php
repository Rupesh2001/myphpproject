<?php
$con=mysqli_connect("localhost", "root","","first_db") or die("connection error");
/*$createdb="create database first_db";
mysqli_query($con, $createdb) or die("not create");
echo"DB create success";*/

/*$table="create table info (roll int, name varchar(30),email varchar(30),dob datetime,address varchar(20),gender varchar(5))";
mysqli_query($con , $table) or die("error create table");
echo"table create success";*/

/*$insert="insert into info values(1,'rupesh','rmmahat@gmail.com','1999-20-07 12:12:12','bhaktapur','male')";
mysqli_query($con , $insert) or die("error insert");
$insert1="insert into info values(2,'anup','anup@gmail.com','1999-20-07 12:12:12','kathmandu','male')";
mysqli_query($con , $insert1) or die("error insert");
echo"insert  success";*/

$update="update info set label='bachelor' where name like 'anup'";
mysqli_query($con , $update) or die("error update");

/*$update1="UPDATE info SET name='anup' WHERE roll=2";
mysqli_query($con,$update1) or die("error update");
echo"update correct";*/

/*$delete="delete from info WHERE roll=1";
mysqli_query($con , $delete) or die("error delete");*/

//$delete="delete from info WHERE roll=1";
//mysqli_query($con , $delete) or die("error delete");
//echo"delete success";

/*$alter="ALTER TABLE info ADD COLUMN phone VARCHAR(15) AFTER name";
mysqli_query($con,$alter) or die("error add column");

$alter1="ALTER TABLE info ADD COLUMN label VARCHAR(15) AFTER name";
mysqli_query($con,$alter1) or die("error add column");*/


$select="select * from info";
$result=mysqli_query($con,$select) or die("select error");

$arr=mysqli_fetch_array($result);
echo"<br/>";
$number=mysqli_num_rows($result);

echo"<br/>";
echo"total number of data is:";
echo $number;

echo"<br/>";
foreach($arr as $value)
{
	echo $value;
	echo"<br/>";
}

?>







