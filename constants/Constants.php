<?php
/*
 * Created on Jul 24, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Constants{

	public $DOMAIN_URL = "http://localhost/";
	//public $DOMAIN_URL = "http://getyourvenue.com/";
        public $sendMailviaGMail=FALSE;
	
	/**Gmail account settings**/
	
	public $host_gmail = 'ssl://smtp.gmail.com:465';
	public $port_gmail = '465';
	public $mailerSMTPAuth_gmail = TRUE;
	public $debug_option_gmail = 0;  // debugging: 1 = errors and messages, 2 = messages only
	public $username_gmail = 'gyv.dev@gmail.com';
	public $password_gmail = 'devprod@123';
	public $mailFrom_gmail = 'gyv.dev@gmail.com';
	public $mailFromName_gmail = 'Administrator - Get Your Venue!!!';
	public $mailTo_gmail = 'gyv.dev@gmail.com,gautamn2002@gmail.com,sumit4ubhatt@gmail.com,gyvleads@gmail.com';
	
	
        public $host = 'mail.getyourvenue.com';
	public $mailerSMTPAuth = TRUE;
	public $username = 'getyourv';
	public $password = 'newpassword@1';
	public $mailFrom = 'admin@getyourvenue.com';
	public $mailFromName = 'Administrator - Get Your Venue!!!';
	public $mailTo = 'getyourvenue@gmail.com,gautamn2002@gmail.com,sumit4ubhatt@gmail.com'; //info@getyourvenue.com,
 }
 
?>
