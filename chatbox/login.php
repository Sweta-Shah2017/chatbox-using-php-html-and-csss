<?php
session_start();
include'dbc.php';

$uname=$_POST['uname'];
$pass=$_POST['password'];
$sql="select * from signup WHERE username='$uname' AND password='$pass' ";
 $result=$conn->query($sql);

if(!$row=$result->fetch_assoc())
{
  header("Location:error.php");  
}
else
{
    $_SESSION['name']=$_POST['uname'];
    header("Location:home.php");
}
?>