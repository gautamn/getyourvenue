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

if (array_key_exists('action', $_POST) && $_POST['action'] != null)
	$action = $_POST['action'];
else
	if (array_key_exists('action', $_GET) && $_GET['action'] != null)
		$action = $_GET['action'];

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

//echo "Booking Controller------".$response;

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
	//echo "Booking Controller".$name.$email.$contactNumber.$email.$location.$function;
       
        if($serviceName!='')
            $mailStatus = $mailService->sendServiceBookingNotificationMailviaGmail($name, $contactNumber, $email, $location, $serviceName, $budget, $date);
        else $mailStatus = $mailService->sendBookingNotificationMail($name, $contactNumber, $email, $location, $function, $budget, $date);
            
}

//echo $mailStatus;
require_once ("../view/confirmation.php");
?>
