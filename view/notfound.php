<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <?php require_once("header.config.php");
require_once ("../constants/Constants.php");
$constants = new Constants();?>
    <title>Not Found - Get Your Venue: Contact Us for Wedding Venues in Delhi NCR , Banquet Halls in Delhi NCR</title>
    <meta name="description" content="GetYourVenue.com are experts in wedding and marriage venue bookings in delhi ncr. We work dedicatedly with the aim of providing the choicest wedding venues and banquet halls guaranteed to meet your requirements in the best possible manner." />
    <meta name="keyword" content="Get Your Venue, Get Your Venue in Delhi &amp; NCR, Wedding Venues In Delhi, Banquet halls in Delhi, Party Venues in Delhi, Banquet halls in Delhi for Marriage, Wedding Places in Delhi" />    
  </head>
  <body>
    <div id="wrapper">
      <div id="main">
        <?php require_once("header.php"); ?>
        <div id="contentArea">
          <div id="leftNav">
            <!-- Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr boxheight">
                    <!-- Box Content Start -->
                    <div class="site_content">
                      <h1>Ohhhh, Page not found</h1>
                      <p>Sorry, we are unable to serve the page or url which you are looking for...</p>
                      <h4>You Can try:-</h4>
                      <ul>
                        <li>Click on the BACK button of your browser and go somewhere else?</li>
                        <li>Try to back up one directory in the URL (ie, web address) and try again?</li>
                        <li>Write to the us at <a href="mailto:info@getyourvenue.com">info@getyourvenue.com</a></li>
                      </ul>
                    </div>
                    <!-- Box Content End -->
                    <div id='blankBlock'><br /></div>
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/flower.png" class="flower" alt="" />
                <div class="boxbotbg"></div>
              </div>
            </div>
            <!-- Box End -->
          </div>

          <div id="rightNav">
            <!-- Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml2"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr boxheight">
                    <!-- Box Content Start -->
                    <h3>Contact Us</h3>
                    <?php require_once("../view/contactusForm.php"); ?>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/flower.png" class="flower" alt="" />
                <div class="boxbotbg sml2"></div>
              </div>
            </div>
            <!-- Box End -->
          </div>

        </div>
        <?php require("../view/footer.php"); ?>
      </div>
    </div>
  </body>
</html>
