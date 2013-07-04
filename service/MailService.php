<?php

/*
 * Created on Jul 28, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

include("../PHPMailer_5.2.0/class.phpmailer.php");
include("../constants/Constants.php");

class MailService {

  function sendBookingNotificationMail($username, $phone, $emailid, $location, $function, $budget, $preferredDate, $notificationType) {

    $constants = new Constants();
    $mailService = new MailService();

    if ($constants->sendMailviaGMail)
      $mailService->sendBookingNotificationMailviaGmail($username, $phone, $emailid, $location, $function, $budget, $preferredDate, $notificationType);
    else
      $mailService->sendBookingNotificationMailviaPHPMail($username, $phone, $emailid, $location, $function, $budget, $preferredDate, $notificationType);
  }

  function sendBookingNotificationMailviaPHPMail($username, $phone, $emailid, $location, $function, $budget, $preferredDate, $notificationType) {

    $constants = new Constants();
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n" .
            'From: admin@getyourvenue.com' . "\r\n" .
            'BCC: dailyleads@getyourvenue.com' . "\r\n" .
            'Reply-To: ' . $emailid . "\r\n";

    $msg = "Hi Team,<br><br>" .
            "User " . $username . " wants to get a venue. The full user information is:<br><br>" .
            "Phone: " . $phone . "<br>" .
            "Email: " . $emailid . "<br>" .
            "Location: " . $location . "<br>" .
            "Function: " . $function . "<br>" .
            "Budget: " . $budget . "<br>" .
            "Preferred Date: " . $preferredDate . "<br><br>" .
            "Regards,<br>Admin<br>GetYourvenue.com";

    //echo "Booking notification mail".$notificationType;
    if ($notificationType == "SERVICE_NOTIFICATION")
      $subject = $username . " wants to Get Allied Service - GYV Admin";
    if ($notificationType == "VENUE_NOTIFICATION")
      $subject = $username . " wants to Get a Venue - GYV Admin";
    if ($notificationType == "CONFIRMATION_NOTIFICATION")
      $subject = $username . " wants some Information - GYV Admin";
    $to = $constants->mailTo_gmail;

    if (!empty($emailid)) {
      mail($to, $subject, $msg, $headers);
      $this->sendPromotionalEmailToUser($emailid);
    }
  }

  function sendPromotionalEmailToUser($emailid) {
    $subject = 'Getyourvenue.com - Congratulations on the Upcoming Wedding in Your Family!';
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    //Additional headers    
    $headers .= 'From: GYV Info<info@getyourvenue.com>' . "\r\n";
    $headers .= 'Reply-To: GYV Info<info@getyourvenue.com>' . "\r\n";
    $headers .= 'Return-Path: bounce@getyourvenue.com' . "\r\n";
    $headers .= 'Return-Receipt-To: bounce@getyourvenue.com' . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    $emailContent = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Getyourvenue.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="width:100%;height:100%; margin:12px auto; font-size:12px; font-family:Tahoma,Verdana,Arial,sans-serif; color:#333333; background-color:#fff; line-height:19px;">
<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="background-color:#FFFFFF;">
<tr>
<td valign="top" align="center" style="margin: 0;padding:0">
<table style="width: 650px; border: 0px none; font-size: 12px;font-family:Tahoma,Verdana,Arial, sans-serif; color: #333333;" width="650" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td align="left" width="650" style="margin: 0;padding: 0">
<table style="width: 630px; border: 0px none; font-size: 12px;font-family:Tahoma,Verdana,Arial, sans-serif; color: #333333;" width="630" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td valign="top" align="left" style="padding-bottom:10px;"><a href="http://getyourvenue.com/?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=home&amp;utm_content=header" target="_blank"><img alt="http://getyourvenue.com" src="http://getyourvenue.com/images/email_gyv_logo.png" align="left" width="206" height="108" border="0" /></a></td>
<td valign="top" align="right"><span style="font-weight:bold; padding:10px 0; font-size: 12px;font-family:Tahoma,Verdana,Arial, sans-serif; color: #333333;">Find us on social network</span><br />
<span style="padding-left:5px;">
<a title="Facebook" href="http://www.facebook.com/getyourvenue" target="_blank"><img alt="Facebook" src="http://getyourvenue.com/images/social_icon_gyv_facebook.png" border="0" width="32" height="32" /></a></span>
<span style="padding-left:5px;"><a title="Twitter" href="http://twitter.com/getyourvenue" target="_blank"><img alt="Twitter" src="http://getyourvenue.com/images/social_icon_gyv_twitter.png" border="0" width="32" height="32" /></a></span>
<span style="padding-left:5px;"><a title="Google+" href="http://plus.google.com/116875953644480548807" target="_blank"><img alt="Google+" src="http://getyourvenue.com/images/social_icon_gyv_google_square.png" border="0" width="32" height="32" /></a></span>
<span style="padding-left:5px;"><a title="Pinterest" href="http://pinterest.com/getyourvenue/" target="_blank"><img alt="Pinterest" src="http://getyourvenue.com/images/social_icon_gyv_pinterest.png" border="0" width="32" height="32" /></a></span>
<span style="padding-left:5px;"><a title="Blog" href="http://blog.getyourvenue.com" target="_blank"><img alt="Blog" src="http://getyourvenue.com/images/social_icon_gyv_blogger.png" border="0" width="32" height="32" /></a></span>
</td>
</tr>
<tr>
<td colspan="2">
<p style="padding: 10px 0 10px 0;margin: 0;font-size:12px; color:#333333; border-top:1px dotted #ccc;">Hi there,<br />Thanks a ton for registering with GetYourVenue.com!</p>
<p style="padding: 0 0 10px 0;margin: 0;font-size:13px; color:#333333;">Our Promise: <strong><i>All You Need to Find For a Wedding is a Partner; We Take Care of Everything Else!</i></strong></p>
<ul style="padding:0 0 5px 15px; margin: 0;font-size:12px; color:#333333;">
<li style="padding: 0 0 10px 0;margin: 0;font-size:12px; color:#333333;">GetYourVenue &amp; our sister concern 10on10 Creations are just the right places to organize your wedding, your way! We are here to help you plan your important events and stir up some fun while you nail down your venues with us.</li>
<li style="padding: 0 0 10px 0;margin: 0;font-size:12px; color:#333333;">We totally understand that today\'s busy lifestyle might not allow you to personally visit all wedding venues in and around Delhi, so you might like us to do the homework for you and bring you the very best and <strong>the most appropriate options</strong> as per your needs and preferences. Be it <strong>venue, or allied wedding services,</strong> we deal with everything - exquisite <a style="color:#000;" href="http://getyourvenue.com/wedding-decorators-in-delhi?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=wedding-decorators-in-delhi&amp;utm_content=header" target="_blank">decor</a>, sumptuous <a href="http://getyourvenue.com/wedding-caterers-in-delhi?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=wedding-caterers-in-delhi&amp;utm_content=header" style="color:#000;" target="_blank">catering</a>, elite <a href="http://getyourvenue.com/wedding-photography-delhi?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=wedding-photography-delhi&amp;utm_content=header" style="color:#000;" target="_blank">photography</a>, enthralling <a href="http://getyourvenue.com/live-music-band-mystique-delhi?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=live-music-band-mystique-delhi&amp;utm_content=header" style="color:#000;" target="_blank">live music bands</a>, unique <a href="http://getyourvenue.com/varmala-themes-delhi?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=varmala-themes-delhi&amp;utm_content=header" style="color:#000;" target="_blank">varmala themes</a>, trendy <a href="http://getyourvenue.com/wedding-invitation-cards-delhi?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=wedding-invitation-cards-delhi&amp;utm_content=header" style="color:#000;" target="_blank">wedding invites</a> &amp; host of other services. Just name it &amp; we have it ready for you.</li><li style="padding: 0 0 10px 0;margin: 0;font-size:12px; color:#333333;">We can handle all the details for you, and introduce you to the finest <a href="http://getyourvenue.com/?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=home&amp;utm_content=header" style="color:#000;" target="_blank">wedding venues</a> and <a href="http://getyourvenue.com/allied-services?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=allied-services&amp;utm_content=header" style="color:#000;" target="_blank">allied wedding services</a> in Delhi at <strong>unmatched prices</strong>. The prices that we offer are lowest in the industry owing to the bulk business we provide to venue &amp; allied service owners. This gives us unmatched advantage over other players in the industry in terms of pricing which in turn trickles down to you.</li>
</ul>
<p style="padding: 0 0 10px 0;margin: 0;font-size:12px; color:#333333;">At GetYourVenue, we promise excellence; keeping you as comfortable as home, turning your event as a journey amidst stars! <br />If you still have questions, or want to set up your complimentary venue consultation, please <a style="color:#000;" target="_blank" href="http://getyourvenue.com/contact_us?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=contact_us&amp;utm_content=header">Contact Our Head Office</a> today, revisit our site <a style="color:#000;" href="http://getyourvenue.com/?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=home&amp;utm_content=header" target="_blank">http://getyourvenue.com</a> or pick up your phone and dial <strong>+91 8800095444 / +91 8800093444</strong>.</p>
<p style="padding: 0 0 20px 0;margin: 0;font-size:12px; color:#333333; border-bottom:1px dotted #ccc;">Waiting to Serve You,<br />The GetYourVenue Team!</p>
<p style="padding: 10px 0 10px 0;margin: 0;font-size:12px; color:#333333;"><strong>Address</strong>: K-52, 2nd Floor, Choudhary Building, Outer Circle, Cannaught Place, New Delhi, India - 110001<br />
<strong>Email:</strong> <a style="color:#000;" href="mailto:info@getyourvenue.com">info@getyourvenue.com</a> | <strong>Website:</strong> <a style="color:#000;" href="http://getyourvenue.com/?utm_campaign=PromotionalEmail&amp;utm_medium=email&amp;utm_source=Thankyoumail&amp;utm_term=home&amp;utm_content=header" target="_blank">http://getyourvenue.com</a></p>
</td>
</tr>
</table>
</td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>';
    mail($emailid, $subject, stripslashes($emailContent), $headers);
  }

  function sendBookingNotificationMailviaGmail($username, $phone, $emailid, $location, $function, $budget, $preferredDate, $notificationType) {

    $mailer = new PHPMailer();
    $constants = new Constants();
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
    //$mail->SMTPSecure = 'ssl';
    $mailer->Host = $constants->host_gmail;
    $mailer->Port = $constants->port_gmail;
    $mailer->SMTPAuth = $constants->mailerSMTPAuth_gmail;
    $mailer->Username = $constants->username_gmail;
    $mailer->Password = $constants->password_gmail;
    $mailer->From = $constants->mailFrom_gmail;
    $mailer->FromName = $constants->mailFromName_gmail;

    $msg = "Hi Team,<br><br>" .
            "User " . $username . " wants to get a venue. The full user information is:<br><br>" .
            "Phone: " . $phone . "<br>" .
            "Email: " . $emailid . "<br>" .
            "Location: " . $location . "<br>" .
            "Function: " . $function . "<br>" .
            "Budget: " . $budget . "<br>" .
            "Preferred Date: " . $preferredDate . "<br><br>" .
            "from" . "<br>" .
            "GYV Admin";


    $mailer->MsgHTML($msg);
    $mailer->Subject = $username . " wants to Get a Venue---GYV Admin!!!";
    $str = explode(",", $constants->mailTo_gmail);
    $mailer->AddAddress($str[0]);
    $mailer->AddAddress($str[1]);
    $mailer->AddAddress($str[2]);
    $mailer->AddAddress($str[3]);

    if (!$mailer->Send()) {
      error_log("Mailer :  error " . $mailer->ErrorInfo) . " ";
      echo "fail";
    } else {
      echo "sent";
    }
  }

  function sendBookingPromotionalEmailToUser($username, $email) {//once booked
  }

  /*
    function sendServiceBookingNotificationMailviaGmail($username,$phone,$emailid,$location,$service,$budget,$preferredDate){

    $mailer = new PHPMailer();
    $constants = new Constants();
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
    //$mail->SMTPSecure = 'ssl';
    $mailer->Host = $constants->host_gmail;
    $mailer->Port = $constants->port_gmail;
    $mailer->SMTPAuth = $constants->mailerSMTPAuth_gmail;
    $mailer->Username = $constants->username_gmail;
    $mailer->Password = $constants->password_gmail;
    $mailer->From = $constants->mailFrom_gmail;
    $mailer->FromName = $constants->mailFromName_gmail;

    $msg="Hi Team,<br><br>".
    "User ".$username." wants to book ".$service." service. The full user information is:<br><br>".
    "Phone: ".$phone."<br>".
    "Email: ".$emailid."<br>".
    "Location: ".$location."<br>".
    "Function: ".$service."<br>".
    "Budget: ".$budget."<br>".
    "Preferred Date: ".$preferredDate."<br><br>".
    "from"."<br>".
    "GYK Admin";


    $mailer->MsgHTML($msg);
    $mailer->Subject =$username." wants to Book ".$service." service---GYV Admin!!!";
    $str=explode(",", $constants->mailTo_gmail);
    $mailer->AddAddress($str[0]);
    $mailer->AddAddress($str[1]);
    $mailer->AddAddress($str[2]);
    $mailer->AddAddress($str[3]);

    if(!$mailer->Send()) {
    error_log("Mailer :  error ".$mailer->ErrorInfo)." ";
    echo  "fail";
    }
    else {
    echo "sent";
    }
    }
   */
}

?>
