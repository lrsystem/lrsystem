<?php
session_start();

include '../database.php';
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from  storage where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
echo "<script> location.href= '../system/welcome.php' + '?login';
localStorage.setItem('logintimeforlr' , new Date());
</script>";}else{

header("location: ../system/index.php?err");}
?>