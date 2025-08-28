<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<title>JMDI Computer Technology</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/banner.css" />
	
	
<script type="text/javascript" src="s3slider-plugin/js/jquery4511.js"></script>
<script type="text/javascript" src="s3slider-plugin/js/s3slider9d52.js"></script>

<?php
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "ramesh.chauhan@jmdspeed.com";
 
    $email_subject = "Your email subject line";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||

        !isset($_POST['last_name']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required

    $last_name = $_POST['last_name']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Subject you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
	$email_message = "Form details below.\n\n";
 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 

 
    $email_message .= "Name:".clean_string($first_name)."\n";
 
    $email_message .= "Email:".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Subject: ".clean_string($last_name)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 

if($mail)
{
	$filename=$_REQUEST['return'];
	if($filename=='contact.html')
	echo "<script> alert('Thanks for your intrest We will contact you shortly'); window.location.href='$filename'; </script>";
	else
	echo "Mail failed";
}
else
{
	echo "<script> alert('Your job has been applied successfully'); window.location.href='$filename'; </script>";	
	
}



}
 
?>



</head>

<body>

<div id="outer">
	<div id="wrapper">
		<div id="header">
			<h1>JMDI Computer Technology</h1>
			<p>Pvt. Ltd.</p>
		</div>
		<div id="nav">
			<div id="head">
			
		
    <script type="text/javascript">

        var $b = jQuery.noConflict();

        $b(document).ready(function() {
            $b('#banner').s3Slider({
                timeOut: 2000            });
        });


    </script>
		
			
				 <div id="banner">
		
			<ul id="bannerContent">
											<li class="bannerImage">
					
											<a href="#"><img src="s3slider-plugin/files/18_s.jpeg" /></a>
											
							<span>
								<strong></strong>
										<br />
											  </span>					</li>
								<li class="bannerImage">
					
											<a href="#"><img src="s3slider-plugin/files/19_s.jpeg" /></a>
						 <span>
								<strong></strong>
										<br />
											  </span>					</li>


					<li class="bannerImage">
					
						<a href="#"><img src="s3slider-plugin/files/21_s.jpeg" /></a>
											
							<span>
								<strong></strong>
										<br />
											  </span>					</li>

								<li class="bannerImage">
					
											<a href="#"><img src="s3slider-plugin/files/22_s.jpeg" /></a>
							 <span>
								<strong></strong>
										<br />

											  </span>					</li>

                        <div class="clear bannerImage"></div>


			</ul>
	


		</div>
			</div>
			
			<div id="head-pip"></div>
			<ul>
				<li id="m1"><a href="index.html">Home</a></li>
				<li id="m2"><a href="about.html">About us</a></li>
				<li id="m3"><a href="services.html">Services</a></li>
				<li id="m4"><a href="clients.html">Clients</a></li>
				<li id="m6"><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div id="body">
			<div id="body-inner">

						<div class="heading3">Contact us</div>

		


			<table width="100%" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="vertical-align: top; padding-top: 40px;">
<div style="float: left; width: 220px; margin-right: 10px;">
<div class="wpcf7" id="wpcf7-f155-p25-o1">
 <form name="enquiry" method="post" onsubmit="javascript:return enqval();">

<p>Your Name (*)<br />
<input type="text" name="first_name" value="" size="40" /></p>
<p>Your Email (*)<br />
<input type="text" name="email" value="" size="40" /></p>
<p>Contact No(*)<br />
<input type="text" name="telephone" value="" size="40" maxlength="14" /></p>
<p>Subject (*)<br />
<input type="text" name="last_name" value="" size="40" /></p>
<p>Your Message (*)<br />
<textarea name="comments" style="width:255px;"></textarea></p>
<input type="hidden" name="return" value="contact.html">
<p><input type="submit" value="Submit" name="Submit" class="wpcf7-form-control  wpcf7-submit" /></p>
</form></div>
</div>
</td>
<td>
<div  style="float: left; width: 240px; border: 1px solid #000000;">


<img src="images/Contact-2.jpg" width="240px">

</div>
</td>
</tr>
<tr>
<td colspan="2" valign="top"> 

<div style="width: 420px; float: left; text-align: left; padding-top: 12px; padding-bottom: 0px; margin-left:20px; font-family:Arial, Helvetica, sans-serif; font-weight: normal; font-size: 13px;">

<strong style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; color:#3A3A3A; font-size:18px;">REGISTERED OFFICE</strong><br />
438 Madan Pur Khadar<br />
Sarita Vihar,<br />
New Delhi - 110076, India<br />

<strong style="font-family:Arial, Helvetica, sans-serif; font-weight: bold;">Contact Details:</strong><br />
<strong>Mobile-</strong>09818855865 / 09718465465 <br />
<strong>Landline-</strong>011-26948872

</div>


<div style="width: 420px; float: left; text-align: left; padding-top: 12px; padding-bottom: 0px; margin-left:20px; font-family:Arial, Helvetica, sans-serif; font-weight: normal; font-size: 13px;">

<strong style="font-family:Arial, Helvetica, sans-serif; font-weight: bold; color:#3A3A3A; font-size:18px;">BRANCH OFFICE</strong><br />
D-5, Street No. 17,<br />
Hindan Vihar, Sector - 49,<br />
Noida - 201301, (Uttar Pardesh)<br />


<strong style="font-family:Arial, Helvetica, sans-serif; font-weight: bold;">Contact Details:</strong><br />
<strong>E-mail:</strong>  <span style="color: #416daa; font-family: arial;">ramesh.chauhan@jmdspeed.com</span><br />

<strong>Mobile-</strong>09818855865 / 09718465465 <br />
</div>





</td>
</tr>




</tbody>
</table>



			</div>
			<div id="copyright">
				<div id="copyright-left">
					powered by <a href="www.usinfosolution.in" target="_self" style="text-decoration:none; color:#330000">usinfosolution.in</a>
				</div>
			</div>
			<div class="clear">&nbsp;</div>
		</div>
	</div>
</div>

</body>
</html>
