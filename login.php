
<?php
$userid= isset($_COOKIE['technician'])? $_COOKIE['technician'] : '';
$phone = isset($_COOKIE['phone'])? $_COOKIE['phone'] : 'N/A';
$email =  isset($_COOKIE['email'])? $_COOKIE['email'] : 'N/A';
$name =  isset($_COOKIE['name'])? $_COOKIE['name'] : 'N/A';

if($userid!='' )	
{

	echo "
		<form action= 'logout.php' method ='post' name='logout'>
	<div class='member_login'>
      <div class='login_box'>
		  <fieldset>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 <div class='column_4' > 
		 Hello $name</div>
		  <div class='column_1' > 

		<input type='hidden'  name='userid' value='$userid'/>
		<a href='#' onclick=logout.submit(); >logout </a>

 		</div>
          </fieldset>
		</div>
    </div>
	</form>";
}
else 
{
echo '	<div class="member_login">
      <div class="login_box">
	  
        <form action="login_action.php" method="post">
          <fieldset>
		  
          <div class="column_1">
            <label>username :</label>
            <label>password :</label>
          </div>
          <div class="column_2">
            <input type="text" name="uname" value="" />
            <input type="password" name="pass" value="" />
          </div>
          <div class="column_3">
            <input type="image" src="images/login_btn.gif" class="login" onclick="form.submit();"/>
          </div>
          <div class="column_4">
            <label class="password"><a href="#">Forgot <br />
            password</a></label>
          </div>
          </fieldset>
        </form>

      </div>
		<marquee scrolldelay="250">your mail should be validated and your referer should approve you, in order to login</marquee>	  
    </div> ';
}