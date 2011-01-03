<html>
<head>
</head>
<body>

<?php
if(isset($_REQUEST['searchfield']) && isset($_REQUEST['searchquery']))
{
	$field = $_REQUEST['searchfield'];
	$value = $_REQUEST['searchquery'];
	$sql='';
	if($field=='uname')
	   $query= "select id  from userlogininfo where uname like '%$value%'";
	else if ($field =='name')
	   $query="select id from profileinfo where fname like '%$value%'";
	   
   else if ($field =='location')
	   $query="select id from contactinfo where native like '%$value%' or clocation like '%$value%'";	   
	   
   else if ($field =='qualification')
	   $query="select id from edudetails where ug like '%$value%' or pg like '%$value%' or others like '%$value%'"; 

     
	   include("connect_db.php");
 if ($field =='any')
{
	
$result1 = mysql_query("select id  from userlogininfo where uname like '%$value%'");
$result2=mysql_query("select id from profileinfo where fname like '%$value%'");
$result3=mysql_query("select id from contactinfo where native like '%$value%' or clocation like '%$value%'");
$result4=mysql_query("select id from edudetails where ug like '%$value%' or pg like '%$value%' or others like '%$value%'");

	$query1 = "select * from userlogininfo where id=''";
//changed this to a for loop so we can use the number of rows
for($i = 0; $i <  mysql_num_rows($result1); $i++) {
$row1 = mysql_fetch_array($result1);
				$query1.= " or id=".$row1['id'];
}
for($i = 0; $i <  mysql_num_rows($result2); $i++) {
$row1 = mysql_fetch_array($result2);
				$query1.= " or id=".$row1['id'];
}
for($i = 0; $i <  mysql_num_rows($result3); $i++) {
$row1 = mysql_fetch_array($result3);
				$query1.= " or id=".$row1['id'];
}
for($i = 0; $i <  mysql_num_rows($result4); $i++) {
$row1 = mysql_fetch_array($result4);
				$query1.= " or id=".$row1['id'];
}

}
else
{
	$result1 = mysql_query($query);
	$query1 = "select * from userlogininfo where id=''";
	
	$num_rows1 = mysql_num_rows($result1);

//changed this to a for loop so we can use the number of rows
for($i = 0; $i < $num_rows1; $i++) {
$row1 = mysql_fetch_array($result1);
				$query1.= " or id=".$row1['id'];
}
}
	$result = mysql_query($query1);
	$columns = 1;
//we add this line because we need to know the number of rows
$num_rows = mysql_num_rows($result);
echo "<TABLE BORDER=\"0\" width=\"100%\">";
//changed this to a for loop so we can use the number of rows
for($i = 0; $i < $num_rows; $i++) {
$row = mysql_fetch_array($result);
if($i % $columns == 0) {
//if there is no remainder, we want to start a new row
if($i%2==0)
echo "<TR class=\"searchResultsRowEven\" >";
else
echo "<TR class=\"searchResultsRowOdd\" >";
}
echo "<TD><a href=profile.php?id=".$row['id'].">" . $row['uname'] ."</a>". "</TD>";
if(($i % $columns) == ($columns - 1) || ($i + 1) == $num_rows) {
//if there is a remainder of 1, end the row
//or if there is nothing left in our result set, end the row
echo "</TR>";
}
}
echo "</TABLE>";

}
?>
</body>
</html>