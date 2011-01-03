<?php

$host = "localhost";

$user = "root";

$pass = "";

$db = "navms06";


$con = mysql_connect($host,$user,$pass);

if (!$con)

  {
	  
  die('Could not connect: ' . mysql_error());
  
  }
  
  mysql_select_db($db, $con);

?>