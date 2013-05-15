<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <?php
    require_once("header.config.php");
    $venueService = new VenueService();
    echo $venueService->getSEOConstant($action, "");
    //echo $page;
    ?>
  </head>
  <body>
    <div id="wrapper">
      <div id="main">
        <?php require_once("header.php"); ?>
        <?php
        require_once ("../constants/Constants.php");
        $constants = new Constants();
        ?>
        <div id="contentArea">
          <div id="leftNavNarrow">
            <!-- Small Left Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH; ?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr">
                    <!-- Box Content Start -->
                    <h4>Popular Choices</h4>
                    <div class="venCatSml">
                      <a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-chhatarpur" title="Wedding Venues in Chhatarpur &amp; MG Road"><img src="<?php echo $constants->DOMAIN_URL; ?>images/icons/inner/chhatarpur.jpg" alt="Wedding farm houses chhatarpur, Banquet halls chhatarpur" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-chhatarpur" title="Chhatarpur &amp; MG Road">Chhatarpur &amp; MG Road</a></span>
                    </div>
                    <div class="venCatSml">
                      <a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-gt-karnal-road" title="Wedding Venues in GT Karnal Road"><img src="<?php echo $constants->DOMAIN_URL; ?>images/icons/inner/gt_karnal.jpg" alt="Wedding farm houses GT Karnal Road, Banquet halls GT Karnal Road" /></a> <span class="pcNamein"><a class="catName" title="GT Karnal Road" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-gt-karnal-road">GT Karnal Road</a></span>
                    </div>
                    <div class="venCatSml">
                      <a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-nh8-pushpanjali" title="Wedding Venues in Pushpanjali &amp; NH-8"><img src="<?php echo $constants->DOMAIN_URL; ?>images/icons/inner/nh8.jpg" alt="Wedding farm houses NH8, Banquet halls NH 8, Banquets on NH 8" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-nh8-pushpanjali" title="NH-8 &amp; Pushpanjali">NH-8 &amp; Pushpanjali</a></span>
                    </div>
                    <div class="venCatSml">
                      <a href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-vaishali-vasundhara" title="Wedding Venues in Vaishali &amp; Vasundhara"><img src="<?php echo $constants->DOMAIN_URL; ?>images/icons/inner/vaishali.jpg" alt="Wedding farm houses Vaishali Vasundhara, Banquet halls Vaishali Vasundhara" /></a> <span class="pcNamein"><a class="catName" title="Vaishali &amp; Vasundhara" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-vaishali-vasundhara">Vaishali &amp; Vasundhara</a></span>
                    </div>
                    <div class="venCatSml"><a title="Wedding Venues in Mundka and Rohtak Road" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-mundka"><img src="<?php echo $constants->DOMAIN_URL; ?>images/icons/inner/mundaka.jpg" alt="Wedding farm houses Mundka and Rohtak Road, Banquet halls Mundka and Rohtak Road" /></a> <span class="pcNamein"><a class="catName" title="Mundka and Rohtak Road" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-mundka">Mundka and Rohtak Road</a></span>
                    </div>
                    <div class="venCatSml"><a title="Wedding Venues in Delhi NCR" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-delhi-ncr"><img src="<?php echo $constants->DOMAIN_URL; ?>images/icons/inner/others.jpg" alt="Wedding farm houses Delhi NCR, Banquet halls Delhi NCR" /></a> <span class="pcNamein"><a class="catName" href="<?php echo $constants->DOMAIN_URL; ?>wedding-venues-in-delhi-ncr" title="Wedding Venues in Delhi NCR">Others</a></span>
                    </div>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Left Box End -->

            <!-- Small Left Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr">
                    <!-- Box Content Start -->
                    <h3>Testimonials</h3>
                    <div class="testi divid-line">
                      <p>"We consider ourselves blessed to have had the privilege of working with someone who translated our vision with such style, grace and professionalism. We sincerely thank you for helping us find such a great wedding destination!"<span>Mitali, Preetha &amp; family<br />
                          New Delhi<br /></span></p>
                    </div>
                    <div class="testi">
                      <p>"Thank you very much for all of your efforts in easing out our wedding venue hunt. Everything at the venue went seamlessly: the ambience felt great and we had many compliments on how beautiful the decor looked against the artfully painted walls! The delicacies were top notch as was the catering staff".<span>Varalika &amp;Nitin<br />
                          New Delhi<br /></span></p>
                    </div>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Left Box End -->

            <!-- Small Left Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
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
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Left Box End -->
          </div>
          <div id="centerPart">
            <!-- Box Start -->
            <div class="box">
              <div class="boxtop2"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxTop2L.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxTop2R.png" align="right" alt="" />
                <div class="boxtopbg"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr2">
                    <!-- Box Content Start -->
                    <?php
                    //echo $action;
                    if (isset($action) && !empty($action)) {
                      switch ($action) {
                        case 'searchVenue':
                          echo '<h1>Search result(s) for: Wedding Venues in ' . ucwords($regionName) . ' region</h1>';
                          break;
                        case 'viewSearchResult':
                          echo '<h1>Search result(s) for: "' . ucwords($searchKeyword) . '"</h1>';
                          break;
                        case 'viewChoices':
                          echo '<h1>Wedding Venues in ' . ucwords($regionName) . ' region</h1>';
                          break;
                        default:
                          echo '<h1>Wedding Venues in ' . ucwords($regionName) . ' region</h1>';
                          break;
                      }
                    } else {
                      echo '<h1>Wedding Venues in ' . ucwords($regionName) . ' region</h1>';
                    }
                    ?>
                    <span class="searchOpt"><?php
                      if ($categoryName != "") {
                        echo "<strong>Category</strong>: ";
                        echo ucwords(str_replace('-', ' ', $categoryName));
                      }
                      ?></span>
                    <span><?php
                      if ($capacityValue != "") {
                        echo "<strong>No. of Guests</strong>: ";
                        echo $capacityValue;
                      }
                      ?></span>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot2"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxBot2L.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxBot2R.png" align="right" alt="" />
                <div class="boxbotbg"></div>
              </div>
            </div>
            <!-- Box End -->
            <?php
            $res = "";
            if (count($venueList) > 0) {
              foreach ($venueList as $venueData) {
                ?>
                <div class="box">
                  <div class="boxtop">
                    <img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" />
                    <img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                    <div class="boxtopbg"></div>
                  </div>
                  <div class="fullboxBg">
                    <div class="boxContent">
                      <div class="boxGr">
                        <div class="searchImg f-left">
                          <?php echo '<a title="' . $venueData->venueName . '" href="' . $constants->DOMAIN_URL . 'venue/' . $venueData->venueId . '"><img src="' . $constants->IMAGE_PATH . 'venue/' . $venueData->id . '/thumbnail.jpg" alt="' . ($venueData->altTag != "" ? $venueData->altTag : $venueData->venueName) . '" /></a>'; ?>
                        </div>
                        <div class="searchDec f-right">
                          <?php
                          $content = stripslashes($venueData->content);
                          echo "<h1><a title='" . $venueData->venueName . "' href='" . $constants->DOMAIN_URL . "venue/" . $venueData->venueId . "'>" . $venueData->venueName . "</a></h1><p>";
                          echo $venueData->venueAddr1 . "<br />";
                          echo $venueData->venueAddr2 . "<br /><br />";
                          echo substr($content, 0, 115) . '... <a href="' . $constants->DOMAIN_URL . 'venue/' . $venueData->venueId . '#imageGallery"><b>more</b></a></p>';
                          ?>
                          <div class="searchResultBtns">
                            <a title="Image Gallery" href="<?php echo $constants->DOMAIN_URL . "venue/" . $venueData->venueId . "#imageGallery"; ?>" class="imgGalleryBtn f-left">Image Gallery</a>
                            <a title="Book Now" href="<?php echo $constants->DOMAIN_URL . "venue/" . $venueData->venueId . "#bookNow"; ?>" class="locationMapBtn f-right">Book Now</a>
                            <a title="Location Map" href="<?php echo $constants->DOMAIN_URL . "venue/" . $venueData->venueId . "#location"; ?>" class="BookNowBtn f-right">Location Map</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" />
                    <img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                    <div class="boxbotbg"></div>
                  </div>
                </div>
                <?php
              }
            } else {
              ?>
              <div class="box">
                <div class="boxtop2"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxTop2L.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxTop2R.png" align="right" alt="" />
                  <div class="boxtopbg"></div>
                </div>
                <div class="fullboxBg">
                  <div class="boxContent">
                    <div class="boxGr2">
                      <!-- Box Content Start -->
                      <p>There is no search result. Please refine your search.</p>

                      <!-- Box Content End -->
                    </div>
                  </div>
                </div>
                <div class="boxbot2"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxBot2L.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxBot2R.png" align="right" alt="" />
                  <div class="boxbotbg"></div>
                </div>
              </div>
              <?php
            }
            ?>
            <?php if ($maxPages > 1) { ?>
              <!-- Box Start -->
              <div class="box">
                <div class="boxtop2"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxTop2L.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxTop2R.png" align="right" alt="" />
                  <div class="boxtopbg"></div>
                </div>
                <div class="fullboxBg">
                  <div class="boxContent">
                    <div class="boxGr2">
                      <!-- Box Content Start -->
                      <?php if (($page - 1) > 0) { ?>
                        <a href="javascript:void(0);" onclick="return redirectToHostPagination('<?php echo $constants->DOMAIN_URL ?>', '<?php echo $page - 1 ?>', '<?php echo $fromPage ?>');" class="prev-Btn f-left">Prev</a>
                      <?php } ?>
                      <?php if (($page + 1) < $maxPages) { ?>
                        <a href="javascript:void(0);" onclick="return redirectToHostPagination('<?php echo $constants->DOMAIN_URL ?>', '<?php echo $page + 1 ?>', '<?php echo $fromPage ?>');" class="next-Btn f-right">Next</a>
                      <?php } ?>
                      <div class="pagi">
                        <?php if (($page - 2) > 0) { ?>
                          <a href="javascript:void(0);" onclick="return redirectToHostPagination('<?php echo $constants->DOMAIN_URL ?>', '<?php echo $page - 2 ?>', '<?php echo $fromPage ?>');" ><?php echo $page - 2 ?></a>
                        <?php } ?>
                        <?php if (($page - 1) > 0) { ?>
                          <a href="javascript:void(0);" onclick="return redirectToHostPagination('<?php echo $constants->DOMAIN_URL ?>', '<?php echo $page - 1 ?>', '<?php echo $fromPage ?>');" ><?php echo $page - 1 ?></a>
                        <?php } ?>
                        <span class="current">[ <?php echo ($page) ?> ]</span>
                        <?php if (($page + 1) <= $maxPages) { ?>
                          <a href="javascript:void(0);" onclick="return redirectToHostPagination('<?php echo $constants->DOMAIN_URL ?>', '<?php echo $page + 1 ?>', '<?php echo $fromPage ?>');" ><?php echo $page + 1 ?></a>
                        <?php } ?>
                        <?php if (($page + 2) <= $maxPages) { ?>
                          <a href="javascript:void(0);" onclick="return redirectToHostPagination('<?php echo $constants->DOMAIN_URL ?>', '<?php echo $page + 2 ?>', '<?php echo $fromPage ?>');" ><?php echo $page + 2 ?></a>
                        <?php } ?>	
                        <?php if (($page + 2) <= $maxPages) { ?>
                          ...
                        <?php } ?>	
                      </div>

                      <!-- Box Content End -->
                    </div>
                  </div>
                </div>
                <div class="boxbot2"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxBot2L.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxBot2R.png" align="right" alt="" />
                  <div class="boxbotbg"></div>
                </div>
              </div>
              <!-- Box End -->
            <?php } ?>

          </div>
          <div id="rightNavNarrow">
            <!-- Small Right Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr">
                    <!-- Box Content Start -->
                    <h4>Run A New Search</h4>
                    <form class="runSearch" name="searchForm" action="#">
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
                      <label>Category:</label>
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
                      <input type="image" src="<?php echo $constants->DOMAIN_URL; ?>images/get-venue-btn.png" class="button" onclick="return redirectToHost('<?php echo $constants->DOMAIN_URL ?>');" />
                      <input type="hidden" name="action" value="searchVenue" />
                    </form>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Right Box End -->
            <!-- Small Right Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr">
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
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Right Box End -->
            <!-- Small Right Box Start -->
            <div class="box">
              <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
                <div class="boxtopbg sml"></div>
              </div>
              <div class="fullboxBg">
                <div class="boxContent">
                  <div class="boxGr">
                    <!-- Box Content Start -->
                    <h4>Why Book Through Us?</h4>
                    <span class="why-A"><b>We are present both online and offline.</b> We are a breakthrough business model with online information coupled with dedicated one-on-one offline support. </span>
                    <span class="why-A"><b>We advise you on budget management.</b> We assist you with our key advice on date &amp;budget management before confirming your wedding venue.</span>
                    <span class="why-A">We provide effectual information which is much more than plain and simple venue listings</span>
                    <span class="why-A"><b>We provide our services for free.</b> You don't pay anything to us for our friendly and responsive services. </span>
                    <span class="why-A"><b>We make sure your queries are handled immediately.</b> Doorstep service with quick turnaround once we receive a call or query from your side. </span>
                    <!-- Box Content End -->
                  </div>
                </div>
              </div>
              <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" />
                <div class="boxbotbg sml"></div>
              </div>
            </div>
            <!-- Small Right Box End -->
          </div>
        </div>  <br class="clear"/>
        <!-- Box Start -->
        <div class="box">
          <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxtopc2.png" align="right" alt="" />
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
          <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->DOMAIN_URL; ?>images/flower.png" class="flower" alt="" />
            <div class="boxbotbg"></div>
          </div>
        </div>
        <!-- Box End -->
        <?php require("../view/footer.php") ?>
      </div>
    </div>    
  </body>
</html>