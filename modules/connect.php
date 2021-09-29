
<?php
$con = mysqli_connect($host , $username , $password );
mysqli_select_db($con , 'website');
// Create connection
$con = new mysqli($host, $username, $password, 'website');
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>