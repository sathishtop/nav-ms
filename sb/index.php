<html>
<head><style>
@CHARSET "UTF-8";
/******* GENERAL RESET *******/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em,
font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody,
 tfoot, thead, tr, th, td {
border:0pt none;
font-family:inherit;
font-size: 100%;
font-style:inherit;
font-weight:inherit;
margin:0pt;
padding:0pt;
vertical-align:baseline;
}

.clear{
	clear: both;
	height: 0;
	visibility: hidden;
	display: block;
}
a{
	text-decoration: none;
}
strong{
	font-weight: 700;
}
/******* GENERAL RESET *******/
/******* LOGO *******/
#logo{
	margin-top: 1em;
	display: block;
}
/******* /LOGO  *******/
/******* FORM *******/
#form{
	margin: 5em auto 3em;
	width: 300px;
}
#form table td{
	text-align: left;
	font-size: 11px;
}
#form label{
	font-weight: 700;
}
#form input{
	border: 1px solid #d0ccc9;
	background: #fff;
	color: #5f95ef;
	font-size: 11px;
	font-weight: 700;
}
#form input.text{
	font-weight: normal;
	color: #565656;
	border: 1px solid #9c9c9c;
	width: 250px;
	padding: 2px;
	margin-bottom: 5px;
	text-align: left;
}
#form input.text.user{
	width: 100px;
}
/******* /FORM *******/
/******* MENU *******/
#container{
	margin: 1em auto;
	width: 400px;
}
#container ul{
	list-style: none;
	list-style-position: outside;
}
#container ul.menu li{
	float: left;
	margin-right: 5px;
	margin-bottom: -1px;
}
#container ul.menu li{
	font-weight: 700;
	display: block;
	padding: 5px 10px 5px 10px;
	background: #fff;
	border: 1px solid #d0ccc9;
	border-width: 1px 1px 0 1px;
	position: relative;
	color: #5f95ef;
	cursor: pointer;
}
/******* /MENU *******/
/******* CONTENT *******/
.content{
	margin: 0pt auto;
	background: #efefef;
	background: #fff;
	border: 1px solid #d0ccc9;
	text-align: left;
	padding: 10px;
	padding-bottom: 20px;
	font-size: 11px;
}
.content h1{
	line-height: 1em;
	vertical-align: middle;
	height: 48px;
	padding: 10px 10px 10px 52px;
	font-size: 32px;
	background: transparent url(images/bubble.jpg) no-repeat scroll left top;
}
.date{
	font-weight: normal;
	font-size: 9px;
	color: #aeaeae;
}
/******* /CONTENT *******/
/******* LOADING *******/
#loading{
	text-align: center;
}
/******* /LOADING *******/
</style>
</head>
<body>
	
	<form method="post" id="form">
		<table>
			<tr>
				<td><label>User</label></td>
                <?php 
				$userid= isset($_COOKIE['technician'])? $_COOKIE['technician'] : '';
$phone = isset($_COOKIE['phone'])? $_COOKIE['phone'] : 'N/A';
$email =  isset($_COOKIE['email'])? $_COOKIE['email'] : 'N/A';
$name =  isset($_COOKIE['name'])? $_COOKIE['name'] : 'N/A';

if($userid!='' )	
{
	$username= $name;
}
else 
{
	$username= "guest";
}
	?>
				<td><input  id="nick" type="hidden" MAXLENGTH="25" value="<? echo $username ?>" /><? echo $username ?></td>
			</tr>
			<tr>
				<td><label>Message</label></td>
				<td><input class="text" id="message" type="text" MAXLENGTH="255" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input id="send" type="submit" value="Shout!" /></td>
			</tr>
		</table>
	</form>
	<div id="container">
		<ul class="menu">
			<li>Shoutbox</li>
		</ul>
		<span class="clear"></span>
		<div class="content">
			<h1>Latest Messages</h1>
			<div id="loading"><img src="css/images/loading.gif" alt="Loading..." /></div>
			<ul>
			<ul>
		</div>
	</div>
    <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="shoutbox.js"></script>

</body>
</html>
