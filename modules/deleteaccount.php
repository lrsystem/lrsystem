<?php
session_start();

include '../database.php';
$som = $_SESSION['username'];

$s = " SELECT * from  storage where name = '$som'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
$some = "DELETE from storage where name = '$som'";

mysqli_query($con, $some);
session_destroy();
echo "<script> localStorage.removeItem('accpas') 
location.href = '../system/index.php?del'
</script>";

}else{
header("location : ../system/settings.php?deleer");}
?>