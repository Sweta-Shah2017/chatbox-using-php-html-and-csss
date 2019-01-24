<?php
session_start();
include 'dbc.php';
$name=$_SESSION['name'] ;
//copy from login.php...$_SESSION['name']=$_POST['uname'];
$msg=$_POST['msg'];

$sql="insert into posts(msg_name,msg) values('$name','$msg')";

    $result=$conn->query($sql);


header("Location:home.php")
?>