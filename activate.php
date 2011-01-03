<?php
include("connect_db.php");

$home = "http://localhost/CrystalX/1/";
$id = $_GET['id'];
$mode = $_GET['mode'];
$uname = $_GET['name'];
$sql=" update userlogininfo set $mode='1' where passkey= '$id' and uname='$uname' ";
echo $sql;
$result = mysql_query($sql, $con);

if (!$result) {
	
    echo "DB Error, could not query the database\n";
	
    echo 'MySQL Error: ' . mysql_error();
	
    exit;
}			

header("Location: ".$home);
?>