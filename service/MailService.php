<?php
/*
 * Created on Jul 28, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
include("../PHPMailer_5.2.0/class.phpmailer.php");
include("../constants/Constants.php");

class MailService{
	
	function sendBookingNotificationMail($username,$phone,$emailid,$location,$function,$budget,$preferredDate){
		
		/*Send mail via Gmail SMTP*/
		$mailer = new PHPMailer();
		$constants = new Constants();
		$mailer->IsSMTP();
		$mailer->Host = $constants->host_gmail;
		$mailer->SMTPAuth = $constants->mailerSMTPAuth_gmail;
		$mailer->Username = $constants->username_gmail;
		$mailer->Password = $constants->password_gmail;
		$mailer->From = $constants->mailFrom_gmail;
		$mailer->FromName = $constants->mailFromName_gmail;
		$mailer->Subject = $username." wants to Get a Venue!!!";
		$mailer->Body = "Hi Team,\n\n".
						"\tUser ".$username." wants to get a venue. The full user information is:\n\n".
						"\t\tPhone: ".$phone."\n".						
						"\t\tEmail: ".$emailid."\n".
						"\t\tLocation: ".$location."\n".						
						"\t\tFunction: ".$function."\n".
						"\t\tBudget: ".$budget."\n".						
						"\t\tPreferred Date: ".$preferredDate."\n\n".
		"from"."\n".
		"GYK Admin";				
		
		$str=explode(",", $constants->mailTo);
		$mailer->AddAddress($str[0]);
		$mailer->AddAddress($str[1]);
		$mailer->AddAddress($str[2]);
		
		if(!$mailer->Send()) {
		    error_log("Mailer :  error ".$mailer->ErrorInfo)." : $to";
		    return  "fail";
		}
		else {
		    return "sent";
		} 
		
		
		
		/*$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->Host = 'ssl://smtp.gmail.com:465';
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = 'gautamn2002@gmail.com';
		$mailer->Password = 'I2005dCS';
		$mailer->From = 'gautamn2002@gmail.com';
		
		$mailer->Host = 'mail.getyourvenue.com';
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = 'getyourv';
		$mailer->Password = 'newpassword@1';
		$mailer->From = 'admin@getyourvenue.com';
		
		$mailer->FromName = "Swami";
		$mailer->Subject ="Mail Test for GYV SMTP";
		$mailer->Body = "Hi Team,\n\n".
		"from"."\n".
		"GYK Admin";				
		//$mailer->AddAddress('getyourvenue@gmail.com');
		$mailer->AddAddress('gautamn2002@gmail.com');
		
		if(!$mailer->Send()) {
		    error_log("Mailer :  error ".$mailer->ErrorInfo)." : $to";
		    echo  "fail";
		}
		else {
		    echo "sent";
		} */
		
		/*$mailer = new PHPMailer();
		$constants = new Constants();
		$mailer->IsSMTP();
		$mailer->Host = $constants->host;
		$mailer->SMTPAuth = $constants->mailerSMTPAuth;
		$mailer->Username = $constants->username;
		$mailer->Password = $constants->password;
		$mailer->Host = "mail.getyourvenue.com";
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = "getyourv";
		$mailer->Password = "newpassword@1";
		$mailer->From = "admin@getyourvenue.com";
		
		$mailer->From = $constants->mailFrom;
		$mailer->FromName = $constants->mailFromName;
		$mailer->FromName = "Nitin";
		
		
		$mailer->Subject = $username." wants to Get a Venue---GYV Admin!!!";
		
		$mailer->Body = "Hi Team,\n\n".
						"User ".$username." wants to get a venue. The full user information is:\n\n".
						"Phone: ".$phone."\n".						
						"Email: ".$emailid."\n".
						"Location: ".$location."\n".						
						"Function: ".$function."\n".
						"Budget: ".$budget."\n".						
						"Preferred Date: ".$preferredDate."\n\n".
		"from"."\n".
		"GYK Admin";				
		
		$str=explode(",", $constants->mailTo);
		$mailer->AddAddress($str[0]);
		$mailer->AddAddress($str[1]);
		$mailer->AddAddress($str[2]);
		//$mailer->AddAddress(ronweasely@yahoo.com);
		
		if(!$mailer->Send()) {
		    error_log("Mailer :  error ".$mailer->ErrorInfo)." : $to";
		    return  "fail";
		}
		else {
		    return "sent";
		} 
		*/
		
		
		
	}
}

?>
