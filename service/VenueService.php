<?php

/*
 * Created on Jul 6, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require_once ("../database/GetYourVenueMySQLManager.php");
require_once ("../constants/SEOConstants.php");

class VenueService {

  function searchVenue() {

    $regionType = $_GET['region'];
    $categoryType = $_GET['category'];
    $capacityId = $_GET['capacity'];
    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $regionId = $getYourVenueMySQLManager->getRegionIdByRegionType($regionType);
    if ($regionId == "")
      $regionId = -1;
    $categoryId = $getYourVenueMySQLManager->getVenueTypeIdByVenueType($categoryType);
    if ($categoryId == "")
      $categoryId = -1;
    return $getYourVenueMySQLManager->getVenues($regionId, $categoryId, $capacityId);
  }

//function

  function searchVenueForPagination($page) {

    $regionType = $_GET['region'];
    $categoryType = $_GET['category'];
    $capacityId = $_GET['capacity'];
    $offset = 10;
    $startIndex = 0;
    $startIndex = ($page - 1) * $offset + $startIndex;
    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $regionId = $getYourVenueMySQLManager->getRegionIdByRegionType($regionType);
    if ($regionId == "")
      $regionId = -1;
    $categoryId = $getYourVenueMySQLManager->getVenueTypeIdByVenueType($categoryType);
    if ($categoryId == "")
      $categoryId = -1;
    return $getYourVenueMySQLManager->getVenuesforPagination($regionId, $categoryId, $capacityId, $startIndex, $offset);
  }

//function

  function bookNow() {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contactNumber'];
    $preferred_region = $_POST['preferred_region'];
    $preferred_venue = $_POST['venueId'];
    $preferred_date = $_POST['date'];
    $no_of_guests = $_POST['no_of_guests'];
    $budget = $_POST['budget'];
    $type_of_function = $_POST['function'];

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    return $getYourVenueMySQLManager->submitBookingDetails($name, $email, $preferred_date, $type_of_function, $contact_no, $budget);
  }

  function bookVenue() {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $function = $_POST['function'];
    $contactNumber = $_POST['contactNumber'];
    $budget = $_POST['budget'];
    $location = $_POST['venueId'];

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $databaseResponse = $getYourVenueMySQLManager->submitBookingDetails($name, $email, $date, $function, $contactNumber, $budget);

    return $databaseResponse;
  }

  function bookAlliedService() {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $function = $_POST['function'];
    $contactNumber = $_POST['contactNumber'];
    $budget = $_POST['budget'];
    $location = '';
    if (array_key_exists('venueId', $_POST) && $_POST['venueId'] != null)
      $location = $_POST['venueId'];
    $serviceName = $_POST['serviceName'];

    if ($function != 'Enter your Function')
      $serviceName = $serviceName . " for " . $function;

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $databaseResponse = $getYourVenueMySQLManager->submitBookingDetails($name, $email, $date, $serviceName, $contactNumber, $budget);

    return $databaseResponse;
  }

  function getVenueByChoice() {

    if (array_key_exists('option', $_GET) && $_GET['option'] != null)
      $choiceId = $_GET['option'];
    else
      $choiceId = 0; //TODO (hard code choiceId)

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    return $getYourVenueMySQLManager->getVenueByChoice($choiceId);
  }

// function getVenueByChoice

  function getVenueBySearchResult($searchKeyword) {
    $page = 1;
    if (!empty($_GET['page'])) {
      $page = (int) $_GET['page'];
    }

    $offset = 10;
    $startIndex = 0;
    $startIndex = ($page - 1) * $offset + $startIndex;

    //$searchKeyword = isset($_REQUEST['venueid']) ? trim($_REQUEST['venueid']) : '';
    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    return $getYourVenueMySQLManager->getVenueBySearchResult($searchKeyword, $startIndex, $offset);
  }

  function getVenueByChoiceForPagination($page) {

    if (array_key_exists('option', $_GET) && $_GET['option'] != null)
      $choiceId = $_GET['option'];
    else
      $choiceId = 0; //TODO (hard code choiceId)

    $offset = 10;
    $startIndex = 0;
    $startIndex = ($page - 1) * $offset + $startIndex;

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    return $getYourVenueMySQLManager->getVenueByChoiceForPagination($choiceId, $startIndex, $offset);
  }

// function getVenueByChoice

  function getVenue() {

    if (array_key_exists('id', $_GET) && $_GET['id'] != null)
      $venueId = $_GET['id'];
    else
      $venueId = 0; //TODO (hard code choiceId)
    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    return $getYourVenueMySQLManager->getVenue($venueId);
  }

// function getVenueByChoice

  function getRegion() {
    //$regionInfo = explode(",_id:", $_GET['region']); //TODO hard code
    $regionType = $_GET['region'];

    if ($regionType == "delhi-ncr")
      $regionName = "delhi-ncr";
    else {
      $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
      $regionName = $getYourVenueMySQLManager->getRegionByRegionType($regionType);
    }

    return $regionName;
  }

//function

  function getCategory() {
    //$categoryInfo = explode(",_id:", $_GET['category']); //TODO hard code
    $categoryType = $_GET['category'];

    if ($categoryType == "wedding-venues")
      $categoryName = "wedding-venues";
    else {
      $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
      $categoryName = $getYourVenueMySQLManager->getVenueByVenueType($categoryType);
    }

    return $categoryName;
  }

//function

  function getCapacity() {
    //$capacityInfo = explode(",_id:", $_GET['capacity']); //TODO hard code
    $capacityId = $_GET['capacity'];
    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $capacityName = $getYourVenueMySQLManager->getCapacityById($capacityId);

    return $capacityName;
  }

//function

  function contactUs() {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_num = $_POST['contact_num'];
    $message = $_POST['txt_area'];

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();

    return $getYourVenueMySQLManager->submitBookingDetails($name, $email, '', '', $contact_num, '');
  }

  function geTotalDataCount() {

    $regionInfo = explode(",_id:", $_POST['region']); //TODO hard code
    $regionId = $regionInfo[1];

    $categoryInfo = explode(",_id:", $_POST['category']); //TODO hard code
    $categoryId = $categoryInfo[1];

    $capacityInfo = explode(",_id:", $_POST['capacity']); //TODO hard code
    $capacityId = $capacityInfo[1];


    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $count = $getYourVenueMySQLManager->getSearchRecordSize($regionId, $categoryId, $capacityId);

    return $count;
  }

  function getSEOConstant($action, $venue) {

    $SEOConstants = new SEOConstants();
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $pageNo = ($page > 1) ? "Page " . $page . " - " : "";
    $seoDefaultConstant = "";
    $seoDefaultConstant = '<title>' . $pageNo . $SEOConstants->defaulTitle . '</title>';
    $seoDefaultConstant.= '<meta name="description" content="' . $SEOConstants->defaulMetaDescription . '" />';
    $seoDefaultConstant.= '<meta name="keywords" content="' . $SEOConstants->defaulMetaKeyword . '" />';

    if ($action == "viewChoices") {

      $option = 0;

      if (array_key_exists('option', $_GET) && $_GET['option'] != null)
        $option = $_GET['option'];

      if ($option == 1)
        return $SEOConstants->ChhatarpurTag;
      if ($option == 2)
        return $SEOConstants->MundkaTag;
      if ($option == 3)
        return $SEOConstants->GTKarnaRoadTag;
      if ($option == 4)
        return $SEOConstants->NH8Tag;
      if ($option == 5)
        return $SEOConstants->VaishaliTag;
      if ($option == 0)
        return $seoDefaultConstant;
    }

    if ($action == "searchVenue") {
      $category = "";
      $region = "";
      if (array_key_exists('category', $_GET) && $_GET['category'] != null)
        $category = $_GET['category'];
      if (array_key_exists('category', $_GET) && $_GET['category'] != null)
        $region = $_GET['region'];

      if ($region == "delhi-ncr") {
        switch ($category) {
          case "farm-house":
            return $SEOConstants->delhiNCRFarmHouseTag;
            break;
          case "banquet-hall":
            return $SEOConstants->delhiNCRBanquetHallTag;
            break;
          default :
            break;
        }
      }


      if ($region == "delhi-ncr" && $category == "farm-house")
        return $SEOConstants->delhiNCRFarmHouseTag;
      if ($region == "delhi-ncr" && $category == "banquet-hall")
        return $SEOConstants->delhiNCRBanquetHallTag;
      if ($region == "north-delhi" && $category == "farm-house")
        return $SEOConstants->northDelhiFarmHouseTag;
      if ($region == "north-delhi" && $category == "banquet-hall")
        return $SEOConstants->northDelhiBanquetHallTag;
      if ($region == "south-delhi" && $category == "farm-house")
        return $SEOConstants->southhDelhiFarmHouseTag;
      if ($region == "south-delhi" && $category == "banquet-hall")
        return $SEOConstants->southDelhiBanquetHallTag;
      if ($region == "east-delhi" && $category == "farm-house")
        return $SEOConstants->eastDelhiFarmHouseTag;
      if ($region == "east-delhi" && $category == "banquet-hall")
        return $SEOConstants->eastDelhiBanquetHallTag;
      if ($region == "west-delhi" && $category == "farm-house")
        return $SEOConstants->westDelhiFarmHouseTag;
      if ($region == "west-delhi" && $category == "banquet-hall")
        return $SEOConstants->westDelhiBanquetHallTag;
      if ($region == "central-delhi" && $category == "farm-house")
        return $SEOConstants->centralDelhiFarmHouseTag;
      if ($region == "central-delhi" && $category == "banquet-hall")
        return $SEOConstants->centralDelhiBanquetHallTag;
      if ($region == "ghaziabad" && $category == "farm-house")
        return $SEOConstants->ghaziabadFarmHouseTag;
      if ($region == "ghaziabad" && $category == "banquet-hall")
        return $SEOConstants->ghaziabadBanquetHallTag;
      if ($region == "noida" && $category == "farm-house")
        return $SEOConstants->noidaFarmHouseTag;
      if ($region == "noida" && $category == "banquet-hall")
        return $SEOConstants->noidaBanquetHallTag;
      if ($region == "gurgaon" && $category == "farm-house")
        return $SEOConstants->gurgaonFarmHouseTag;
      if ($region == "gurgaon" && $category == "banquet-hall")
        return $SEOConstants->gurgaonBanquetHallTag;
      if ($region == "delhi-ncr" && $category == "wedding-venues")
        return $seoDefaultConstant;
    }

    if ($action == 'viewSearchResult') {
      $searchKeyword = isset($_REQUEST['venueid']) ? trim($_REQUEST['venueid']) . ' like ' : '';
      return '<title>' . $searchKeyword . 'Wedding venues in Delhi NCR | Farmhouses, Banquet Halls, Hotel | Getyourvenue.com</title><meta name="description" content="Find the best Banquet Hall, Farm house, Hotels in Delhi NCR' . $searchKeyword . ' can now be booked at your door step! Wedding Farm House experts at GetYourVenue.com are always at your quick service." /><meta name="keywords" content="wedding venue delhi, wedding farm house delhi, wedding banquet hall delhi, find ' . $searchKeyword . 'wedding venue in delhi ncr" />';
    }

    if ($action == "venueDetails") {
      if ($venue != null) {
        $title = $venue->title;
        $description = $venue->metaDescription;
        $keyword = $venue->metaKeyword;

        if (($title != null || $title != "") && ($description != null || $description != "") && ($keyword != null || $keyword != "")) {

          $SEOConstant = "";

          $SEOConstant.= "<title>" . $title . "</title>";
          $SEOConstant.= '<meta name="description" content="' . $description . '" />';
          $SEOConstant.= '<meta name="keyword" content="' . $keyword . '" />';

          return $SEOConstant;
        }
        else
          return $seoDefaultConstant;
      }//if venue
    }//if venueDetails
  }

//function

  function isValidUser() {
    $userId = $_POST['userId'];
    $password = $_POST['password'];
    $roleId = "1";

    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    if ($getYourVenueMySQLManager->isValidUser($userId, $password, $roleId))
      return true;
    else
      return false;
  }

//function

  function getSessionId() {

    $sessionId = session_id();
    if (empty($sessionId)) {
      session_start();
      $sessionId = session_id();
    }
    return $sessionId;
  }

//function

  function setCookie($sessionId) {

    if (!isset($_COOKIE["gyvsession"]))
      setcookie("gyvsession", $sessionId, time() + 3600);
  }

//function

  function deleteCookie() {

    if (isset($_COOKIE["gyvsession"]))
      setcookie("gyvsession", "", 1);

    session_destroy();
  }

//function

  function isSessionExist() {

    if (isset($_COOKIE["gyvsession"]))
      return true;

    return false;
  }

//function

  function searchVenueViaPostCall() {

    //$regionInfo = explode(",_id:", $_POST['region']); //TODO hard code
    $regionType = $_POST['region'];

    //$categoryInfo = explode(",_id:", $_POST['category']); //TODO hard code
    $categoryType = $_POST['category'];

    //$capacityInfo = explode(",_id:", $_POST['capacity']); //TODO hard code
    $capacityId = $_POST['capacity'];

    //$pagePointer = $_POST['pagePointer'];TODO
    $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
    $regionId = $getYourVenueMySQLManager->getRegionIdByRegionType($regionType);
    if ($regionId == "")
      $regionId = -1;
    $categoryId = $getYourVenueMySQLManager->getVenueTypeIdByVenueType($categoryType);
    if ($categoryId == "")
      $categoryId = -1;
    //echo "++++++++++++".$regionId."------------".$categoryId;
    return $getYourVenueMySQLManager->getVenues($regionId, $categoryId, $capacityId);
  }

//function
  //function for getting autosuggest data..

  function autoSuggestVenue($autoSuggest) {
    $newData = new GetYourVenueMySQLManager();
    $newData->getVenueJson($autoSuggest);
  }

//function

  function viewReport() {
    $newData = new GetYourVenueMySQLManager();
    return $newData->viewReport();
  }

//function

  function alliedSerices($seoId) {
    $newData = new GetYourVenueMySQLManager();
    return $newData->alliedServices($seoId);
  }

  function socialFunctions($seoId) {
    $newData = new GetYourVenueMySQLManager();
    return $newData->socialFunctions($seoId);
  }

  function corporateFunctions($seoId) {
    $newData = new GetYourVenueMySQLManager();
    return $newData->corporateFunctions($seoId);
  }

//function
}

?>