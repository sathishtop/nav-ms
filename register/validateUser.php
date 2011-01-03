<?php

/* RECEIVE VALUE */
$validateValue=$_POST['validateValue'];
$validateId=$_POST['validateId'];
$validateError=$_POST['validateError'];







	/* RETURN VALUE */
	$arrayToJs = array();
	$arrayToJs[0] = $validateId;
	$arrayToJs[1] = $validateError;

// Sql Queries /
 include("../connect_db.php");
// Query database to check if the username is available
$query = "Select * from userlogininfo where uname = '$validateValue' ";
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
  $arrayToJs[2] = "true";			// RETURN TRUE
	echo '{"jsonValidateReturn":'.json_encode($arrayToJs).'}';			// RETURN ARRAY WITH success

}
else
{
  for($x=0;$x<1000000;$x++){
		if($x == 990000){
			$arrayToJs[2] = "false";
			echo '{"jsonValidateReturn":'.json_encode($arrayToJs).'}';		// RETURN ARRAY WITH ERROR
		}
	}

}

?>