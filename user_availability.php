<?php
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use

//this varible contains the array of existing users

include("connect_db.php");


$username = $_POST['user_name'];
 
 

// Query database to check if the username is available
$query = "Select * from userlogininfo where uname = '$username'";
// Execute the above query using your own script and if it return you the
// result (row) we should return negative, else a success message.
 
$result = mysql_query($query,$con);	

//$result==null? :available=false;
$theQuery = mysql_query($query);
$returned_rows = mysql_num_rows ($theQuery);
if ($returned_rows == 0){
echo "no";
}else{
echo "yes";
}



?>