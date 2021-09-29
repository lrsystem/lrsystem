<?php
session_start();
include '../database.php';

$name = $_POST['user'];
$pass = $_POST['gmail'];
$setpass = $_POST['password'];
$s = " select * from  storage where name = '$name' && emailgoogle = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
$command = "UPDATE storage set password = '$setpass' where name = '$name'";
mysqli_query($con, $command);

header("location: ../system/index.php?done1");
}else{

header("location: ../system/index.php?err2");}
?>