
<html>
<head>
<style type="text/css">
.searchParams
{
float: none;
padding-left:10;
padding-right:20;
border:1px solid #CCCCCC;
background-color:#FFC;
color: #000000; 
}
.m1
{
text-shadow:#3F3;
float:inherit;
text-indent:inherit;
width: 120px;
background-image:url(images/mnu.gif);
background-repeat:no-repeat;
font-family:"MS Serif", "New York", serif;
font-size:large;
font-style:inherit;
}
.m
{
float: left;
padding: 0 0 12px 15px;
width: 120px;
background-image:url(images/m2.jpg);
color: #000000; 
background-repeat:no-repeat;
}
.searchResultsRowEven
{
float: none;
padding-top:0;
padding-bottom:0;
padding-left:10;
padding-right:20;
margin: 20px 0px 20px 0px;
padding:0px 0px 25px 15px;
border:1px solid #CCCCCC;
background-color:#6FC;
color: #000000; 
}

.searchResultsRowOdd
{

float: none;

padding-top:0;
padding-bottom:0;
padding-left:10;
padding-right:20;
margin: 20px 0px 20px 0px;
padding:0px 0px 25px 15px;
border:1px solid #CCCCCC;
background-color:#6F6;
color: #000000; 
}
</style>
</head>
<body>
<div class="searchParams">

<form name="searchQuery" action="search.php" method="post"> 
<table>
<tr> <td class="m1"> Search By :</td>
<td>
<select name="searchfield">

<option value="any"> Any </option> 

<option value="name"> Name</option> 

<option value="uname">Username</option> 

<option value="location"> Location</option> 

<option value="qualification"> Qualification</option> 
</select>
</td>
<td> <input type="text" name="searchquery">
 </td>
 
 <td><input type="submit" value="Find Friends">  </td></tr>
</table>
</form>
</div>
<?php
if(isset($_POST['searchfield']) && isset($_POST['searchquery']))
{
	$field = $_POST['searchfield'];
	$value = $_POST['searchquery'];
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