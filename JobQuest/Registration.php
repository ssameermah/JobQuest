<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['uname'];
$pass = $_POST['psw'];
$Email = $_POST['EmailId'];

$s = "select * from User_Table where Name ='$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num==1)
{       
    echo"<script>alert('Username Already Taken');window.location='First.php'</script>";
}
else
{
    $reg = "insert into user_table(Name,Password,Email_Id) values('$name','$pass','$Email')";
    mysqli_query($con,$reg);
    echo"<script>alert('Registration Successful');window.location='First.php'</script>";
}
?>