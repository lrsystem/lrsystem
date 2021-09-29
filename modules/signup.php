<?php
session_start();

include '../database.php';


$name = $_POST['user'];
$pass = $_POST['password'];
$emailss = $_POST['gmail'];

$s = " SELECT * from  storage where name = '$name' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
if($num == 1){
        header("location: ../system/index.php?err1");

}

else{
    $reg = "Insert into storage(name, password, emailgoogle) values ('$name' , '$pass' , '$emailss') ";
    mysqli_query($con, $reg);
header("location: ../system/index.php?done");

}
?>

