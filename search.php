
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
<body marginwidth="50">
<div class="searchParams">

<form name="searchQuery" action="search_results.php" method="post" target="_blank"> 
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
<div id="searchResults">

</div>

</body>
</html>