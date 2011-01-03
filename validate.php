<?php
 
$username = $_GET['username1'];
 
if(strlen($username) <= 0)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Invalid username, please try again.'
  ));

}
 
 include("connect_db.php");
// Query database to check if the username is available
$query = "Select * from users_login where uname = '$username' ";
// Execute the above query using your own script and if it return you the
// result (row) we should return negative, else a success message.
 
$result = mysql_query($query,$con);	

//$result==null? :available=false;
$theQuery = mysql_query($query);
$returned_rows = mysql_num_rows ($theQuery);
if ($returned_rows == 0){
 $available=true;
}else{
 $available=false;
}

if($available==true)
{
  echo json_encode(array('code'  =>  1,
  'result'  =>  "<img src=\"images\ok.bmp\" width='10px	' height='10px'>$username is still available "
  ));

}
else
{
  echo  json_encode(array('code'  =>  0,
  'result'  =>  "<img src=\"images\wrong.jpg\"> Sorry but username $username is already taken."
  ));

}

?>