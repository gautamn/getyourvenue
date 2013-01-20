<?php

/*
 * Created on Jul 30, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once ("../service/VenueService.php");
require_once ("../service/MailService.php");
require_once ("../constants/Constants.php");

$action="";
$response='';

if (array_key_exists('actionType', $_POST) && $_POST['actionType'] != null)
	$action = $_POST['actionType'];
else
	if (array_key_exists('actionType', $_GET) && $_GET['actionType'] != null)
		$action = $_GET['actionType'];

//echo "Booking Controller------".$response."  action:".$action;
        
$venueService = new VenueService();

if($action == "bookVenue") {
	$response = $venueService->bookVenue();
}

if($action == "bookNow") {
	$response = $venueService->bookNow();
}

if($action == "bookAlliedService") {
	$response = $venueService->bookAlliedService();
}

$name = $_POST['name'];
$email = $_POST['email'];
$contactNumber = $_POST['contactNumber'];
$location='';
if (array_key_exists('venueId', $_POST) && $_POST['venueId'] != null)
	$location = $_POST['venueId'];
$date = $_POST['date'];
$budget = $_POST['budget'];

$function='';
if (array_key_exists('function', $_POST) && $_POST['function'] != null)
	$function = $_POST['function'];

$serviceName = '';
 if (array_key_exists('serviceName', $_POST) && $_POST['serviceName'] != null)
	$serviceName = $_POST['serviceName'];

 $mailStatus = "";
if ($response == 1) {
	$mailService = new MailService();
	//echo "Booking Controller".$serviceName;
       
        if($serviceName!='')
            $mailStatus = $mailService->sendBookingNotificationMail($name, $contactNumber, $email, $location, $serviceName, $budget, $date,"SERVICE_NOTIFICATION");
        else $mailStatus = $mailService->sendBookingNotificationMail($name, $contactNumber, $email, $location, $function, $budget, $date,"VENUE_NOTIFICATION");
            
}

//echo $mailStatus;
require_once ("../view/confirmation.php");
?>
