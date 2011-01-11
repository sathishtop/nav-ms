<?php

$host = "localhost";

$user = "365755_sathish";

$pass = "hariharan";

$db = "acsathish_zxq_navms06";


$con = mysql_connect($host,$user,$pass);

if (!$con)

  {
	  
  die('Could not connect: ' . mysql_error());
  
  }
  
  mysql_select_db($db, $con);

?>