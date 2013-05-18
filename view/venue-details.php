<?php
require_once ("../database/GetYourVenueMySQLManager.php");
require_once ("../service/VenueService.php");
require_once ("../constants/Constants.php");
$constants = new Constants();

$docRoot = realpath(dirname(dirname(__FILE__) . '../'));

$venueid = $_GET['venueid'];
$databaseManager = new GetYourVenueMySQLManager();
$venueList = $databaseManager->getVenue($venueid);

if ($venueList[0]->isActive < 1) {
  header("Location:" . $constants->DOMAIN_URL);
  die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <link rel="stylesheet" href="<?php echo $constants->DOMAIN_URL; ?>css/calendar.css" />
    <script type="text/javascript" language="javascript" src="<?php echo $constants->DOMAIN_URL; ?>js/calendar_us.js"></script>
    <?php
    require_once("../view/header.config.php");
    $venueService = new VenueService();
    echo $venueService->getSEOConstant("venueDetails", $venueList[0]);
    ?>
    <script type="text/javascript" src="<?php echo $constants->DOMAIN_URL; ?>js/jquery.nivo.slider.pack.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <div id="main">
        <?php require_once("../view/header.php"); ?>
        <div id="contentArea">
          <div id="leftNavNarrow">
            <!-- Small Left Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr">
                    <!-- Box Content Start -->
                    <h4>Popular Choices</h4>
                    <div class="venCatSml"><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-chhatarpur"><img src="<?php echo $constants->IMAGE_PATH; ?>icons/inner/chhatarpur.jpg" alt="Wedding farm houses chhatarpur, Banquet halls chhatarpur" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-chhatarpur">Chhatarpur &amp; MG Road</a></span>
                    </div>
                    <div class="venCatSml"><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-gt-karnal-road"><img src="<?php echo $constants->IMAGE_PATH; ?>icons/inner/gt_karnal.jpg" alt="Wedding farm houses GT Karnal Road, Banquet halls GT Karnal Road" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-gt-karnal-road">GT Karnal Road</a></span>
                    </div>
                    <div class="venCatSml"><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-nh8-pushpanjali"><img src="<?php echo $constants->IMAGE_PATH; ?>icons/inner/nh8.jpg" alt="Wedding farm houses NH8, Banquet halls NH 8, Banquets on NH 8" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-nh8-pushpanjali">NH-8 &amp; Pushpanjali</a></span>
                    </div>
                    <div class="venCatSml"><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-vaishali-vasundhara"><img src="<?php echo $constants->IMAGE_PATH; ?>icons/inner/vaishali.jpg" alt="Wedding farm houses Vaishali Vasundhara, Banquet halls Vaishali Vasundhara" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-vaishali-vasundhara">Vaishali &amp; Vasundhara</a></span>
                    </div>
                    <div class="venCatSml"><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-mundka"><img src="<?php echo $constants->IMAGE_PATH; ?>icons/inner/mundaka.jpg" alt="Wedding farm houses Mundka and Rohtak Road, Banquet halls Mundka and Rohtak Road" /></a> <span class="pcNamein"><a class="catName"  href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-mundka">Mundka and Rohtak Road</a></span>
                    </div>
                    <div class="venCatSml"><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-delhi-ncr"><img src="<?php echo $constants->IMAGE_PATH; ?>icons/inner/others.jpg" alt="Wedding farm houses Delhi-NCR, Banquet halls Delhi-NCR" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-delhi-ncr" title="Wedding Venues in Delhi NCR">Others</a></span>
                    </div>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>flower.png" class="flower" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Left Box End -->
            <!-- Small Left Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr" align="center">
                    <!-- Box Content Start -->
                    <script type="text/javascript"><!--
                      google_ad_client = "ca-pub-4918915311035756";
                      /* Side Panels */
                      google_ad_slot = "6847862507";
                      google_ad_width = 120;
                      google_ad_height = 600;
                      //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Left Box End -->
          </div>
          <div id="rightNavWide">
            <!-- Box Start -->
            <a name="location"></a>
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr relative">
                    <!-- Box Content Start -->
                    <h1><?php echo $venueList[0]->venueName; ?></h1>
                    <br />
                    <div class="venue-desc f-left">
                      <img title="<?php echo $venueList[0]->venueName; ?>" src="<?php echo $constants->IMAGE_PATH . 'venue/' . $venueList[0]->id . '/thumbnail.jpg'; ?>" alt="<?php echo $venueList[0]->venueName; ?>" />
                      <div class="addressLine">
                        <?php echo $venueList[0]->venueAddr1; ?><br />
                        <?php echo $venueList[0]->venueAddr2; ?>
                      </div>
                    </div>

                    <div class="google-map f-right">
                      <iframe width='560' height='300' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='<?php echo $venueList[0]->iframe ?>'>
                      </iframe>
                    </div>
                  </div>
                </div>

              </div><div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg"></div>
              </div>
              <!-- Box End -->
              <!-- Box Start -->
              <div class="box">
                <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                  <div class="boxtopbg"></div>
                </div>
                <div class="fullboxBg">
                  <div class="boxContent">
                    <div class="boxGr">
                      <!-- Box Content Start -->
                      <a name="imageGallery"></a>
                      <h3><?php echo $venueList[0]->venueName; ?>' Latest Gallery</h3>
                      <?php
                      $galleryImg = array();
                      $venueDir = $docRoot . '/images/venue/' . $venueList[0]->id . '/';
                      if (is_dir($venueDir)) {
                        //echo $alliedSerivce[0]->jcarouselPath;
                        $handler = opendir($venueDir);
                        // open directory and walk through the filenames
                        while ($file = readdir($handler)) {
                          // if file isn't this directory or its parent, add it to the results
                          if ($file != "." && $file != ".." && $file != "thumbnail.jpg") {
                            $galleryImg[] = $constants->IMAGE_PATH . 'venue/' . $venueList[0]->id . '/' . $file;
                          }
                        }
                        // tidy up: close the handler
                        closedir($handler);
                      }
                      if (!empty($galleryImg)) {
                        ?>
                        <div class="image-slider f-left">
                          <div class="slider-wrapper theme-default">
                            <div class="ribbon"></div>
                            <div id="slider" class="nivoSlider">
                              <?php foreach ($galleryImg as $key => $galleryFile) { ?>
                                <img src="<?php echo $galleryFile; ?>" alt="<?php echo $venueList[0]->altTag . '-' . ($key + 1); ?>" />
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      <div class="latest-news">
                        <p><?php echo $venueList[0]->content; ?></p>
                      </div>
                      <h4>Explore Our Quality Allied Services</h4>
                      <div class="allied_content">
                        <ul>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-planners-delhi" title="Wedding Planning">Wedding Planning</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-decorators-in-delhi" title="Decor">Decor</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-caterers-in-delhi" title="Catering Services">Catering Services</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-photography-delhi" title="Wedding Photography">Wedding Photography</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>transportation-for-wedding-in-delhi" title="Lodging &amp; Transportation">Lodging &amp; Transportation</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>band-ghori-baggi-services-in-delhi" title="Band, Ghoriwaala, Baggi">Band, Ghoriwaala, Baggi</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>fireworks-delhi" title="Fireworks">Fireworks</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>groom-wedding-attires-in-delhi" title="Grooms Wear">Grooms Wear</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-lehengas-in-delhi" title="Bridal Lehengas">Bridal Lehengas</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>live-music-band-mystique-delhi" title="Mystique Music Band">Mystique Music Band</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>dj-and-sound-systems-delhi" title="DJ and Sound Systems">DJ and Sound Systems</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>varmala-themes-delhi" title="Varmala Themes">Varmala Themes</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>bridal-mehndi-delhi" title="Bridal Mehndi">Bridal Mehndi</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>bridal-makeup-delhi" title="Bridal Makeup">Bridal Makeup</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>celebrity-artist-management-delhi" title="Celebrity &amp; Artist Management">Celebrity &amp; Artist Management</a></li>
                          <li><a href="<?php echo $constants->DOMAIN_URL; ?>wedding-invitation-cards-delhi" title="Wedding Invitation Cards">Wedding Invitation Cards</a></li>
                        </ul>
                      </div>

                      <!-- Box Content End -->
                    </div>
                  </div>
                </div>
                <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" />
                  <div class="boxbotbg"></div>
                </div>
              </div>
              <!-- Box End -->
              <!-- Box Start -->
              <div class="box">
                <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /> <img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
                  <div class="boxtopbg"></div>
                </div>
                <div class="fullboxBg">
                  <div class="boxContent">
                    <div class="boxGr">
                      <!-- Box Content Start -->
                      <a name="bookNow"></a>
                      <h3>Get This Venue Now</h3>
                      <div id='errorMessages'></div>
                      <form class="getVenue" name="bookVenueForm" method="POST">
                        <!-- action="booking-confirmation"-->
                        <div class="getvenue_cont">
                          <label>Name:</label>
                          <input type="text" name="name" class="txt-name" value="Enter Your Name" onblur="if (this.value == '') {
                          this.value = 'Enter Your Name'
                        }" onfocus="if (this.value == 'Enter Your Name') {
                          this.value = ''
                        }"  />
                        </div>
                        <div class="getvenue_cont">
                          <label>Email:<font color="red">*</font></label>
                          <input type="text" name="email" class="txt-name" value="Enter your Email Id" onblur="if (this.value == '') {
                          this.value = 'Enter your Email Id'
                        }" onfocus="if (this.value == 'Enter your Email Id') {
                          this.value = ''
                        }"  />
                        </div>
                        <div class="getvenue_cont last">
                          <label>Contact Number:<font color="red">*</font></label>
                          <input type="text" name="contactNumber" class="txt-name" value="Enter your Contact Number" onblur="if (this.value == '') {
                          this.value = 'Enter your Contact Number'
                        }" onfocus="if (this.value == 'Enter your Contact Number') {
                          this.value = ''
                        }"  />
                        </div>
                        <!--<div class="getvenue_cont">
                         <label>Preferred Date:</label>
                          <input type="text" name="date" class="txt-name" value="Select your Date" onblur="if(this.value==''){this.value='Select your Date'}" onfocus="if(this.value=='Select your Date'){this.value=''}"  />
                          <a href="#"><img src="<?php echo $constants->IMAGE_PATH; ?>cal-icon.png" alt="" class="calicon" /></a> </div>
                        -->
                        <div class="getvenue_cont">
                          <label>Preferred Date:</label>
                          <input type="text" class="txt-name" name="date" id="date" value="" />
                          <script language="JavaScript">
                      new tcal({
                        // form name
                        'formname': 'bookVenueForm',
                        // input name
                        'controlname': 'date'
                      });
                          </script>
                        </div>
                        <div class="getvenue_cont">
                          <label>Your Function:</label>
                          <input type="text" name="function" class="txt-name" value="Enter your Function" onblur="if (this.value == '') {
                          this.value = 'Enter your Function'
                        }" onfocus="if (this.value == 'Enter your Function') {
                          this.value = ''
                        }"  />
                        </div>
                        <div class="getvenue_cont last">
                          <label>Your Budget in INR:</label>
                          <input type="text" name="budget" class="txt-name" value="Enter your Budget" onblur="if (this.value == '') {
                          this.value = 'Enter your Budget'
                        }" onfocus="if (this.value == 'Enter your Budget') {
                          this.value = ''
                        }"  />
                        </div>

                        <div class="clear"></div>
                        <br />
                        <div class="getvenue_cont last">
                          <input type="image" src="<?php echo $constants->IMAGE_PATH; ?>go-btn.png" onClick="return submitVenueBookingForm();" />
                        </div>
                        <input type="hidden" name="actionType" value="bookVenue"  />
                        <input type="hidden" name="venueId" value="<?php echo $venueList[0]->venueId ?>" />
                      </form>
                      <!-- Box Content End -->
                    </div>
                  </div>
                </div>
                <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /> <img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" />
                  <div class="boxbotbg"></div>
                </div>
              </div>
              <!-- Box End -->
            </div>
          </div><br class="clear"/>
          <!-- Box Start -->
          <div class="box">
            <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc2.png" align="right" alt="" />
              <div class="boxtopbg"></div>
            </div>
            <div class="fullboxBg">
              <div class="boxContent">
                <div class="boxGr">
                  <!-- Box Content Start -->
                  <div class="google-adds">
                    <script type="text/javascript"><!--
                      google_ad_client = "ca-pub-4918915311035756";
                      /* My Ad */
                      google_ad_slot = "1466171534";
                      google_ad_width = 728;
                      google_ad_height = 90;
                      //-->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
                  </div>
                  <!-- Box Content End -->
                </div>
              </div>
            </div>
            <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->IMAGE_PATH; ?>flower.png" class="flower" alt="" />
              <div class="boxbotbg"></div>
            </div>
          </div>
          <!-- Box End -->
          <script type="text/javascript">
            $(window).load(function() {
              $('#slider').nivoSlider({
                effect: 'random',
                slices: 17,
                animSpeed: 500,
                pauseTime: 6000,
                startSlide: 0, //Set starting Slide (0 index)
                directionNav: true, //Next and Prev
                directionNavHide: false, //Only show on hover
                controlNav: true, //1,2,3...
                controlNavThumbs: false, //Use thumbnails for Control Nav
                controlNavThumbsFromRel: false, //Use image rel for thumbs
                controlNavThumbsSearch: '.jpg', //Replace this with...
                controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
                keyboardNav: true, //Use left and right arrows
                pauseOnHover: true, //Stop animation while hovering
                manualAdvance: false, //Force manual transitions
                captionOpacity: 0
              });
            });
          </script>
          <?php require_once("../view/footer.php"); ?>
        </div>
      </div>
    </div>
  </body>
</html>