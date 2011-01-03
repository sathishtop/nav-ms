<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home </title>
 <style type="text/css" media="screen">
  @import url("css/layout.css");
  </style>
  
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
  </script>
 </head>
<body>


</body>
</html>