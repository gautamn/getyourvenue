<?php

/* @name: sitemap
 * @auther: Manish Sahu
 * @created On: Apr 24, 2013, 10:59:36 PM
 */

$docRoot = realpath(dirname(dirname(__FILE__) . '../'));

require_once ("../constants/Constants.php");
$constants = new Constants();

require_once ("../util/DBUtils.php");
require_once ("../constants/DBConstants.php");
require_once ("../exception/DBSourceException.php");

$arrSiteMap = array();
$dateLastModified = date('Y-m-d');

$dbConstants = new DBConstants();
$dBUtils = new DBUtils();
$connection = $dBUtils->getDBConnection();

//home page
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//about us
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'about-us'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//book_now
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'book_now'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//contact_us
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'contact_us'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//sitemap
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'site-map'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//allied
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'allied-services'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//wedding-venues-in-nh8-pushpanjali
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'wedding-venues-in-nh8-pushpanjali'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//vaishali-vasundhara venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'wedding-venues-in-vaishali-vasundhara'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//chhatarpur venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'wedding-venues-in-chhatarpur'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//wedding-venues-in-delhi-ncr
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'wedding-venues-in-delhi-ncr'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//wedding-venues-in-gt-karnal-road
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'wedding-venues-in-gt-karnal-road'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);
//mundka venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'wedding-venues-in-mundka'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'hourly',
    'priority' => '1.0'
);

//career
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'career'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.9'
);
//non_wedding
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'non_wedding'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//north-delhi - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/north-delhi/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//south-delhi - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/south-delhi/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//east-delhi - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/east-delhi/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//west-delhi - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/west-delhi/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//central-delhi - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/central-delhi/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//ghaziabad - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/ghaziabad/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//noida - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/noida/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//gurgaon - all venues
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/gurgaon/wedding-venues/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//north-delhi - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/north-delhi/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//south-delhi - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/south-delhi/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//east-delhi - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/east-delhi/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//west-delhi - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/west-delhi/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//central-delhi - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/central-delhi/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//ghaziabad - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/ghaziabad/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//noida - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/noida/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//gurgaon - farm-house
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/gurgaon/farm-house/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
########################  banquet-hall ##########################
//north-delhi - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/north-delhi/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//south-delhi - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/south-delhi/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//east-delhi - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/east-delhi/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//west-delhi - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/west-delhi/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//central-delhi - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/central-delhi/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//ghaziabad - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/ghaziabad/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//noida - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/noida/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//gurgaon - banquet-hall
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/gurgaon/banquet-hall/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
######################## hotel ##########################
//north-delhi - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/north-delhi/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//south-delhi - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/south-delhi/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//east-delhi - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/east-delhi/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//west-delhi - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/west-delhi/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//central-delhi - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/central-delhi/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//ghaziabad - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/ghaziabad/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//noida - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/noida/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//gurgaon - hotel
$arrSiteMap[] = array(
    'loc' => trim($constants->DOMAIN_URL . 'venues/gurgaon/hotel/0'),
    'lastmod' => $dateLastModified,
    'changefreq' => 'daily',
    'priority' => '0.8'
);
//allied service list
if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
  throw new DBSourceException("Unable to connect to a datasource.");
} else {
  $query = "SELECT SEO_ID FROM allied_services WHERE IS_ACTIVE=1 ORDER BY DISPLAY_ORDER ASC";
  $result = mysql_query($query);
  if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
      $arrSiteMap[] = array(
          'loc' => trim($constants->DOMAIN_URL . $row['SEO_ID']),
          'lastmod' => $dateLastModified,
          'changefreq' => 'daily',
          'priority' => '0.9'
      );
    }
  }
}
//venue list
if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
  throw new DBSourceException("Unable to connect to a datasource.");
} else {
  $query = "SELECT venueid FROM venue WHERE is_active=1";
  $result = mysql_query($query);
  if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
      $arrSiteMap[] = array(
          'loc' => trim($constants->DOMAIN_URL . 'venue/' . $row['venueid']),
          'lastmod' => $dateLastModified,
          'changefreq' => 'weekly',
          'priority' => '0.5'
      );
    }
  }
}

//Creates a new DOMDocument object
$doc = new DOMDocument('1.0', 'utf-8');
// we want a nice output
$doc->formatOutput = true;
$doc->preserveWhiteSpace = false;
$doc->resolveExternals = true;
$doc->strictErrorChecking = true;
$doc->normalizeDocument();
$doc->recover = true;

// create root element
$root = $doc->createElement("urlset");
$doc->appendChild($root);

$root_attr = $doc->createAttribute('xmlns');
$root->appendChild($root_attr);

$root_attr_text = $doc->createTextNode('http://www.sitemaps.org/schemas/sitemap/0.9');
$root_attr->appendChild($root_attr_text);

$root_attr = $doc->createAttribute('xmlns:xsi');
$root->appendChild($root_attr);

$root_attr_text = $doc->createTextNode('http://www.w3.org/2001/XMLSchema-instance');
$root_attr->appendChild($root_attr_text);

$root_attr = $doc->createAttribute('xsi:schemaLocation');
$root->appendChild($root_attr);

$root_attr_text = $doc->createTextNode('http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
$root_attr->appendChild($root_attr_text);

if (!empty($arrSiteMap)) {
  foreach ($arrSiteMap as $sitemapData) {
    $url = $doc->createElement("url");
    $root->appendChild($url);

    $loc = $doc->createElement("loc");
    $lastmod = $doc->createElement("lastmod");
    $changefreq = $doc->createElement("changefreq");
    $priority = $doc->createElement("priority");

    $url->appendChild($loc);
    $url_text = $doc->createTextNode($sitemapData['loc']);
    $loc->appendChild($url_text);

    $url->appendChild($lastmod);
    $lastmod_text = $doc->createTextNode($sitemapData['lastmod']);
    $lastmod->appendChild($lastmod_text);

    $url->appendChild($changefreq);
    $changefreq_text = $doc->createTextNode($sitemapData['changefreq']);
    $changefreq->appendChild($changefreq_text);

    $url->appendChild($priority);
    $priority_text = $doc->createTextNode(($sitemapData['priority']));
    $priority->appendChild($priority_text);
  }
}

mysql_close($connection);

$doc->save($docRoot . "/sitemap.xml");
echo 'Last Updated on : ', date('F, d Y H:i:s a'), ' ', $constants->DOMAIN_URL, 'sitemap.xml';
?>