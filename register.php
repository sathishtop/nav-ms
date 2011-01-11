<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Fancy Style Username availability Checking using jQuery</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="jquery.js" type="text/javascript" language="javascript"></script>
<script language="javascript">
//<!---------------------------------+
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use
// --------------------------------->
$(document).ready(function()
{
	var email = $("#email");
	
	var pass1 = $("#password1");
	
	var pass2 = $("#password2");
	
	var phone = $("#phone");
	
	var address = $("#address");
	
	var referral = $("#referral");
	
	var fname = $("#fname");
	
	var clicked = $("#clicked");
	
	var valid = $("#valid");
	
	pass1.blur(validatePass1);
	pass2.blur(validatePass2);
	address.blur(validateAddress);
	referral.blur(validateReferrer);
	fname.blur(validateFname);
	//phone.blur(validatePhone);
	//On key press
	//pass1.keyup(validatePass1);
	//pass2.keyup(validatePass2);
	function validateFname(){
		

		//it's NOT valid
			$("#fnamemsgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		if(fname.val().length <5){
			$("#fnamemsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('At least 5 characters ').addClass('messageboxerror').fadeTo(900,1);
			});	
			return false;
		}
		else
		{
			$("#fnamemsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			 $(this).html('Ok').addClass('messageboxok').fadeTo(900,1);
			 
			});	
			return true;
			
		}
	}
	
	function validatePass1(){
		var a = $("#password1");
		var b = $("#password2");

		//it's NOT valid
			$("#p1msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		if(pass1.val().length <5){
			$("#p1msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('At least 5 characters: letters, numbers and "_"').addClass('messageboxerror').fadeTo(900,1);
			});	
			return false;
		}
		//it's valid
		else{			
		
			$("#p1msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('password ok.').addClass('messageboxok').fadeTo(900,1);	
			});
			validatePass2();
			return true;
		}
	}
	function validatePass2(){
		var a = $("#password1");
		var b = $("#password2");
		$("#p2msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//are NOT valid
		if( pass1.val() != pass2.val() ){
			$("#p2msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Passwords doesn\'t match!').addClass('messageboxerror').fadeTo(900,1);
			});	
		
			
			
			return false;
		}
		//are valid
		else{
			$("#p2msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Confirm password').addClass('messageboxok').fadeTo(900,1);	
			});
			
			return true;
		}
	}
	
	
	 $("#phone").keydown(function(event) {
        // Allow only backspace and delete
        if ( event.keyCode == 46 || event.keyCode == 8 ) {
                // let it happen, don't do anything
        }
        else {
                // Ensure that it is a number and stop the keypress
                if (event.keyCode < 48 || event.keyCode > 57 ) {
                        event.preventDefault(); 
                }       
        }
    });
	 
	 function validateAddress(){
		$("#addmsgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//it's NOT valid
		if(address.val().length < 10)
		{
			$("#addmsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Address Not Valid').addClass('messageboxerror').fadeTo(900,1);
			});	
			return false;
		}
		//it's valid
		else
		{	
			$("#addmsgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Address Ok.').addClass('messageboxok').fadeTo(900,1);	
			});
			return true;
		}
	}
	
	$("#phone").blur(validatePhone);
	function validatePhone()
	{
		//remove all the class add the messagebox classes and start fading
		$("#phmsgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//check the username exists or not from ajax
		
		  if($("#phone").val().length < 5) //if username not avaiable
		  {
		  	$("#phmsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Enter Valid Phone number').addClass('messageboxerror').fadeTo(900,1);
			});		
			return false;
          }
		  else
		  {
		  	$("#phmsgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Phone Number Ok.').addClass('messageboxok').fadeTo(900,1);	
			});
		 			return true;
		  }
        
	}
	
	function validateReferrer(){
		//remove all the class add the messagebox classes and start fading
		$("#refmsgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		//check the username exists or not from ajax
		
		if($("#referral").val().length<=0) //if username not avaiable
		  {
		  	$("#refmsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Enter Referrer Id').addClass('messageboxerror').fadeTo(900,1);
			});		
			return false;
          }
		  
		$.post("user_availability.php",{ user_name:$("#referral").val() } ,function(data)
        {
		  if(data=='yes') //if username not avaiable
		  {
		  	$("#refmsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Referrer ok').addClass('messageboxok').fadeTo(900,1);
			});		
          }
		  else
		  {
		  	$("#refmsgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Referrer Does not exist.').addClass('messageboxerror').fadeTo(900,1);	
			});
		  }
				
        });
 
	}
	 
	$("#username").blur(validateUsername);
	function validateUsername()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		if($("#username").val().length<=0) //if username not avaiable
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Enter UserName').addClass('messageboxerror').fadeTo(900,1);
			});		
			return false;
          }
		//check the username exists or not from ajax
		$.post("user_availability.php",{ user_name:$(this).val() } ,function(data)
        {
		  if(data=='yes') //if username not avaiable
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('This User name Already exists').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
		  else
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Username available to register').addClass('messageboxok').fadeTo(900,1);	
			});
		  }
				
        });
 
	}
	
	
	$("#email").blur(validateEmail);
	function validateEmail()
	{
		
		$("#emmsgbox").removeClass().addClass('messagebox').text('Checking...').fadeIn("slow");
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			$("#emmsgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Email Format is ok.').addClass('messageboxok').fadeTo(900,1);	
			});
			return true;
		}
		//if it's NOT valid
		else{
				$("#emmsgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Enter a Valid Email').addClass('messageboxerror').fadeTo(900,1);
			});
			return false;
		}
		
	}
	
	$("#submitBtn").click(function() {
     var msg= "";
	 var email = $("#email");
	
	var pass1 = $("#password1");
	
	var pass2 = $("#password2");
	
	var phone = $("#phone");
	
	var address = $("#address");
	
	var referral = $("#referral");
	
	var fname = $("#fname");
	
	var clicked = $("#clicked");
	
	var valid = $("#valid");
	
  			if (fname.val().length<=4)
			{
				msg+= "Valid Name Required\n";
			}
			if($("#username").val().length<=4) 
				msg+= "Valid UserName Required\n";
			if( pass1.val().length<6)
							msg+= "Invalid password\n";
			if(pass2.val().length<6)
							msg+= "Invalid Confirm password\n";
			if (email.val().length<=5)
							msg+= "Invalid email\n";
			if(address.val().length<10)
							msg+= "Invalid Address\n";
			if(referral.val().length<4)
							msg+= "Invalid Referrer name\n";
			
			if (msg=='')
			return true;
			else{
  			//$("#customForm").submit();
			alert(msg);
			return false;
			}
			
		});
});

	
</script>	
<style type="text/css">
body {
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
.top {
margin-bottom: 15px;
}
.messagebox{
	position:absolute;
	width:100px;
	margin-left:30px;
	border:1px solid #c93;
	background:#ffc;
	padding:3px;
}
.messageboxok{
	position:absolute;
	width:auto;
	margin-left:30px;
	border:1px solid #349534;
	background:#C9FFCA;
	padding:3px;
	font-weight:bold;
	color:#008000;
	
}
.messageboxerror{
	position:absolute;
	width:auto;
	margin-left:30px;
	border:1px solid #CC0000;
	background:#F7CBCA;
	padding:3px;
	font-weight:bold;
	color:#CC0000;
}

</style>
</head>
<body>

 
<br>
<br>

<form action="register_db.php" id="customForm"  method="post"  >
<input type="hidden" name="valid" id="valid" value="0">
<input type="hidden" name="clicked" id="clicked" value="0">
              
  <table border="0" width="60%" align="center"> 
  <tr><td width="20%">          <label>Full Name :</label> </td> <td>
                   <input type="text" name="ms_name" id="fname" size="50" /> <span id="fnamemsgbox" style="display:none"></span> </td></tr>
                
                      
                       <tr>
                       <td><label>UserName:</label> </td>
                       <td ><input name="username" type="text" id="username" value="" maxlength="15" />
  					   <span id="msgbox" style="display:none"></span> 
                       
                       
                       
						</td></tr>
                      
                     <tr> <td>
                   <label>Password for Login:</label></td><td>
                   <input type="password" name="password1" id="password1" size="20" />  <span id="p1msgbox" style="display:none"></span></td></tr>
                   
                    <tr> <td>
                   <label>Retype Password :</label></td><td>
                   <input type="password" name="password2" id="password2" size="20"/> <span id="p2msgbox" style="display:none"></span></td></tr>
                   
                      <tr><td> <label>DOB :</label></td><td>
                   <select width="2" name="ms_dd" id="dd"><option value="">DD</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
  <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
  </select>
  
  <select width="2" name="ms_mm" id="mm" ><option value="">MM</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
  
  <select width="4" name="ms_year" id="ms_year" ><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option></select>
   </td></tr>
                 <tr><td>
                    <label>Sex :</label> </td><td>
                    <select width="6" name="ms_sex" id="ms_sex" ><option value="male">Male</option><option value="female">Female</option></select>
                    </td></tr>
                     
                  <tr><td colspan="2"><b> <i>
                  Communication Details : </i></b>
                  </td></tr>
                     <tr><td>
                    <label>Email :</label> </td><td>
                      <input  type="text" name="email" id="email" size="50" >  <span id="emmsgbox" style="display:none"> </td></tr>
                      
                    <tr>
                    <td>
                    <label>Contact No :</label> </td>
                    <td><input   type="text" name="ms_phone" id="phone" /><span id="phmsgbox" style="display:none"></td></tr>
                    
                    <tr><td>Address For Communication: </td><td><textarea name="address" id="address"rows="5" cols="30" ></textarea><span id="addmsgbox" style="display:none"></span></td></tr>
                    
                    <tr><td>Native : </td><td><input type="text" name="native_district"  /></td></tr>
                    
					<tr><td>Current location: </td><td><input type="text" name="current_district"  /> </td></tr>
                    
                    <tr><td>Year of leaving School :</td><td><input   type="text" name="yol" id="yol" /></td></tr>
                    
                    <tr><td colspan="2"><input type="checkbox" name="notification_mail" checked="checked" />  Wish to receive mail notifications from us ?
                    </td></tr>
                    
                    <tr><td>
                    Who referred you :
                    </td><td>
                    <input type="text" name="referral"  id="referral"  /><span id="refmsgbox" style="display:none"></span>
  
                    </td></tr>
                                   
                    <tr><td colspan="2">
                       ( A mail will be sent to this person, to confirm that he knows you. only then you will be registered)
  
                    </td></tr>	
                    
                    <tr><td colspan="2">
                    Educational Details :
                    </td></tr>
                    
                  
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
                    <input type="text" name="pg" /> 
                    </td></tr> 
                    <tr><td>
                    Others
                    </td><td>
                    <input type="text" name="odegree" /> 
                    </td></tr> 
                    <tr><td>
                    Interests :
                    </td><td>
                    <input type="text" name="interests" /> 
                    </td></tr>
                    
 
  <tr> <td >                   <label>Your Image :</label></td><td >
                  <input type="file"  accept="image/jpeg" name="ms_photo" value=""></td></tr>
  
                  <tr><td colspan="2" align="center">
                <input type="submit" value="Register" id="submitBtn"/> <input type="reset"  value="Reset Fields"/> 
               </td><td></td></tr></table>
              </form>
</body>
</html>
