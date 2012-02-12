<?php

require_once ("../service/VenueService.php");

if (array_key_exists('q', $_POST) && $_POST['q'] != null)
	$autoSuggest = $_POST['q'];
else
	if (array_key_exists('q', $_GET) && $_GET['q'] != null)
		$autoSuggest = $_GET['q'];
		
if ($autoSuggest!= null && $autoSuggest !="") {
	$venueService = new VenueService();
	$venueService->autoSuggestVenue($autoSuggest);
}


?>