<?php
session_start();
session_destroy();
echo "<script> localStorage.removeItem('accpas')
location.href = '../system/index.php?logout'
</script>";

?>