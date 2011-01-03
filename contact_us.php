
<html>
<?php 
/**/
if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset( $_POST['comments']) )
{
$name= $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$comments= $_POST['comments'];

$subject = "\n Name :  $name \n\n ContactNo : $phone \n\n Email : $email \n\n Comments/Suggestions : $comments\n"; 
	
	require_once('class.phpgmailer.php');
$rmail = new PHPGMailer();
$rmail->Username = 'nav.ms.06@gmail.com';
$rmail->Password = 'NavMs2006';
$rmail->From = 'nav.ms.06@gmail.com';
$rmail->FromName = 'nav-ms-2006 mailer';
$rmail->Subject = 'Comments / Suggestion to Nav-Ms-2006';
$rmail->AddAddress($email);


$rmail->Body = "Thanks for your suggestion. Mail sent to Admin:".$subject;
echo $rmail->Send();

$rmail = new PHPGMailer();
$rmail->Username = 'nav.ms.06@gmail.com';
$rmail->Password = 'NavMs2006';
$rmail->From = 'nav.ms.06@gmail.com';
$rmail->FromName = 'nav-ms-2006 mailer';
$rmail->Subject = 'Comments / Suggestion to Nav-Ms-2006';

$rmail->AddAddress('nav.ms.06@gmail.com');

$rmail->Body = $subject;
echo $rmail->Send();


$cookie_domain="";

setcookie("technician", "", time()-60*60 );

$host  = $_SERVER['HTTP_HOST'];

$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

$msg="Comment Sent to Admin";
header("Location: http://$host$uri/index.php?msg=".$msg);

	}
?>
<body width="60%">

		<h1>Contact <span>Us</span></h1>
 

            <div> <br />

              <form action="contact_us.php" method="post">
                <table width="69%" align="center">
                  
                  <tr>
                    <td class="body" id="Contact"><strong>
                      <label for="FullName">Full Name:</label>
                      </strong></td>
                    <td><input name="name" type="text" size="50" /></td>
                  </tr>
                  <tr>
                    <td class="body" id="Phone"><strong>
                      <label for="Phone">Phone:</label>
                      </strong></td>
                    <td><input name="phone" type="text" size="50" /></td>
                  </tr>
                  <tr>
                    <td class="body" id="Email"><strong>
                      <label for="Email">Email:</label>
                      </strong></td>
                    <td><input name="email" type="text" size="50" /></td>
                  </tr>
                  <tr>
                    <td class="body" id="Comments"><strong>
                      <label for="Comments">Questions/Comments:</label>
                      </strong></td>
                    <td><textarea name="comments" cols="40" rows="6"></textarea></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="submit" class="button" value="Send Now" /></td>
                  </tr>
                </table>
              </form>
      </div>
</body>
</html>