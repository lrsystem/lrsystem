<?php
session_start();
include '../database.php';

$name = $_POST['gmail'];
$som = $_SESSION['username'];

$s = " SELECT * from  storage where name = '$som' && emailgoogle = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location: ../system/settings.php?exists1");
}else{
    $reg = "UPDATE storage set emailgoogle = '$name' where name = '$som'";
    mysqli_query($con, $reg);
header("location: ../system/settings.php?done2");
}
?>