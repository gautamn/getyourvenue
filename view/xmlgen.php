<?php
/* @name: xmlgen
 * @auther: Manish Sahu
 * @created On: Apr 28, 2013, 5:18:40 PM
 */

require_once ("../util/xml2array.php");
$directory = 'http://blog.getyourvenue.com/feed/';

$content = file_get_contents($directory);
$arr = xml2array($content);
//echo '<pre>';
//print_r($arr['rss']['channel']['item']);die;
if(!empty($arr)){
  foreach($arr['rss']['channel']['item'] as $xmldata){
    //print_r($xmldata);
    echo "<br>================";
    echo "<br>Title: ".$xmldata['title'];
    echo "<br>Date: ".date('Y-m-d H:i:s', strtotime($xmldata['pubDate']));
    echo "<br>Link: ".$xmldata['link'];
  }
}
?>