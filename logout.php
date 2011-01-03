<?php
$userid = $_POST['userid'];

$cookie_domain="";

setcookie("technician", "", time()-60*60 );

$host  = $_SERVER['HTTP_HOST'];

$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$msg   = "Logged Out Successfully!";
header("Location: http://$host$uri/index.php?msg=".$msg);

?>