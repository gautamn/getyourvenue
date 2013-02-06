<?php
require_once ("../constants/Constants.php");
$constants = new Constants();

$location 	= '../';//$constants->DOMAIN_URL;
$album_name	= trim(urldecode($_GET['album_name']));
$files 		= glob($location . $album_name . '*.{jpg}', GLOB_BRACE);
$imgFiles = array();
if(!empty($files)){
  foreach($files as $file) {
    $imgFiles[] = str_replace('../images/', $constants->DOMAIN_URL.'images/',$file);
  }
}
echo json_encode($imgFiles);
?>