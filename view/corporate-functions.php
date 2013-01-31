<?php  require_once ("../constants/Constants.php");
$constants = new Constants();
if(empty($rowCorporateFunctions))
  //header("Location:".$constant->DOMAIN_URL);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<?php require_once("header.config.php");?>
<link rel="stylesheet" href="<?php echo $constants->DOMAIN_URL;?>css/calendar.css" />
<script language="javascript" type="text/javascript" src="<?php echo $constants->DOMAIN_URL;?>js/calendar_us.js"></script>
<title><?php echo $rowCorporateFunctions[0]->title;?></title>
<meta name="description" content="<?php echo $rowCorporateFunctions[0]->metaDescription;?>" />
<meta name="keyword" content= "<?php echo $rowCorporateFunctions[0]->metaKeyword;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $constants->DOMAIN_URL;?>css/albums.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $constants->DOMAIN_URL;?>css/styleSlider.css" />
</head>
<body>
<div id="wrapper">
  <div id="main">
    <?php  require_once("header.php"); ?>
    <div id="contentArea">
      <div id="leftNavNarrow">
        <!-- Small Left Box Start -->
        <div class="box">
          <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc2.png" align="right" alt="" />
            <div class="boxtopbg sml"></div>
          </div>
          <div class="fullboxBg">
            <div class="boxContent">
              <div class="boxGr">
                <!-- Box Content Start -->
                <h4>Corporate Functions</h4>
                <ul class="alliedServices">
                  <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/ring-ceremony';?>" title="Ring Ceremony">Ring Ceremony</a></li>
                  <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/wedding-reception';?>" title="Wedding Reception">Wedding Reception</a></li>
                  <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/birthday';?>" title="Birthday">Birthday</a></li>
                  <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/anniversary';?>" title="Anniversary">Anniversary</a></li>
                  <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/mehendi-ki-raat';?>" title="Mehendi Ki Raat">Mehendi Ki Raat</a></li>
                  <li class="last"><a href="<?php echo $constants->DOMAIN_URL.'social-functions/bachelor-party';?>" title="Bachelor Party">Bachelor Party</a></li>
                </ul>
                <!-- Box Content End -->
              </div>
            </div>
          </div>
          <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/flower.png" class="flower" alt="" />
            <div class="boxbotbg sml"></div>
          </div>
        </div>
        <!-- Small Left Box End -->
        <!-- Small Left Box Start -->
        <div class="box">
          <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc2.png" align="right" alt="" />
            <div class="boxtopbg sml"></div>
          </div>
          <div class="fullboxBg">
            <div class="boxContent">
              <div class="boxGr" align="center">
                <!-- Box Content Start -->
                <script type="text/javascript">
                    <!--
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
          <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc4.png" align="right" alt="" />
            <div class="boxbotbg sml"></div>
          </div>
        </div>
        <!-- Small Left Box End -->
      </div>
      <div id="rightNavWide">
        <!-- Box Start -->
        <div class="box">
          <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc2.png" align="right" alt="" />
            <div class="boxtopbg"></div>
          </div>
          <div class="fullboxBg">
            <div class="boxContent">
              <div class="boxGr">
                <!-- Box Content Start -->
                <img src="<?php echo $rowCorporateFunctions[0] ->bannerPath ?>" alt="" class="bannerImg" /><br class="f-left" />
                <br />
                <h3><?php echo $rowCorporateFunctions[0] ->heading ?></h3>
                <div class="allied_content"><?php echo $rowCorporateFunctions[0] ->html_content;?></div>
                <?php
                    $results = array();
                    // create a handler for the directory
                    $handler = opendir("..".$rowCorporateFunctions[0] ->jcarouselPath);
                    // open directory and walk through the filenames
                    while ($file = readdir($handler)) {
                            // if file isn't this directory or its parent, add it to the results
                            if ($file != "." && $file != "..") {
                            $results[] = $file;
                            }
                    }
                    // tidy up: close the handler
                    closedir($handler);

                      $res = "";
                      if(!empty($results)) { ?>
                          <div id="wowslider-container1">
                            <div class="ws_images">
                              <ul>
                        <?php
                            $totalSlides = count($results);
                            foreach($results as $key=> $slides) {
                        ?>
                                <li><img height="500px" src="<?php echo '..'.$rowCorporateFunctions[0]->jcarouselPath.$slides;?>" alt="<?php echo $rowCorporateFunctions[0] ->heading;?>" title="<?php echo $rowCorporateFunctions[0] ->heading;?>" id="wows1_<?php echo $key;?>" /><?php echo 'Theme '.($key+1);?></li>
                        <?php }?>
                              </ul>
                            </div>
                            <!--large images ends-->                            
                            <!-- thumbnails starts-->
                            <div class="ws_thumbs">
                              <div>
                                <?php foreach($results as $key=> $slides) {?>
                                <a title="<?php echo $rowCorporateFunctions[0]->heading.' slide '.($key+1);?>" href="javascript:void(0);"><img width="115" src="<?php echo '..'.$rowCorporateFunctions[0]->jcarouselPath.$slides;?>" alt="" /><?php echo 'Theme '.($key+1);?></a>
                                <?php }?>
                              </div>
                            </div>
                            <!-- thumbnails ends-->
                          <div class="ws_shadow"></div>
                        </div>
                          <script type="text/javascript" src="../js/wowslider.js"></script>
                          <script type="text/javascript" src="../js/allied-services-slider.js"></script>
                        <?php
                        }?>
                      <!--</div>
                    </div>
                  </div>
                </div>    -->
                        
                <?php
                        /*$themes = array ();*/
                        $themes = explode("|",$rowCorporateFunctions[0] ->themesUrl);
                        function endsWith($haystack, $needle) {
                            $length = strlen($needle);
                            if ($length == 0) {
                                return true;
                            }
                            return (substr($haystack, -$length) === $needle);
                        }
                ?>
          
                <?php if(count($themes)>1){?>        
                <h3 class="clear">Few of the Popular themes are:</h3>
                <?php } ?>
                <?php
                        for($i=0 ; $i<count($themes); $i++) {
                                if(endsWith($themes[$i],'@VIDEO')) {
                                        $pos = strrpos($themes[$i], "@");
                                        $url = substr($themes[$i],0,$pos);
                 ?>
                  <iframe width="241" height="180" src="<?php echo $url;?>" frameborder="0" allowfullscreen=""></iframe>
                  <?php }?>
                  <?php 
                        if(endsWith($themes[$i],'@IMAGE')) {
                                $pos = strrpos($themes[$i], "@");
                                $url = substr($themes[$i],0,$pos);
                        // if closed
                  ?>
                  <div class="alliedThumb"><img src="../<?php echo $url ?>" alt="" width="239" height="180"/><!--span class="themeTitle">Theme One Title Here</span--></div>
                  <?php } 
                  } ?>
                
                <!--h3 class="clear">Few of the Popular themes are:</h3>
                <div class="alliedThumb"><img src="<?php echo $constants->DOMAIN_URL;?>images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb">
                  <iframe width="241" height="180" src="http://www.youtube.com/embed/rnkndQslmaw" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="alliedThumb"><img src="<?php echo $constants->DOMAIN_URL;?>images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb"><img src="<?php echo $constants->DOMAIN_URL;?>images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb"><img src="<?php echo $constants->DOMAIN_URL;?>images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb">
                  <iframe width="241" height="180" src="http://www.youtube.com/embed/rnkndQslmaw" frameborder="0" allowfullscreen></iframe>
                </div-->
                <!-- Box Content End -->
              </div>
            </div>
          </div>
          <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc4.png" align="right" alt="" />
            <div class="boxbotbg"></div>
          </div>
        </div>
        <!-- Box End -->
        <!-- Box Start -->
        <div class="box">
          <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc1.png" align="left" alt="" /> <img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc2.png" align="right" alt="" />
            <div class="boxtopbg"></div>
          </div>
          <div class="fullboxBg">
            <div class="boxContent">
              <div class="boxGr">
                <!-- Box Content Start -->
                <a name="bookNow"></a>
                <h3>Get This Service Now</h3>
                <div id='errorMessages'></div>
                <form class="getVenue" name="bookVenueForm" method="POST">
                  <!-- action="booking-confirmation"-->
                  <div class="getvenue_cont">
                    <label>Name:</label>
                    <input type="text" name="name" class="txt-name" value="Enter Your Name" onblur="if(this.value==''){this.value='Enter Your Name'}" onfocus="if(this.value=='Enter Your Name'){this.value=''}"  />
                  </div>
                  <div class="getvenue_cont">
                    <label>Email:<font color="red">*</font></label>
                    <input type="text" name="email" class="txt-name" value="Enter your Email Id" onblur="if(this.value==''){this.value='Enter your Email Id'}" onfocus="if(this.value=='Enter your Email Id'){this.value=''}"  />
                  </div>
                  <div class="getvenue_cont last">
                    <label>Contact Number:<font color="red">*</font></label>
                    <input type="text" name="contactNumber" class="txt-name" value="Enter your Contact Number" onblur="if(this.value==''){this.value='Enter your Contact Number'}" onfocus="if(this.value=='Enter your Contact Number'){this.value=''}"  />
                  </div>
                  <!--<div class="getvenue_cont">
                   <label>Preferred Date:</label>
                    <input type="text" name="date" class="txt-name" value="Select your Date" onblur="if(this.value==''){this.value='Select your Date'}" onfocus="if(this.value=='Select your Date'){this.value=''}"  />
                    <a href="#"><img src="<?php echo $constants->DOMAIN_URL;?>images/cal-icon.png" alt="" class="calicon" /></a> </div>
                   -->
                  <div class="getvenue_cont">
                    <label>Preferred Date:</label>
                    <input type="text" class="txt-name" name="date" value="" />
                    <script language="JavaScript">
						new tcal ({
							// form name
							'formname': 'bookVenueForm',
							// input name
							'controlname': 'date'
						});
						</script>
                  </div>
                  <div class="getvenue_cont">
                    <label>Your Function:</label>
                    <input type="text" name="function" class="txt-name" value="Enter your Function" onblur="if(this.value==''){this.value='Enter your Function'}" onfocus="if(this.value=='Enter your Function'){this.value=''}"  />
                  </div>
                  <div class="getvenue_cont last">
                    <label>Your Budget in INR:</label>
                    <input type="text" name="budget" class="txt-name" value="Enter your Budget" onblur="if(this.value==''){this.value='Enter your Budget'}" onfocus="if(this.value=='Enter your Budget'){this.value=''}"  />
                  </div>
                  <div class="clear"></div>
                  <br />
                  <div class="getvenue_cont last">
                    <input type="image" src="<?php echo $constants->DOMAIN_URL;?>images/go-btn.png"  onClick="return submitVenueBookingForm()"/>
                  </div>
                  <input type="hidden" name="actionType" value="bookAlliedService"  />
                  <input type="hidden" name="serviceName" value="<?php echo $rowCorporateFunctions[0]->title;?>" />
                </form>
                <!-- Box Content End -->
              </div>
            </div>
          </div>
          <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /> <img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc4.png" align="right" alt="" />
            <div class="boxbotbg"></div>
          </div>
        </div>
        <!-- Box End -->
      </div>
    </div>
    <br class="clear"/>
    <!-- Box Start -->
    <div class="box">
      <div class="boxtop"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxtopc2.png" align="right" alt="" />
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
              <script type="text/javascript"	src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
            </div>
            <!-- Box Content End -->
          </div>
        </div>
      </div>
      <div class="boxbot"><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->DOMAIN_URL;?>images/flower.png" class="flower" alt="" />
        <div class="boxbotbg"></div>
      </div>
    </div>
    <!-- Box End -->
    <?php  require("../view/footer.php"); ?>
  </div>
</div>
</body>
</html>