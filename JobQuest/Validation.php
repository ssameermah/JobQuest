<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['uname'];
$pass = $_POST['psw'];


$s = "select * from User_Table where Name ='$name' && Password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
    header('location:Home.php');
}
else
{
    header('location:First.php');
}
?>