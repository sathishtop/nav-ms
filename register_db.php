<?php

// Form params

$fname = $_POST['ms_name'];

$dd = $_POST['ms_dd'];

$mm = $_POST['ms_mm'];

$year = $_POST['ms_year'];

$dob=0;


$uname = $_POST['username'];

$email= $_POST['email'];

$referer= 0;


$sex= '' ;//$_POST['sex'];

$clocation= $_POST['current_district'];

$pphoto= '';//$_POST[''];

$interests= $_POST['interests'];

$mobno= $_POST['ms_phone'];

$afc= $_POST['address'];

$native= $_POST['native_district'];

$refid= $_POST['referral'];

$highersec= $_POST['higher_sec'];

$ug= $_POST['ug'];

$pg= $_POST['pg'];

$others= $_POST['odegree'];

$cwin= '';//$_POST[''];

$prevemployers= '';//$_POST[''];

$willing= '';//$_POST[''];

$notiftype= '';//$_POST[''];
// Form Params End


if($fname && $email )
{
	include("connect_db.php");
	
$npass = md5($_POST['password1']);

// Queries 
$userLoginSql = "insert into userlogininfo (  uname , passkey, mail, referer ) values (  '$uname', '$npass','0','0')";

$result = mysql_query($userLoginSql, $con);
if ($result) 
{
	
$query = "select * from userlogininfo where uname='$uname' and passkey='$npass' ";
    $result1 = mysql_query ($query);
    $row = mysql_fetch_array($result1);
    $id  = $row[0];
	echo $id;
	
	
$profileInfoSql = " insert into profileinfo ( id, fname, dob, sex, clocation, pphoto, interests) values ($id,'$fname',$dob,'$sex','$clocation','$pphoto','$interests');";

$conntactInfoSql = "insert into contactinfo (id, email, mobno, afc, native, clocation) values($id, '$email','$mobno','$afc','$native','$clocation');";

$refererInfoSql = "insert into refererinfo (id,refid) values ($id, '$refid');";

$eduDetailsSql = "insert into edudetails (id , highersec, ug, pg, others) values ($id, '$highersec', '$ug','$pg','$others');";

$careerDetailsSql = "insert into careerdetails (id, cwin, prevemployers) values($id, '$cwin', '$prevemployers');";

$notificationDetailsSql = "insert into notificationdetails (id, willing, notiftype) values($id, '$willing', '$notiftype');";

	if( $id )
	{
		
		mysql_query($profileInfoSql);
		mysql_query($conntactInfoSql);
		mysql_query($refererInfoSql);
		mysql_query($eduDetailsSql);
		mysql_query($careerDetailsSql);
		mysql_query($notificationDetailsSql);
	}
	
}
else
{
	$sql = "insert into users_login (  uname , upass) values (  '$email', '$npass')";
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
	
	
require_once('class.phpgmailer.php');
$mail = new PHPGMailer();
$mail->Username = 'nav.ms.06@gmail.com';
$mail->Password = 'NavMs2006';
$mail->From = 'nav.ms.06@gmail.com';
$mail->FromName = 'User Name';
$mail->Subject = 'Subject';
$mail->AddAddress($email);
echo $email;
$mail->Body = 'hi'.$fname.", http://localhost/Crystalx/1/activate.php?id=".$npass."&mode=mail&name=".$uname;
echo $mail->Send();

	
$q1 = "select * from userlogininfo where uname='$refid'";
    $r1 = mysql_query ($q1);
    $r1 = mysql_fetch_array($r1);
    $refererid  = $r1[0];
	echo "refererid =".$refererid;
$query1 = "select * from contactinfo where id='$refererid'";
    $result2 = mysql_query ($query1);
    $row1 = mysql_fetch_array($result2);
    $refmail  = $row1[1];
	
$rmail = new PHPGMailer();
$rmail->Username = 'nav.ms.06@gmail.com';
$rmail->Password = 'NavMs2006';
$rmail->From = 'nav.ms.06@gmail.com';
$rmail->FromName = 'User Name';
$rmail->Subject = 'Subject';
$rmail->AddAddress($refmail);
echo $refmail;
$rmail->Body = 'hi'.$fname.", http://localhost/Crystalx/1/activate.php?id=".$npass."&mode=referer&name=".$uname;;
echo $rmail->Send();

header("Location: http://localhost/Crystalx/1/");

 }
 ?>
