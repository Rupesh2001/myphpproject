<?php
$con=mysqli_connect("localhost", "root", "","db_2021") or die("connection error");
//********database creation*********
/*$createdb="create database db_2021";
mysqli_query($con, $createdb) or die("not create");
echo"DB create success";*/
//**********TABLE CREATION***********
/*$table="create table info (roll int, name varchar(30),email varchar(30),dob datetime,address varchar(20),gender varchar(5))";
mysqli_query($con , $table) or die("error create table");
echo"table create success";*/
//********insert*********
$insert="insert into info values(1,'rupesh','rmmahat@gmail.com','1999-20-07 12:12:12','bhaktapur','male')";
mysqli_query($con , $insert) or die("error insert");
$insert1="insert into info values(2,'rupesh','anup@gmail.com','1999-20-07 12:12:12','bhaktapur','male')";
mysqli_query($con , $insert1) or die("error insert");
echo"insert  success";
//************update*********
//$update="update info set dob='1919-01-01' where name like 'rupesh'";
//mysqli_query($con , $update) or die("error update");
//**********update 2********
//$update1="UPDATE info SET name='anup' WHERE roll=2";
//mysqli_query($con,$update1) or die("error update");
//echo"update correct";
//********delete************
//$delete="delete from info WHERE roll=2";
//mysqli_query($con , $delete) or die("error delete");
//********delete 2**********
//$delete="delete from info WHERE roll=1";
//mysqli_query($con , $delete) or die("error delete");
//echo"delete success";
?>



