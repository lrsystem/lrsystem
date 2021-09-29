<?php
session_start();

include '../database.php';

$name = $_POST['currentpas'];
$newpass = $_POST['newpass'];
$som = $_SESSION['username'];

$s = " SELECT * from  storage where name = '$som' && password = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){

    $reg = "UPDATE storage set password = '$newpass' where name = '$som'";

    mysqli_query($con, $reg);
    unset($_SESSION['password']);
    $_SESSION['password'] = $newpass;
    echo"<script>localStorage.removeItem('accpas'); location.href='../system/settings.php?done3' </script>";  
}else{
    header("location: ../system/settings.php?err");

}
?>

