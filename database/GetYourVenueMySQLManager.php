<?php

require_once ("../util/DBUtils.php");
require_once ("../constants/DBConstants.php");
require_once ("../constants/SEOConstants.php");
require_once ("../exception/DBSourceException.php");
require_once ("../model/Venue.php");
require_once ("../model/VenueType.php");
require_once ("../model/Capacity.php");
require_once ("../model/PopularChoice.php");
require_once ("../model/BookingInfo.php");
require_once ("../model/AlliedServices.php");
require_once ("../model/CorporateFunctions.php");
require_once ("../model/SocialFunctions.php");

class GetYourVenueMySQLManager {

  function getVenues($regionId, $categoryId, $capacityId) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueList = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $query = $this->getSearchQuery($regionId, $categoryId, $capacityId);
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {

        $venue = new Venue();
        $venue->id = $row['id'];
        $venue->venueId = $row['venueid'];
        $venue->venueName = $row['name'];
        $venue->venueAddr1 = $row['address1'];
        $venue->venueAddr2 = $row['address2'];
        $venue->content = $row['content'];
        $venue->mapUrl = $row['iframe'];
        $venue->altTag = (isset($row['image_alt_tag']) && $row['image_alt_tag']!="") ? $row['image_alt_tag'] : $row['name'];

        $venueList[] = $venue;
      }
    }

    mysql_close($connection);
    return $venueList;
  }

  function getVenuesforPagination($regionId, $categoryId, $capacityId, $startIndex, $offset) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueList = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $query = $this->getSearchQueryforPagination($regionId, $categoryId, $capacityId, $startIndex, $offset);
      $result = mysql_query($query);

      while ($row = mysql_fetch_array($result)) {

        $venue = new Venue();
        $venue->id = $row['id'];
        $venue->venueId = $row['venueid'];
        $venue->venueName = $row['name'];
        $venue->venueAddr1 = $row['address1'];
        $venue->venueAddr2 = $row['address2'];
        $venue->content = $row['content'];
        $venue->mapUrl = $row['iframe'];
        $venue->altTag = ($row['image_alt_tag']!="") ? $row['image_alt_tag'] : $row['name'];

        $venueList[] = $venue;
      }
    }

    mysql_close($connection);
    return $venueList;
  }

  function getVenueByChoice($choiceId) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueList = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      if ($choiceId != 0)
        $query = "SELECT name,address1,address2,content,id,venueid,image_alt_tag FROM venue WHERE is_active=1 AND
									      popular_choice=" . $choiceId;
      else
        $query = "SELECT name,address1,address2,content,id,venueid,image_alt_tag FROM venue ve
                                        WHERE popular_choice!=1 AND popular_choice!=2 AND popular_choice!=3 AND 
                                        popular_choice!=4 AND popular_choice!=5 AND is_active=1";
      $result = mysql_query($query);
      //echo "Query 99".$query;
      while ($row = mysql_fetch_array($result)) {

        $venue = new Venue();
        $venue->id = $row['id'];
        $venue->venueId = $row['venueid'];
        $venue->venueName = $row['name'];
        $venue->venueAddr1 = $row['address1'];
        $venue->venueAddr2 = $row['address2'];
        $venue->content = $row['content'];
        $venue->altTag = ($row['image_alt_tag']!="") ? $row['image_alt_tag'] : $row['name'];
        $venueList[] = $venue;
      }
    }

    mysql_close($connection);
    return $venueList;
  }

  function getVenueByChoiceForPagination($choiceId, $startIndex, $offset) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueList = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      if ($choiceId != 0)
        $query = "SELECT ve.name, ve.address1, ve.address2, ve.content, ve.id, ve.venueid, ve.image_alt_tag FROM venue ve WHERE ve.is_active=1 AND ve.popular_choice=" . $choiceId . " ORDER BY ve.zone_rank limit " . $startIndex . "," . $offset;
      else
        $query = "SELECT ve.name,ve.address1,ve.address2,ve.content,ve.id,ve.venueid, ve.image_alt_tag FROM venue ve
					 WHERE ve.popular_choice!=1 AND ve.popular_choice!=2 AND ve.popular_choice!=3 AND 
					 ve.popular_choice!=4 AND ve.popular_choice!=5  AND ve.is_active=1 ORDER BY ve.zone_rank limit " . $startIndex . "," . $offset;

      //echo "Query:135:".$query;
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {

        $venue = new Venue();
        $venue->id = $row['id'];
        $venue->venueId = $row['venueid'];
        $venue->venueName = $row['name'];
        $venue->venueAddr1 = $row['address1'];
        $venue->venueAddr2 = $row['address2'];
        $venue->content = $row['content'];
        $venue->altTag = ($row['image_alt_tag']!="") ? $row['image_alt_tag'] : $row['name'];
        $venueList[] = $venue;
      }
    }

    mysql_close($connection);
    return $venueList;
  }

  function getVenue($venueid) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueList = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $result = mysql_query("SELECT ve.*,ve.title,ve.meta_description,meta_keyword,pc.*,reg.* FROM venue ve
                                               LEFT JOIN popular_choice pc ON ve.popular_choice=pc.popularchoiceid 
                                               LEFT JOIN region reg ON ve.regionid=reg.regionid WHERE ve.venueid='" . $venueid . "'");

      while ($row = mysql_fetch_array($result)) {
        $venue = new Venue();
        $venue->id = $row['id'];
        $venue->isActive = $row['is_active'];
        $venue->venueId = $row['venueid'];
        $venue->rank = $row['rank'];
        $venue->venueName = $row['name'];
        $venue->regionid = $row['regionid'];
        $venue->regiontype = $row['regiontype'];
        $venue->regionname = $row['regionname'];
        $venue->popularchoiceid = $row['popularchoiceid'];
        $venue->popularchoicename = $row['popularchoicename'];
        $venue->venueAddr1 = $row['address1'];
        $venue->venueAddr2 = $row['address2'];
        $venue->content = $row['content'];
        $venue->iframe = $row['iframe'];
        $venue->title = $row['title'];
        $venue->metaDescription = $row['meta_description'];
        $venue->metaKeyword = $row['meta_keyword'];
        $venue->altTag = ($row['image_alt_tag']!="") ? $row['image_alt_tag'] : $row['name'];
        $venueList[] = $venue;
      }
    }
    mysql_close($connection);
    return $venueList;
  }

  function getVenueBySearchResult($venueName) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueList = array();
    $venueName = strtolower($venueName);
    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $query = "SELECT ve.name,ve.address1,ve.address2,ve.content,ve.id,ve.venueid, ve.image_alt_tag FROM venue ve WHERE " .
              " ve.name LIKE '%" . $venueName . "%'  AND ve.is_active=1 ORDER BY ve.rank";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {
        $venue = new Venue();
        $venue->id = $row['id'];
        $venue->venueId = $row['venueid'];
        $venue->venueName = $row['name'];
        $venue->venueAddr1 = $row['address1'];
        $venue->venueAddr2 = $row['address2'];
        $venue->content = $row['content'];
        $venue->altTag = ($row['image_alt_tag']!="") ? $row['image_alt_tag'] : $row['name'];
        $venueList[] = $venue;
      }
    }

    mysql_close($connection);
    return $venueList;
  }

  function getRegionList() {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $regionList = array();


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from region");
      while ($row = mysql_fetch_array($result)) {

        $region = new Region();
        $region->regionId = $row['regionid'];
        $region->regionName = $row['regionname'];
        $regionList[] = $region;
      }
    }

    mysql_close($connection);
    return $regionList;
  }

//function

  function getRegionByRegionType($regionType) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $regionName = "";


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from region where regiontype='" . $regionType . "'");
      while ($row = mysql_fetch_array($result)) {
        $regionName = $row['regionname'];
      }
    }

    mysql_close($connection);
    return $regionName;
  }

//function

  function alliedServices($seoId) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $allied = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $query = "select * from allied_services where seo_id='" . $seoId . "'";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {
        $alliedServices = new AlliedServices();
        $alliedServices->seoId = $row['SEO_ID'];
        $alliedServices->bannerPath = $row['BANNER_PATH'];
        $alliedServices->heading = $row['HEADING'];
        $alliedServices->html_content = $row['HTML_CONTENT'];
        $alliedServices->title = $row['TITLE'];
        $alliedServices->metaDescription = $row['META_DESCRIPTION'];
        $alliedServices->metaKeyword = $row['META_KEYWORD'];
        $alliedServices->jcarouselPath = $row['JCAROUSEL_IMAGES_FOLDER_PATH'];
        $alliedServices->themesUrl = $row['THEMES_URLS'];
        $allied[] = $alliedServices;
      }
    }
    mysql_close($connection);
    return $allied;
  }

//function
  // fuction to get auto suggest data from the database
  function getVenueJson($autoSuggest) {
    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $input = $autoSuggest;
      $data = array();
      $query = mysql_query("SELECT venueid, name FROM venue WHERE venueid LIKE '%$input%' AND is_active='Y'");
      while ($row = mysql_fetch_assoc($query)) {
        $data = $row['name'];
        echo ($data);
        echo ("\n");
      }
    }
    mysql_close($connection);
  }

//function

  function getRegionIdByRegionType($regionType) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $regionId = "";
    if ($regionType == "delhi-ncr") {
      $regionId = "0";
    } else {
      if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
        throw new DBSourceException("Unable to connect to a datasource.");
      } else {
        $result = mysql_query("SELECT regionid from region where regiontype='" . $regionType . "'");
        while ($row = mysql_fetch_array($result)) {
          $regionId = $row['regionid'];
        }
      }
    }

    mysql_close($connection);
    return $regionId;
  }

//function

  function getVenueTypeIdByVenueType($venueType) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueTypeId = "";

    if ($venueType == "wedding-venues") {
      $venueTypeId = "0";
    } else {
      if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
        throw new DBSourceException("Unable to connect to a datasource.");
      } else {

        $result = mysql_query("SELECT venuetypeid from venuetype where venuetype='" . $venueType . "'");
        while ($row = mysql_fetch_array($result)) {
          $venueTypeId = $row['venuetypeid'];
        }
      }
    }

    mysql_close($connection);
    return $venueTypeId;
  }

//function

  function getSearchQueryforPagination($regionId, $categoryId, $capacityId, $startIndex, $offset) {

    $fields = "SELECT v.id,v.venueid,v.name,v.address1,v.address2,v.content,v.iframe, v.image_alt_tag ";
    $entity = "from venue v ";
    $orderBy = "order by v.rank" . " ";
    $conditionClause = "";
    $isFirstCondition = true;

    if ($regionId != 0) {
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="v.regionid=" . $regionId . " ";
      $isFirstCondition = false;
    }

    if ($categoryId != 0) {
      $entity.=",venue_type_mapping vtm" . " ";
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="vtm.venuetypeid = " . $categoryId . " AND v.id=vtm.venueid" . " ";
      $isFirstCondition = false;
    }

    if ($capacityId != 0) {
      $entity.=",venue_capacity_mapping vcm" . " ";
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="vcm.capacityid=" . $capacityId . " AND v.id=vcm.venueid" . " AND v.is_active=1 ";
      $isFirstCondition = false;
    }

    $query = $fields . $entity . $conditionClause . $orderBy;
    $query.=" limit " . $startIndex . "," . $offset;
    //echo $query;
    return $query;
  }

//function

  function getVenueByVenueType($venueType) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venue = "";


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from venuetype where venuetype='" . $venueType . "'");
      while ($row = mysql_fetch_array($result)) {
        $venue = $row['type'];
      }
    }

    mysql_close($connection);
    return $venue;
  }

//function

  function getCapacityById($capacityId) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $capacityRange = "";


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from capacity where capacityid=" . $capacityId);
      while ($row = mysql_fetch_array($result)) {
        $capacityRange = $row['range'];
      }
    }

    mysql_close($connection);
    return $capacityRange;
  }

//function

  function getSearchQuery($regionId, $categoryId, $capacityId) {

    $fields = "SELECT v.id,v.venueid,v.name,v.address1,v.address2,v.content,v.iframe ";
    $entity = "from venue v " . " ";
    $orderBy = "order by v.id desc" . " ";
    $conditionClause = "";
    $isFirstCondition = true;

    if ($regionId != 0) {
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="v.regionid=" . $regionId . " ";
      $isFirstCondition = false;
    }

    if ($categoryId != 0) {
      $entity.=",venue_type_mapping vtm" . " ";
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="vtm.venuetypeid = " . $categoryId . " AND v.id=vtm.venueid" . " ";
      $isFirstCondition = false;
    }

    if ($capacityId != 0) {
      $entity.=",venue_capacity_mapping vcm" . " ";
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="vcm.capacityid=" . $capacityId . " AND v.id=vcm.venueid" . " ";
      $isFirstCondition = false;
    }

    $query = $fields . $entity . $conditionClause . $orderBy;

    return $query;
  }

//function

  function getSearchRecordSize($regionId, $categoryId, $capacityId) {

    $fields = "SELECT count(v.id) as id ";
    $entity = "from venue v" . " ";
    $conditionClause = "";
    $isFirstCondition = true;

    if ($regionId != 0) {
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="v.regionid=" . $regionId . " ";
      $isFirstCondition = false;
    }

    if ($categoryId != 0) {
      $entity.=",venue_type_mapping vtm" . " ";
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="vtm.venuetypeid = " . $categoryId . " AND v.id=vtm.venueid" . " ";
      $isFirstCondition = false;
    }

    if ($capacityId != 0) {
      $entity.=",venue_capacity_mapping vcm" . " ";
      if ($isFirstCondition)
        $conditionClause = "WHERE" . " ";
      else
        $conditionClause.="AND" . " ";
      $conditionClause.="vcm.capacityid=" . $capacityId . " AND v.id=vcm.venueid" . " ";
      $isFirstCondition = false;
    }

    $query = $fields . $entity . $conditionClause;

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $dataBaseResponse = "";

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {

        $dataBaseResponse = $row['id'];
      }
    }

    mysql_close($connection);
    return $dataBaseResponse;
  }

//function

  function getVenueTypeList() {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $venueTypeList = array();


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from venuetype");
      while ($row = mysql_fetch_array($result)) {

        $venueType = new VenueType();
        $venueType->venueTypeId = $row['venuetypeid'];
        $venueType->venueTypeName = $row['type'];
        $venueTypeList[] = $venueType;
      }
    }

    mysql_close($connection);
    return $venueTypeList;
  }

//function
  function getCapacityList() {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $capacityList = array();


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from capacity");
      while ($row = mysql_fetch_array($result)) {

        $capacity = new Capacity();
        $capacity->capacityId = $row['capacityid'];
        $capacity->capacityRange = $row['range'];
        $capacityList[] = $capacity;
      }
    }

    mysql_close($connection);
    return $capacityList;
  }

//function

  function getPopularChoiceList() {
    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $popularChoiceList = array();


    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {

      $result = mysql_query("SELECT * from popular_choice");
      while ($row = mysql_fetch_array($result)) {

        $popularChoice = new PopularChoice();
        $popularChoice->popularChoiceId = $row['popularchoiceid'];
        $popularChoice->popularChoiceName = $row['popularchoicename'];
        $popularChoiceList[] = $popularChoice;
      }
    }

    mysql_close($connection);
    return $popularChoiceList;
  }

//function
  function submitBookingDetails($name, $email, $date, $function, $contactNumber, $budget) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $dataBaseResponse = "";

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $dataBaseResponse = mysql_query("INSERT INTO book_now " .
              "(name,email,preferred_date,type_of_function,contact_no,budget,insertdate) VALUES" .
              "('" . $name . "','" . $email . "','" . $date . "','" . $function . "','" . $contactNumber . "'," .
              "'" . $budget . "',CURRENT_TIMESTAMP())");
    }
    mysql_close($connection);
    return $dataBaseResponse;
  }

  function corporateFunctions($seoId) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $corporate = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $query = "select * from corporate_functions where seo_id='" . $seoId . "' AND IS_ACTIVE=1";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {
        $corporateFunctions = new CorporateFunctions();
        $corporateFunctions->seoId = $row['SEO_ID'];
        $corporateFunctions->bannerPath = $row['BANNER_PATH'];
        $corporateFunctions->heading = $row['HEADING'];
        $corporateFunctions->html_content = $row['HTML_CONTENT'];
        $corporateFunctions->title = $row['TITLE'];
        $corporateFunctions->metaDescription = $row['META_DESCRIPTION'];
        $corporateFunctions->metaKeyword = $row['META_KEYWORD'];
        $corporateFunctions->jcarouselPath = $row['JCAROUSEL_IMAGES_FOLDER_PATH'];
        $corporateFunctions->themesUrl = $row['THEMES_URLS'];
        $corporate[] = $corporateFunctions;
      }
    }
    mysql_close($connection);
    return $corporate;
  }

  function socialFunctions($seoId) {

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    $social = array();

    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $query = "select * from social_functions WHERE SEO_ID='" . $seoId . "' AND IS_ACTIVE=1";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result)) {
        $socialFunctions = new CorporateFunctions();
        $socialFunctions->seoId = $row['SEO_ID'];
        $socialFunctions->bannerPath = $row['BANNER_PATH'];
        $socialFunctions->heading = $row['HEADING'];
        $socialFunctions->html_content = $row['HTML_CONTENT'];
        $socialFunctions->title = $row['TITLE'];
        $socialFunctions->metaDescription = $row['META_DESCRIPTION'];
        $socialFunctions->metaKeyword = $row['META_KEYWORD'];
        $socialFunctions->jcarouselPath = $row['JCAROUSEL_IMAGES_FOLDER_PATH'];
        $socialFunctions->themesUrl = $row['THEMES_URLS'];
        $social[] = $socialFunctions;
      }
    }
    mysql_close($connection);
    return $social;
  }

}

?>