<?php

/* @name: test-email-pro
 * @auther: Manish Sahu
 * @created On: Jun 7, 2013, 11:26:58 PM
 */
error_reporting(0);
require_once ("../service/VenueService.php");
require_once ("../service/MailService.php");
require_once ("../constants/Constants.php");

$mailService = new MailService();

$emailSender = array('manish582@gmail.com', 'getyourvenue@gmail.com', 'gautamn2002@gmail.com', 'gyvleads@gmail.com', 'info@getyourvenue.com', 'marketing@getyourvenue.com');
foreach ($emailSender as $emailid) {
  $mailService->sendPromotionalEmailToUser($emailid);
  echo '<br />Sending to ' . $emailid;
}
?>