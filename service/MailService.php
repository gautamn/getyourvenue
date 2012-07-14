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
	
            $constants = new Constants();
            $mailService = new MailService();
            
            if($constants->sendMailviaGMail) 
                $mailService->sendBookingNotificationMailviaGmail($username,$phone,$emailid,$location,$function,$budget,$preferredDate);
            else
                $mailService->sendBookingNotificationMailviaPHPMail($username,$phone,$emailid,$location,$function,$budget,$preferredDate);
         
	}
	
        function sendBookingNotificationMailviaPHPMail($username,$phone,$emailid,$location,$function,$budget,$preferredDate){
		
		$constants = new Constants();
		$msg="Hi Team,\n\n".
			"User ".$username." wants to get a venue. The full user information is:\n\n".
			"Phone: ".$phone."\n".						
			"Email: ".$emailid."\n".
			"Location: ".$location."\n".						
			"Function: ".$function."\n".
			"Budget: ".$budget."\n".						
			"Preferred Date: ".$preferredDate."\n\n".
			"from"."\n".
			"GYK Admin";	

		$subject=$username." wants to Get a Venue---GYV Admin!!!";
		//$to=$constants->mailTo_gmail;
		mail('gautamn2002@getyourvenue.com',$subject,$msg);
              
	}
        
	function sendBookingNotificationMailviaGmail($username,$phone,$emailid,$location,$function,$budget,$preferredDate){
		
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
			"User ".$username." wants to get a venue. The full user information is:<br><br>".
			"Phone: ".$phone."<br>".						
			"Email: ".$emailid."<br>".
			"Location: ".$location."<br>".						
			"Function: ".$function."<br>".
			"Budget: ".$budget."<br>".						
			"Preferred Date: ".$preferredDate."<br><br>".
			"from"."<br>".
			"GYK Admin";					
				
		
		$mailer->MsgHTML($msg);
		$mailer->Subject =$username." wants to Get a Venue---GYV Admin!!!";
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
