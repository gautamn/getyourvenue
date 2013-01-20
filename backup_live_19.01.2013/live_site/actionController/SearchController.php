<?php
require_once ("../service/VenueService.php");

if (array_key_exists('q', $_POST) && $_POST['q'] != null)
	$action = $_POST['q'];
else
	if (array_key_exists('q', $_GET) && $_GET['q'] != null)
		$action = $_GET['q'];
	$venueService = new VenueService();
	$venueService->autoSuggestVenue($action);
?>