<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['usname'];
$pass = $_POST['pasw'];


$s = "select * from Emp_Table where Name ='$name' && Password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
    header('location:Home1.php');
}
else
{
    echo"<script>alert('Invalid Username or password');window.location='First.php'</script>";
    header('location:First.php');
}
?>