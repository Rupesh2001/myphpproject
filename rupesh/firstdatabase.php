<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo "connection fail";
}
else
{
	echo" created";
}

$dbcreate="create database first_db";
mysqli_query($conn,$dbcreate);

$table = "CREATE TABLE MyGuests (id INT(6) PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30) NOT NULL,email VARCHAR(50),reg_date int)";

mysqli_query($conn,$table) or die("error create table");
mysqli_select_db($conn,"first_db");
$sql = "INSERT INTO MyGuests (id, firstname,lastname, email,reg_date)
VALUES (2,'John', 'thapa', 'john@example.com',4)";
$sq2 = "INSERT INTO MyGuests (id, firstname,lastname, email,reg_date)
VALUES (3,'hello', 'Doe', 'hello@example.com',5)";
mysqli_query($conn,$sql) or die("error sql");
mysqli_query($conn,$sq2) or die("error sql");
//*****************
$update = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
mysqli_query($conn,$update);



?>



