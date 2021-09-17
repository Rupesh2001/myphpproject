<?php 
//$create="create database LMC";
   $con=mysqli_connect("localhost","root","","LMC") or die("error");
   /* mysqli_query($con,$create) or die("sql infection");
    mysqli_select_db($con,"LMC");
   
    echo"create successful";
   
    $table ="create table info (id int ,name varchar(10),password varchar(10),address varchar
    (10),email varchar(20),phone int(10))";
    mysqli_query($con,$table) or die("create error");
    echo"success";*/
?>


<?php
//id name address email phone 
//database name= LMS
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['username'];
    $password=$_POST['pwd'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $filename=$_FILES['fileupload']['name'];
    move_uploaded_file($_FILES['fileupload']['tmp_name'],$filename);

 

    if(!empty($id)&&!empty($name)&&!empty($password)&&!empty($address)&&!empty($email)&&!empty($phone))
    {
        $con=mysqli_connect("localhost","root","","lmc") or die("error in create");
        $insert="insert into info values('$id','$name','$password','$address','$email','$phone','$filename')";
        mysqli_query($con,$insert) or die("error in insert sql");
        echo"<h1> insert successful please check database</h1>";
        
    }
    else
    {
        echo"<h1>PLEASE TRY AGAIN</h1>";
        echo"one of the form is empty";
    }
}

 


    
?>
<form method="POST"  enctype="multipart/form-data">
<input type="txt" name="id" placeholder="enter id"/><br/>
<input type="txt" name="username" placeholder="enter name"/><br/>
<input type="password" name="pwd" placeholder="enter password"/><br/>
<input type="text" name="address" placeholder="enter address"/><br/>
<input type="text" name="email" placeholder="enter email"/><br/>
<input type="text" name="phone" placeholder="enter phone number"/><br/>
<input type="file" name="fileupload" /><br/>
<input type="submit" name="submit" value="submit"/>
</form>




