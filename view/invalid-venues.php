<?php
/* @name: sitemap
 * @auther: Manish Sahu
 * @created On: Apr 24, 2013, 10:59:36 PM
 */
date_default_timezone_set('Asia/Kolkata');
$docRoot = realpath(dirname(dirname(__FILE__) . '../'));
$r1 = '#f1f1f1';
$r2 = '#fff';
require_once ("../constants/Constants.php");
$constants = new Constants();
?>
<html>
  <head><META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <style type="text/css">
      body, table{font:12px Tahoma,Geneva,sans-serif;}
      .bg1 td{background-color: #f1f1f1;}
      .bg2 td{background-color: #fff;}
      .red{color:#cc0000;}
      .green{color:#090;}
      table{width:100%;}
      table td{border: 1px solid #ccc; padding: 3px 5px;}
      td span{padding-left: 10px;}
    </style>
  </head>
  <body>
    <?php
    require_once ("../util/DBUtils.php");
    require_once ("../constants/DBConstants.php");
    require_once ("../exception/DBSourceException.php");

    $dbConstants = new DBConstants();
    $dBUtils = new DBUtils();
    $connection = $dBUtils->getDBConnection();
    echo "<table border='0' cellspacing='1'>";
    echo "<tr><td colspan='3'><h3>content issues in Allied Service<h3></td></tr>";

//allied service list
    $count = 0;
    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $query = "SELECT BANNER_PATH, SEO_ID, HEADING, JCAROUSEL_IMAGES_FOLDER_PATH, THEMES_URLS FROM allied_services ORDER BY DISPLAY_ORDER ASC";
      $result = mysql_query($query);
      if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
          $count++;
          echo "<tr class='" . (($count % 2 == 1) ? 'bg1' : 'bg2') . "'>";
          echo "<td>" . $row['HEADING'] . "</td>";
          echo "<td><a target='_blank' href='" . $constants->DOMAIN_URL . $row['SEO_ID'] . "'>" . $constants->DOMAIN_URL . $row['SEO_ID'] . "</a></td>";
          echo "<td>";
          if (empty($row['THEMES_URLS'])) {
            echo " <span class='red'>Album</span>";
          } else {
            echo " <span class='green'>Album</span>";
          }
          if (!file_exists($docRoot . $row['JCAROUSEL_IMAGES_FOLDER_PATH'] . 'gal_1.jpg')) {
            echo " <span class='red'>Image Gallery</span>";
          } else {
            echo " <span class='green'>Image Gallery</span>";
          }
          if (!file_exists($docRoot . '/' . $row['BANNER_PATH'])) {
            echo " <span class='red'>Banner</span>";
          } else {
            echo " <span class='green'>Banner</span>";
          }
          echo " </td>";
          echo "</tr>";
        }
      }
    }
    echo '</table><p>&nbsp;</p>';
    echo "<table border='0' cellspacing='1'>";
    echo "<tr><td colspan='3'><h3>content issues in venues<h3></td></tr>";
//venue list
    if (!(mysql_select_db($dbConstants->DATABASE, $connection))) {
      throw new DBSourceException("Unable to connect to a datasource.");
    } else {
      $query = "SELECT venueid, id, name FROM venue WHERE is_active=1";
      $result = mysql_query($query);
      if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {

          $thumbex = file_exists($docRoot . '/images/venue/' . $row['id'] . '/thumbnail.jpg');
          $galex = file_exists($docRoot . '/images/venue/' . $row['id'] . '/gal_1.jpg');
          $count++;
          if (!$galex || !$thumbex) {
            echo "<tr class='" . (($count % 2 == 1) ? 'bg1' : 'bg2') . "'>";
            echo "<td>" . stripslashes($row['name']) . "</td>";
            echo "<td><a target='_blank' href='" . $constants->DOMAIN_URL . 'venue/' . $row['venueid'] . "'>" . $constants->DOMAIN_URL . 'venue/' . $row['venueid'] . "</a></td>";
            echo "<td>";
            echo "Folder: " . $row['id'];
            if (!$thumbex) {
              echo " <span class='red'>Thumbnail</span>";
            } else {
              echo " <span class='green'>Thumbnail</span>";
            }

            if (!$galex) {
              echo " <span class='red'>Gallery</span>";
            } else {
              echo " <span class='green'>Gallery</span>";
            }
            echo "</td>";
            echo "</tr>";
          }
        }
      }
    }
    echo "</table>";
    mysql_close($connection);
    ?>
  </body>
</html>