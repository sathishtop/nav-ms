<html>
<head>
</head>  
        <body>
      
              <form action="register_db.php" method="post" onsubmit="return validate_form(this)" >
              
  <table border="0" width="60%" align="center"> 
  <tr><td width="20%">          <label>Full Name :</label> </td> <td>
                   <input type="text" name="ms_name" size="50" onblur="validate_required(ms_name,'Enter Name!')"/></td></tr>
                
                      
                       <tr>
                       <td><label>UserName:</label> </td>
                       <td >
                       <table
                       > <tr><td><input  type="text" name="uname" id="uname"  onblur="validate();"/>  </td><td><div id="msg"></div></td></tr></table>
</td></tr>
                      
                     <tr> <td>
                   <label>Password for Login:</label></td><td>
                   <input type="password" name="ms_pass" size="20" onblur="validate_required(ms_pass,'Enter Password!')"/></td></tr>
                   
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
                      <input  type="text" name="ms_mail" id="mail" size="50" onblur="validate_required(ms_mail,'Enter Mail Id!')"/></td></tr>
                      
                      <tr><td>
                    <label>Contact No :</label> </td><td>
                    <input   type="text" name="ms_phone" id="phone"  onblur="validate_required(ms_phone,'Enter Phone Number!')" /></td></tr>
                    <tr><td>Address For Communication: </td><td><textarea name="address" rows="5" cols="30" ></textarea></td></tr>
                    <tr><td>Native : </td><td><input type="text" name="native_district" onblur="validate_required(native_district,'Enter Native!')" /></td></tr>
					<tr><td>Current location: </td><td><input type="text" name="current_district"onblur="validate_required(current_district,'Enter Current Location!')"  /> </td></tr>
                    <tr>
                    <td>
                    Year of leaving School :
                    </td><td>
                     <input   type="text" name="yol" id="yol" onblur="validate_required(yol,'Enter year Of Leaving!')" />
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
                <input type="submit" value="Register" onclick="return validate_form(this)"/> <input type="reset"  value="Reset Fields"/> </td><td></td></tr></table>
              </form>
              
  </body></html>