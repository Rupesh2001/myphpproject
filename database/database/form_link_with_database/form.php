<?php
$username = filter_input(INPUT_POST, 'username');
//$address = filter_input(INPUT_POST, 'address');
$email = filter_input(INPUT_POST, 'email');
//$phone = filter_input(INPUT_POST, 'phone');
if (!empty($username)){
//if (!empty($address)){
if (!empty($email)){
//	if (!empty($phone)){
// Create connection
$conn =mysqli_connect("localhost","root","","form_db") or die("connection error");

/*$table="create table form(name varchar(20),email varchar(20))" or die("error create table");
mysqli_query($conn,$table) or die("table not found");*/



$insert="insert into form values('$username','$email')" or die("insert error");
mysqli_query($conn,$insert) or die("insert error");
}
}


/*$delete="delete from form where name='rupesh'" or die("error delete");
mysqli_query($conn,$delete) or die("delete not found");
echo"success create table and insert";*/
?>