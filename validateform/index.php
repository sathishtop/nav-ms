<?php
	require_once("validation.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>yensdesign.com - Validate Forms using PHP and jQuery</title>
	<link rel="stylesheet" href="css/general.css" type="text/css" media="screen" />
</head>
<body>
	
	<div id="container">
		<h1>Registration process</h1>
		
		<?if( isset($_POST['send']) && (!validateName($_POST['name']) || !validateEmail($_POST['email']) || !validatePasswords($_POST['pass1'], $_POST['pass2']) || !validateMessage($_POST['message']) ) ):?>
				<div id="error">
					<ul>
						<?if(!validateName($_POST['name'])):?>
							<li><strong>Invalid Name:</strong> We want names with more than 3 letters!</li>
						<?endif?>
						<?if(!validateEmail($_POST['email'])):?>
							<li><strong>Invalid E-mail:</strong> Stop cowboy! Type a valid e-mail please :P</li>
						<?endif?>
						<?if(!validatePasswords($_POST['pass1'], $_POST['pass2'])):?>
							<li><strong>Passwords are invalid:</strong> Passwords doesn't match or are invalid!</li>
						<?endif?>
						<?if(!validateMessage($_POST['message'])):?>
							<li><strong>Ivalid message:</strong> Type a message with at least with 10 letters</li>
						<?endif?>
					</ul>
				</div>
			<?elseif(isset($_POST['send'])):?>
				<div id="error" class="valid">
					<ul>
						<li><strong>Congratulations!</strong> All fields are OK ;)</li>
					</ul>
				</div>
		<?endif?>

		<form method="post" id="customForm" action="">
			<div>
				Name :		<input id="name" name="name" type="text" />
				<span id="nameInfo">What's your name?</span>
			</div>
			<div>
				<label for="email">E-mail</label>
				<input id="email" name="email" type="text" />
				<span id="emailInfo">Valid E-mail please, you will need it to log in!</span>
			</div>
			<div>
				<label for="pass1">Password</label>
				<input id="pass1" name="pass1" type="password" />
				<span id="pass1Info">At least 5 characters: letters, numbers and '_'</span>
			</div>
			<div>
				<label for="pass2">Confirm Password</label>
				<input id="pass2" name="pass2" type="password" />
				<span id="pass2Info">Confirm password</span>
			</div>
			<div>
				<label for="message">Message</label>
				<textarea id="message" name="message" cols="" rows=""></textarea>
			</div>
			<div>
				<input id="send" name="send" type="submit" value="Send" />
			</div>
		</form>
        
        
        
         <form action="register_db.php" method="post" onSubmit="return validate_form(this)" >
              
  <table border="0" width="60%" align="center"> 
  <tr><td width="20%">          <label>Full Name :</label> </td> <td>
                   <input type="text" name="ms_name" size="50" onBlur="validate_required(ms_name,'Enter Name!')"/></td></tr>
                
                      
                       <tr>
                       <td><label>UserName:</label> </td>
                       <td >
                       <table
                       > <tr><td><input  type="text" name="uname" id="uname"  onblur="validate();"/>  </td><td><div id="msg"></div></td></tr></table>
</td></tr>
                      
                     <tr> <td>
                   <label>Password for Login:</label></td><td>
                   <input type="password" name="ms_pass" size="20" onBlur="validate_required(ms_pass,'Enter Password!')"/></td></tr>
                   
                    <tr> <td>
                   <label>Retype Password :</label></td><td>
                   <input type="password" name="ms_pass1" size="20"/></td></tr>
                   
                      <tr><td> <label>DOB :</label></td><td>
                   <select width="2" name="ms_dd" id="dd"><option value="">DD</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
  <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
  </select>
  
  <select width="2" name="ms_mm" id="mm" ><option value="">MM</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
  
  <select width="4" name="ms_year" id="ms_year" ><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option></select>
   </td></tr>
                  <tr><td colspan="2"><b> <i>
                  Communication Details : </i></b>
                  </td></tr>
                     <tr><td>
                    <label>Email :</label> </td><td>
                     <input id="email" name="email" type="text" />
				<span id="emailInfo">Valid E-mail please, you will need it to log in!</span></td></tr>
                      
                      <tr><td>
                    <label>Contact No :</label> </td><td>
                    <input   type="text" name="ms_phone" id="phone"  onblur="validate_required(ms_phone,'Enter Phone Number!')" /></td></tr>
                    <tr><td>Address For Communication: </td><td><textarea name="address" rows="5" cols="30" ></textarea></td></tr>
                    <tr><td>Native : </td><td><input type="text" name="native_district" onBlur="validate_required(native_district,'Enter Native!')" /></td></tr>
					<tr><td>Current location: </td><td><input type="text" name="current_district"onblur="validate_required(current_district,'Enter Current Location!')"  /> </td></tr>
                    <tr>
                    <td>
                    Year of leaving School :
                    </td><td>
                     <input   type="text" name="yol" id="yol" onBlur="validate_required(yol,'Enter year Of Leaving!')" />
                    </td></tr>
                    
                    <tr><td colspan="2">
                    <input type="checkbox" name="notification_mail" checked="checked" />  Wish to receive mail notifications from us ?
                    </td></tr>
                    
                    <tr><td>
                    Who referred you :
                    </td><td>
                    <input type="text" name="referral"  onblur="validate_required(referral,'Enter Referrer Name!')" />
  
                    </td></tr>
                                   
                    <tr><td colspan="2">
                       ( A mail will be sent to this person, to confirm that he knows you. only then you will be registered)
  
                    </td></tr>	
                    
                    <tr><td colspan="2">
                    Educational Details :
                    </td></tr>
                    
                    <tr><td colspan="2">
                    	<input type="checkbox"  checked="checked" name="higher_sec" /> I finished Higher Secondary in NMHSS</td></tr>
                        <div id="hs" style="visibility:hidden"  >
                	<tr><td> Higher Secondary:</td><td><input type="text" name="higher_sec" /> 
                                        </td></tr> 
                        </div>

                    <tr><td>
						Under Graduate :                    
                    </td><td>
                    <input type="text" name="ug" /> 
                    </td></tr> 
                    
                    <tr><td>
                    Post Graduate :
                    </td><td>
                    <input type="text" name="ug" /> 
                    </td></tr> 
                    <tr><td>
                    Others
                    </td><td>
                    <input type="text" name="odegree" /> 
                    </td></tr> 
                    <tr><td>
                    Interests :
                    </td><td>
                    <input type="text" name="odegree" /> 
                    </td></tr>
                    
  <tr><td>                  <label>Current Qualification :</label></td><td>
                    <input type="text" name="ms_degree" value="" size="50"/></td></tr>
  <tr> <td >                   <label>Your Image :</label></td><td >
                  <input type="file"  accept="image/jpeg" name="ms_photo" value=""></td></tr>
  
                  <tr><td colspan="2" align="center">
                <input type="submit" value="Register" onClick="return validate_form(this)"/> <input type="reset"  value="Reset Fields"/> </td><td></td></tr></table>
              </form>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="validation.js"></script>
</body>
</html>