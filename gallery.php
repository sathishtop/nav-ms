<?php
$userid= isset($_COOKIE['technician'])? $_COOKIE['technician'] : '';
$phone = isset($_COOKIE['phone'])? $_COOKIE['phone'] : 'N/A';
$email =  isset($_COOKIE['email'])? $_COOKIE['email'] : 'N/A';
$name =  isset($_COOKIE['name'])? $_COOKIE['name'] : 'N/A';
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if($userid=='' )	
{
	$dispmessage ="You must be logged in to view the gallery. Please Login";
	setcookie("dispmessage","You must be logged in to view the gallery. Please Login",60);
	
	
	
	$path="";
	
	echo $dispmessage;
}
else 
{
	$targetpath="gallery.html";
	header("Location: http://$host$uri/$targetpath");
}
?>