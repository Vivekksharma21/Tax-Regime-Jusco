#code is written by Vivek sharma. contact number 7979015053..
#mail id : vivekrsashok2003@gmail.com
<?php 
session_start();
//$_SESSION = array();
session_unset();
session_destroy();
header("location:login12.php");
?>
