  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Nav-Marvellous Stars</title>
  <style type="text/css" media="screen">
  @import url("css/layout.css");
  </style>
  <style type="text/css">

.left_side 
{
float: left;
margin: 20px 0 20px 0;
padding: 0 0 25px 15px;
width: 150px;
background-color: #FFFFFF;
color: #000000; 
}
.m1
{
	text-shadow:#3F3;
float:inherit;
text-indent:inherit;
text-decoration:underline;

padding:0 0  20px 15px ;
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
.right_side 
{
float:left;
width:680px;
color: #000000;
background-color: #FFFFFF;
margin: 20px 0px 20px 0px;
padding:0px 0px 25px 15px;
	
} 
</style>
<script type="text/javascript">
  //function to create ajax object
  function pullAjax(){
    var a;
    try{
      a=new XMLHttpRequest()
    }
    catch(b)
    {
      try
      {
        a=new ActiveXObject("Msxml2.XMLHTTP")
      }catch(b)
      {
        try
        {
          a=new ActiveXObject("Microsoft.XMLHTTP")
        }
        catch(b)
        {
          alert("Your browser broke!");return false
        }
      }
    }
    return a;
  }
 
  function validate()
  {
    site_root = '';
    var x = document.getElementById('uname');
    var msg = document.getElementById('msg');
    user = x.value;
 
    code = '';
    message = '';
    obj=pullAjax();
    obj.onreadystatechange=function()
    {
      if(obj.readyState==4)
      {
        eval("result = "+obj.responseText);
        code = result['code'];
        message = result['result'];
 
        if(code <=0)
        {
          x.style.border = "1px solid red";
          msg.style.color = "red";
        }
        else
        {
          x.style.border = "1px solid #000";
          msg.style.color = "green";
        }
        msg.innerHTML = message;
      }
    }
    obj.open("GET","validate.php?username1="+user,true);
    obj.send(null);
  }

function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
		 field.style.border = "1px solid red";

    alert(alerttxt);
	return false;
    }
  else
    {
		field.style.border = "1px solid green";
		
    return true;
    }
  }
}


function callAjax()
{
	var searchField = document.getElementById('searchfield').value;
	var searchQuery = document.getElementById('searchquery').value;
	var url="search_results.php?searchfield="+searchField+"&searchquery="+searchQuery;
	ajaxpage(url, 'searchResults');
	}
	


</script>
  
  <script type="text/javascript">
  var bustcachevar=1 
  var loadedobjects=""
  var rootdomain="http://"+window.location.hostname
  var bustcacheparameter=""
  
  function ajaxpage(url, containerid){
  var page_request = false
  if (window.XMLHttpRequest) // if Mozilla, Safari etc
  page_request = new XMLHttpRequest()
  else if (window.ActiveXObject){ // if IE
  try {
  page_request = new ActiveXObject("Msxml2.XMLHTTP")
  } 
  catch (e){
  try{
  page_request = new ActiveXObject("Microsoft.XMLHTTP")
  }
  catch (e){}
  }
  }
  else
  return false
  page_request.onreadystatechange=function(){
  loadpage(page_request, containerid)
  }
  if (bustcachevar) //if bust caching of external page
  bustcacheparameter=(url.indexOf("?")!=-1)? "&"+new Date().getTime() : "?"+new Date().getTime()
  page_request.open('GET', url+bustcacheparameter, true)
  page_request.send(null)
  }
  
  function loadpage(page_request, containerid){
  if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
  document.getElementById(containerid).innerHTML=page_request.responseText
  }
  
  function loadobjs(){
  if (!document.getElementById)
  return
  for (i=0; i<arguments.length; i++){
  var file=arguments[i]
  var fileref=""
  if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
  if (file.indexOf(".js")!=-1){ //If object is a js file
  fileref=document.createElement('script')
  fileref.setAttribute("type","text/javascript");
  fileref.setAttribute("src", file);
  }
  else if (file.indexOf(".css")!=-1){ //If object is a css file
  fileref=document.createElement("link")
  fileref.setAttribute("rel", "stylesheet");
  fileref.setAttribute("type", "text/css");
  fileref.setAttribute("href", file);
  }
  }
  if (fileref!=""){
  document.getElementsByTagName("head").item(0).appendChild(fileref)
  loadedobjects+=file+" " //Remember this object as being already added to page
  }
  }
  }
  
  function getURLParam(strParamName){
  var strReturn = "";
  var strHref = window.location.href;
  if ( strHref.indexOf("?") > -1 ){
    var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
    var aQueryString = strQueryString.split("&");
    for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
      if ( 
aQueryString[iParam].indexOf(strParamName.toLowerCase() + "=") > -1 ){
        var aParam = aQueryString[iParam].split("=");
        strReturn = aParam[1];
        break;
      }
    }
  }
  return unescape(strReturn);
}
  function alertMsg()
  {
	var msg  =  getURLParam("msg");
	if(msg!='')
	alert(msg);
	  }

  </script>
  	
    
  </head>
  <!--<body onload="ajaxpage('ibanner.php', 'contentarea');">-->
  <body onload="javascript:ajaxpage('uhome.php', 'contentarea');alertMsg();" >
  <div id="layout">
    <div id="header">
      <div id="logo"><a href="#"><img src="images/site_logo.jpg" alt="" /></a></div>
     <?php
     
     include("login.php");
     ?>
    </div>
    <div id="body_container">
      <div id="body_container_inner">
        <div id="menu">
          <ul>
            <li class="first"> <a href="index.php"> home</a></li>
            <?php 
			$userid= isset($_COOKIE['technician'])? $_COOKIE['technician'] : '';
$phone = isset($_COOKIE['phone'])? $_COOKIE['phone'] : 'N/A';
$email =  isset($_COOKIE['email'])? $_COOKIE['email'] : 'N/A';
$name =  isset($_COOKIE['name'])? $_COOKIE['name'] : 'N/A';

if($userid =='' )	
{
            echo " <li><a href=\"register.php\">Register</a></li>";
}
else
{
            echo " <li><a href=\"javascript:ajaxpage('profile.php', 'contentarea');\">My Profile</a></li>";
	}
?>
            <li><a href="javascript:ajaxpage('forum.php', 'contentarea');">Forum</a></li>
            <li><a href="javascript:ajaxpage('projects.php', 'contentarea');">Projects</a></li>
            <li><a href="javascript:ajaxpage('gallery.php', 'contentarea');">Gallery</a></li>   
            <li><a href="javascript:ajaxpage('contact_us.php', 'contentarea');">Contact Us</a></li>
    		</ul>
        </div>
       
      
       
  
        <div  id="contentarea" class="container_row ">
        	<div class="find_more" id="test">
                    
                               
			</div>

    </div>
 

   
      
        <div id="footer">
          <div class="footer_link">
            <ul style="color:#FFf;">
            All rights reserved.
            </ul>
          </div>
        </div>
</div>
</div>	        </div>
     
  </body>
  </html>
