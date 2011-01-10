<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<script type="text/javascript" language="javascript">
function getXMLHttp()
{
  var xmlHttp

  try
  {
    //Firefox, Opera 8.0+, Safari
    xmlHttp = new XMLHttpRequest();
  }
  catch(e)
  {
    //Internet Explorer
    try
    {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e)
    {
      try
      {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e)
      {
        alert("Your browser does not support AJAX!")
        return false;
      }
    }
  }
  return xmlHttp;
}

function MakeRequest(url, targetDiv)
{
  var xmlHttp = getXMLHttp();
  
  xmlHttp.onreadystatechange = function()
  {
    if(xmlHttp.readyState == 4)
    {
  document.getElementById(targetDiv).innerHTML =xmlHttp.responseText;
    }
  }

  xmlHttp.open("GET", url, true); 
  xmlHttp.send(null);
}


</script>

<body>

    <div class="left_side">
<span class="m1"><a href="javascript:ajaxpage('password.php', 'content');">Password</a></span>


<span class="m1"><a href="javascript:ajaxpage('profile.php', 'content');">Profile</a></span>
<span class="m1"><a href="javascript:ajaxpage('profile.php', 'content');">New Activity</a></span>
<span class="m1"><a href="#" onclick="window.open('sb/index.php','', 'width=400,height=600,scrollbars=yes');
" > Shoutbox</a></span>
<span class="m1"><a href="javascript:ajaxpage('search.php', 'content');">Search</a></span>


<br />
</div>


<div id="content" class="right_side" >

<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:facepile href="localhost/nav-ms" width="200" max_rows="3"></fb:facepile>
</div>
</div>
</body>
</html>





