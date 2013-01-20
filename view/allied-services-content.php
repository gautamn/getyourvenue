<?php  require_once ("../constants/Constants.php");
$constants = new Constants(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $alliedSerivce[0]->title;?></title>
<link rel="stylesheet" href="<?php echo $constants->DOMAIN_URL;?>css/calendar.css" />
<script language="javascript" src="<?php echo $constants->DOMAIN_URL;?>js/calendar_us.js"></script>
<meta name="description" content="<?php echo $alliedSerivce[0]->metaDescription;?>" />
<meta name="keyword" content= "<?php echo $alliedSerivce[0]->metaKeyword;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $constants->DOMAIN_URL;?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $constants->DOMAIN_URL;?>css/albums.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $constants->DOMAIN_URL;?>css/styleSlider.css" />
<script type="text/javascript" src="<?php echo $constants->DOMAIN_URL;?>js/jquery-1.6.1.min.js"></script>
</head>
<body>
<div id="wrapper">
  <div id="main">
    <?php  require_once("header.php"); ?>
    <div id="contentArea">
      <div id="leftNavNarrow">
        <!-- Small Left Box Start -->
        <div class="box">
          <div class="boxtop"><img src="../images/boxtopc1.png" align="left" alt="" /><img src="../images/boxtopc2.png" align="right" alt="" />
            <div class="boxtopbg sml"></div>
          </div>
          <div class="fullboxBg">
            <div class="boxContent">
              <div class="boxGr">
                <!-- Box Content Start -->
                <h4>Allied Services</h4>
                <ul class="alliedServices">
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>music-band-mystique" title="Mystique Music Band">Mystique Music Band</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-decorators-in-delhi" title="Decor">Decor</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>band-ghori-baggi-services-in-delhi">Band, Ghori, Baggi</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-caterers-in-delhi">Caterer</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>transportation-for-wedding-in-delhi">Transportation</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-lehengas-in-delhi">Bridal Lehenga</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>groom-wedding-attires-in-delhi">Grooms Wear</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>fireworks">Fireworks</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>dj-and-sound-systems">DJ and Sound Systems</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>vermala-theme">Varmala Themes</a></li>
                    <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-planning">Wedding Planning</a></li>
                    <li class="last"><a href="<?php echo $constants->DOMAIN_URL;?>photography">Photography</a></li>
                </ul>
                <!-- Box Content End -->
              </div>
            </div>
          </div>
          <div class="boxbot"><img src="../images/boxbotc3.png" align="left" alt="" /><img src="../images/boxbotc4.png" align="right" alt="" /><img src="../images/flower.png" class="flower" alt="" />
            <div class="boxbotbg sml"></div>
          </div>
        </div>
        <!-- Small Left Box End -->
        <!-- Small Left Box Start -->
        <div class="box">
          <div class="boxtop"><img src="/images/boxtopc1.png" align="left" alt="" /><img src="/images/boxtopc2.png" align="right" alt="" />
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
          <div class="boxbot"><img src="/images/boxbotc3.png" align="left" alt="" /><img src="/images/boxbotc4.png" align="right" alt="" />
            <div class="boxbotbg sml"></div>
          </div>
        </div>
        <!-- Small Left Box End -->
      </div>
      <div id="rightNavWide">
        <!-- Box Start -->
        <div class="box">
          <div class="boxtop"><img src="../images/boxtopc1.png" align="left" alt="" /><img src="../images/boxtopc2.png" align="right" alt="" />
            <div class="boxtopbg"></div>
          </div>
          <div class="fullboxBg">
            <div class="boxContent">
              <div class="boxGr">
                <!-- Box Content Start -->
                <img src="<?php echo $alliedSerivce[0]->bannerPath;?>" alt="" class="bannerImg" /><br class="f-left" />
                <br />
                <h3><?php echo $alliedSerivce[0]->heading;?></h3>
                <div class="allied_content"><?php echo stripslashes($alliedSerivce[0]->html_content);?></div>
                <?php
                    $results = array();
                    $thumbsImg = array();
                    // create a handler for the directory
                    if(is_dir("..".$alliedSerivce[0]->jcarouselPath)) {
                      $handler = opendir("..".$alliedSerivce[0] ->jcarouselPath);
                      // open directory and walk through the filenames
                      while ($file = readdir($handler)) {
                            // if file isn't this directory or its parent, add it to the results
                          if ($file != "." && $file != "..") {
                            if(preg_match('/^thumb_/', $file)) {
                              $thumbsImg[] = $file;
                            }else{
                              $results[] = $file;
                            }
                          }
                      }
                      // tidy up: close the handler
                      closedir($handler);
                    }

                    $res = "";
                    if(!empty($results)) { ?>
                        <div id="wowslider-container1">
                          <div class="ws_images">
                            <ul>
                        <?php
                            $totalSlides = count($results);
                            foreach($results as $key=> $slides) {
                        ?>
                                <li><img src="<?php echo '..'.$alliedSerivce[0]->jcarouselPath.$slides;?>" alt="<?php echo $alliedSerivce[0]->heading;?>" title="<?php echo $alliedSerivce[0] ->heading;?>" id="wows1_<?php echo $key;?>" /><?php //echo 'Theme '.($key+1);?></li>
                        <?php }?>
                              </ul>
                            </div>
                            <!--large images ends-->                            
                            <!-- thumbnails starts-->
                            <div class="ws_thumbs">
                              <div>
                                <?php //foreach($thumbsImg as $key=> $thumb) {?>
                                <?php foreach($results as $key=> $thumb) {?>
                                <a title="<?php echo $alliedSerivce[0]->heading.' slide '.($key+1);?>" href="javascript:void(0);"><img src="<?php echo '..'.$alliedSerivce[0]->jcarouselPath.$thumb;?>" width="115" alt="" /><?php echo 'Theme '.($key+1);?></a>
                                <?php }?>
                              </div>
                            </div>
                            <!-- thumbnails ends-->
                          <div class="ws_shadow"></div>
                        </div>
                          <script type="text/javascript" src="<?php echo $constants->DOMAIN_URL;?>js/wowslider.js"></script>
                          <script type="text/javascript" src="<?php echo $constants->DOMAIN_URL;?>js/allied-services-slider.js"></script>
                        <?php
                        }?>
                      <!--</div>
                    </div>
                  </div>
                </div>    -->
                        
                <?php
                        /*$themes = array ();*/
                        $themes = explode("|",$alliedSerivce[0] ->themesUrl);
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
              </div>
            </div>
          </div>
          <div class="boxbot"><img src="../images/boxbotc3.png" align="left" alt="" /><img src="../images/boxbotc4.png" align="right" alt="" />
            <div class="boxbotbg"></div>
          </div>
        </div>
        <!-- Box End -->
        <!-- Box Start -->
        <div class="box">
          <div class="boxtop"><img src="../images/boxtopc1.png" align="left" alt="" /> <img src="../images/boxtopc2.png" align="right" alt="" />
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
                    <input type="image" src="../images/go-btn.png"  onClick="return submitVenueBookingForm()"/>
                  </div>
                  <input type="hidden" name="actionType" value="bookAlliedService"  />
                  <input type="hidden" name="serviceName" value="<?php echo $alliedSerivce[0] ->title ?>" />
                </form>
                <!-- Box Content End -->
              </div>
            </div>
          </div>
          <div class="boxbot"><img src="../images/boxbotc3.png" align="left" alt="" /> <img src="../images/boxbotc4.png" align="right" alt="" />
            <div class="boxbotbg"></div>
          </div>
        </div>
        <!-- Box End -->
      </div>
    </div>
    <br class="clear"/>
    <!-- Box Start -->
    <div class="box">
      <div class="boxtop"><img src="/images/boxtopc1.png" align="left" alt="" /><img src="/images/boxtopc2.png" align="right" alt="" />
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
      <div class="boxbot"><img src="/images/boxbotc3.png" align="left" alt="" /><img src="/images/boxbotc4.png" align="right" alt="" /><img src="/images/flower.png" class="flower" alt="" />
        <div class="boxbotbg"></div>
      </div>
    </div>
    <!-- Box End -->
    <?php  require("../view/footer.php"); ?>
  </div>
</div>
</body>
</html>