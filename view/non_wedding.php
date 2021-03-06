<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <?php
    require_once("header.config.php");
    require_once ("../constants/Constants.php");
    $constants = new Constants();
    ?>
    <title>Non Wedding Venues, Birthday Party Venues, Engagement Ceremonies, Anniversaries, Corporate Parties | Getyourvenue.com</title>
    <meta name="description" content="Getyourvenue.com is committed to assist you in finding wedding and non wedding venues in Delhi and NCR region. Besides wedding venues, we also help you to find suitable venues for birthday parties, engagement ceremonies, anniversaries, corporate parties and other non wedding functions. Our large network of partners and service providers has enabled us to offer venue selection services for other domain as well." />
    <meta name="keyword" content="Non Wedding Venues, Birthday Parties, Engagement Ceremonies, Anniversaries, Corporate Parties, Wedding  Venues in Delhi &amp; NCR" />
    <script type="text/javascript">
      function redirectToHost() {
        var region = document.getElementById("region").value;
        var category = document.getElementById("category").value;
        var capacity = document.getElementById("capacity").value;
        location.href = "http://getyourvenue.com" + "/venues" + "/" + region + "/" + category + "/" + capacity;
        return false;
      }
    </script>
  </head>
  <body>
    <div id="wrapper">
      <div id="main">
        <?php require_once("header.php"); ?>
        <div id="contentArea">
          <div id="leftNav">
            <!-- Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr nonWedBox">
                    <!-- Box Content Start {please replace the class nonWedBox with boxheight } -->
                    <h1>Non Wedding Venues</h1>
                    <p>Getyourvenue.com is committed to assist you in finding wedding venues in Delhi and NCR region. Besides wedding venues, we also help you to find suitable venues for birthday parties, engagement ceremonies, anniversaries, corporate parties and other non wedding functions. Our large network of partners and service providers has enabled us to offer venue selection services for other domains as well.</p>
                    <br />
                    <b>Let us plan the whole thing just as you want it!</b>
                    <p>We can help you find farmhouses that carry a unique blend of the luxury of a five star hotel and serenity and calmness of a spacious lawn. Farmhouses are excellent for corporate parties and wedding ceremonies. We can immediately help you to locate farm houses in South Delhi, farm houses in Chhatarpur and farm houses in GT Karnal Road with ample parking and outdoor space.</p>
                    <br />
                    <b>GetYourVenue is the answer to all your venue selection dilemmas!</b>
                    <p>Whether you are planning to host a long anticipated corporate party or an inimitable birthday party in the near future, you can take advantage of our panel of professionals. Our experts have studied pros and cons of various Party lawns in South Delhi, Banquet Halls in North Delhi and Marriage halls in Central Delhi. Some businessmen are looking for exceptionally urban settings for a corporate party and few others long for something rustic to impress their foreign counterparts. The GetYourVenue team spends sufficient time trying to analyze your innermost desires pertaining to a party, celebration or event.</p>
                    <br />
                    <b>Birthday party, corporate event or anniversary Just as you want it!</b>
                    <p>You don't have to compromise on the kind of facilities you want, total number of invitees and scope of an event anymore. You don't have to burn holes in your pockets to add grandeur to a function. Additional budget helps but we believe most people end up getting inferior service just because they don't search enough. 
                      There are various occasions in life when we really want to throw a ball and make it grand. But most of the times, we are either not able to plan out well, or find suitable venues in Delhi. We understand the needs of a non wedding function, be it a birthday, anniversary, retirement party, baby shower or birth party, corporate event, a reunion, fresher or farewell party; we aim to serve you the best and you will agree with us the moment you receive a response from our experts. Make a phone call and start talking right away to one of our professionals or Let Us Know Your Preferences &amp; allow us to help you find the perfect venue!</p>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>flower.png" class="flower" alt="" />
                <div class="boxbotbg"></div>
              </div>
            </div>
            <!-- Box End -->
          </div>
          <div id="rightNav">
            <!-- Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml2"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr nonWedBox">
                    <!-- Box Content Start -->
                    <!-- Box Content Start -->
                    <h3>Let Us Know Your Preferences</h3>
                    <form name="searchForm" class="homeSearch" >
                      <label>Region:</label>
                      <select name="region" id="region">
                        <option value="delhi-ncr">Select All</option>
                        <option value="north-delhi">North Delhi</option>
                        <option value="south-delhi">South Delhi</option>
                        <option value="east-delhi">East Delhi</option>
                        <option value="west-delhi">West Delhi</option>
                        <option value="central-delhi">Central Delhi</option>
                        <option value="ghaziabad">Ghaziabad</option>
                        <option value="noida">Noida</option>
                        <option value="gurgaon">Gurgaon</option>
                        <!--<option value="destination-wedding">Destination Wedding</option>-->
                      </select>
                      <label>Category of Venue:</label>
                      <select name="category" id="category">
                        <option value="wedding-venues">Select All</option>
                        <option value="farm-house">Farm House</option>
                        <option value="banquet-hall">Banquet Hall</option>
                        <option value="hotel">Hotels</option>
                        <option value="5-star-banquets">5 Star Banquets</option>
                        <option value="wedding-tent-houses">Wedding Tent Houses</option>
                      </select>
                      <label>No. of Guests:</label>
                      <select name="capacity" id="capacity">
                        <option value="0">Any Number</option>
                        <option value="1">Under 300</option>
                        <option value="2">300-800</option>
                        <option value="3">Above 800</option>
                      </select>
                      <br />
                      <input type="image" src="<?php echo $constants->IMAGE_PATH; ?>btn-getmyvenue.png" class="button" onclick="return redirectToHost('<?php echo $constants->DOMAIN_URL ?>');"/>
                      <input type="hidden" name="action" value="searchVenue" />
                    </form>

                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>flower.png" class="flower" alt="" />
                <div class="boxbotbg sml2"></div>
              </div>
            </div>
            <!-- Box End -->

            <!-- Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml2"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr nonWedBox" align="center">
                    <!-- Box Content Start -->
                    <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-4918915311035756";
                      /* GYV 250x250 */
                      google_ad_slot = "9064611558";
                      google_ad_width = 250;
                      google_ad_height = 250;
                      //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>flower.png" class="flower" alt="" />
                <div class="boxbotbg sml2"></div>
              </div>
            </div>
            <!-- Box End -->
          </div>
        </div>
        <?php require("../view/footer.php") ?>
      </div>
    </div>
  </body>
</html>