<?php

$uname = $_POST['uname'];

$upass = md5($_POST['pass']);


include("connect_db.php");

$sql = "select id from userlogininfo where uname='$uname' and passkey='$upass' and mail=1 and referer=1 ";

$query = "select * from userlogininfo where uname='$uname' and passkey='$upass' and mail=1 and referer=1";


 $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    $uid  = $row["id"];


	if( $uid )
	{
		setcookie("technician", $uid, time()+3600);
		
		$sql1 = "select * from profileinfo where id=$uid";
			$userid= isset($_COOKIE['technician'])? $_COOKIE['technician'] : '';


			$result1 = mysql_query ($sql1);
	     
		 $row1 = mysql_fetch_array($result1);
     	 
		 $fname   = $row1[1];
		 
		 setcookie("name", $fname, time()+3600);

	
			
	}
    //$address is later used as a parameter to "mail()" as $row is used for another query before we get to that point
	$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

header("Location: http://$host$uri/");

?>