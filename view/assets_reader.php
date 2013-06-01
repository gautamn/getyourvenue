<?php

/* @name: sitemap
 * @auther: Manish Sahu
 * @created On: Apr 24, 2013, 10:59:36 PM
 */
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');
$docRoot = realpath(dirname(dirname(__FILE__) . '../'));

function endsWith($haystack, $needle) {
  $length = strlen($needle);
  if ($length == 0) {
    return true;
  }
  return (substr($haystack, -$length) === $needle);
}

function getDirectory($path = '.', $isRecursive = false, $level = 0) {
  global $docRoot;
  $dirFiles = array();
  $ignore = array('cgi-bin', '.', '..');
  // Directories to ignore when listing output. Many hosts
  // will deny PHP access to the cgi-bin.
  $dh = @opendir($path);
  // Open the directory to the handle $dh
  while (false !== ( $file = readdir($dh) )) {
    // Loop through the directory
    if (!in_array($file, $ignore)) {
      // Check that this file is not to be ignored
      //$spaces = str_repeat('-', ( $level * 4));
      // Just to add spacing to the list, to better
      // show the directory tree.
      if (is_dir("$path/$file") && $isRecursive) {
        // Its a directory, so we need to keep reading down...
        //echo "<strong>$spaces $file</strong><br />";
        $dirFiles[] = str_replace($docRoot . '/images', '', $path) . $file;
        $dirFiles[] = getDirectory("$path/$file", $isRecursive, ($level + 1));
        // Re-call this same function but on a new directory.
        // this is what makes function recursive.
      } else {
        $dirFiles[] = str_replace($docRoot . '/images', '', $path) . $file;
        //echo "$spaces $file (" . str_replace($docRoot . '/images', '', $path) . "/$file)<br />";
        // Just print out the filename
      }
    }
  }
  closedir($dh);
  return $dirFiles;
  // Close the directory handle
}

require_once ("../constants/Constants.php");
$constants = new Constants();

require_once ("../util/DBUtils.php");
require_once ("../constants/DBConstants.php");
require_once ("../exception/DBSourceException.php");

$arrAlliedServiceData = array();

$dbConstants = new DBConstants();
$dBUtils = new DBUtils();
$connection = $dBUtils->getDBConnection();

//allied service list
if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
  throw new DBSourceException("Unable to connect to a datasource.");
} else {
  $query = "SELECT SEO_ID, BANNER_PATH, JCAROUSEL_IMAGES_FOLDER_PATH, THEMES_URLS FROM allied_services WHERE IS_ACTIVE=1 ORDER BY DISPLAY_ORDER ASC";
  $result = mysql_query($query);
  if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
      $arrAlliedServiceData[] = $row;
    }
  }
}
if (!empty($arrAlliedServiceData)) {
  foreach ($arrAlliedServiceData as $alliedData) {
    echo "<p>===================</p>Allied Service: " . $alliedData['SEO_ID'];
    //allied banner banner
    echo "<br />Banner: ";
    if (!empty($alliedData['BANNER_PATH']) && is_file($docRoot . '/' . $alliedData['BANNER_PATH'])) {
      echo $alliedData['BANNER_PATH'];
    }
    echo "<br />Image Slider: ";
    if (!empty($alliedData['JCAROUSEL_IMAGES_FOLDER_PATH']) && is_dir($docRoot . '/' . $alliedData['JCAROUSEL_IMAGES_FOLDER_PATH'])) {
      $alliedSliderImg = getDirectory($docRoot . '/' . $alliedData['JCAROUSEL_IMAGES_FOLDER_PATH']);
      if (!empty($alliedSliderImg)) {
        echo '[' . count($alliedSliderImg) . ']<br />';
        foreach ($alliedSliderImg as $sliderImg) {
          echo $sliderImg . ' || ';
        }
      } else {
        echo '<br>No Slider imgaes but folder found.';
      }
    } else {
      echo '<br>No Slider imgaes.';
    }
    echo "<br />Album(s): <br />";
    if (!empty($alliedData['THEMES_URLS'])) {
      $arrAlbumSets = explode('|', $alliedData['THEMES_URLS']);
      if (!empty($arrAlbumSets)) {
        foreach ($arrAlbumSets as $alliedAlbum) {
          //Album gallery image filtering
          if (endsWith($alliedAlbum, '@IMAGE')) {
            $albumsetPath = substr($alliedAlbum, 0, strrpos($alliedAlbum, "@"));

            echo $albumsetPath;
            //finding album inner images
            $albumInnerImg = getDirectory($docRoot . '/' . $albumsetPath);
            if (!empty($albumInnerImg)) {
              echo ' [Total:' . count($albumInnerImg) . ']<ul>';
              foreach ($albumInnerImg as $innerImg) {
                if (basename($innerImg) == 'thumb') {
                  echo '<li>couner Image: ' . $innerImg . '/thumb.jpg</li>';
                } else {
                  echo '<li>' . $innerImg . '</li>';
                }
              }
              echo '</ul>';
            }
          } else {
            echo 'No Album & related image found.';
          }
        }//foreach
      }
    } else {
      echo 'No Album set found.';
    }
  }
}
//print_r($arrAlliedServiceData);
//$dir = $docRoot . '/images/alliedservices';
//getDirectory($dir, false);
?>