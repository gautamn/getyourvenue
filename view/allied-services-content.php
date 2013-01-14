<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="../css/calendar.css">
<script language="javascript" src="../js/calendar_us.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $alliedSerivce[0] ->title ?></title>
<meta name="description" content= "<?php echo $alliedSerivce[0]->metaDescription ?>" />
<meta name="keyword" content= "<?php echo $alliedSerivce[0]->metaKeyword ?>" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/albums.css" />
<link rel="stylesheet" type="text/css" href="../css/styleSlider.css" />
<script type="text/javascript" src="../js/jquery-1.6.1.min.js"></script>
</head>
<body>
<div id="wrapper">
  <div id="main">
    <?php  require("header.php"); ?>
    <?php  require_once ("../constants/Constants.php"); 
           $constants=new Constants(); 
    ?>  
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
                    <li><a href="/music-band-mystique" title="Mystique Music Band">Mystique Music Band</a></li>
                    <li><a href="/wedding-decorators-in-delhi" title="Decor">Decor</a></li>
                    <li><a href="/band-ghori-baggi-services-in-delhi">Band, Ghori, Baggi</a></li>                   
                    <li><a href="/wedding-caterers-in-delhi">Caterer</a></li>                    
                    <li><a href="/transportation-for-wedding-in-delhi">Transportation</a></li>
                    <li><a href="/wedding-lehengas-in-delhi">Bridal Lehenga</a></li>
                    <li><a href="/groom-wedding-attires-in-delhi">Grooms Wear</a></li>
                    <li><a href="/fireworks">Fireworks</a></li>
                    <li><a href="/dj-and-sound-systems">DJ and Sound Systems</a></li>
                    <li><a href="/vermala-theme">Varmala Themes</a></li>
                    <li><a href="/wedding-planning">Wedding Planning</a></li>
                    <li class="last"><a href="/photography">Photography</a></li>
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
                <img src="<?php echo $alliedSerivce[0] ->bannerPath ?>" alt="" class="bannerImg" /><br class="f-left" />
                <br />
                <h3><?php echo $alliedSerivce[0] ->heading ?></h3>
                <div class="allied_content"><?php echo $alliedSerivce[0] ->html_content;?></div>                
                <?php
                    $results = array();
                    // create a handler for the directory
                    $handler = opendir("..".$alliedSerivce[0] ->jcarouselPath);
                    // open directory and walk through the filenames
                    while ($file = readdir($handler)) {
                            // if file isn't this directory or its parent, add it to the results
                            if ($file != "." && $file != "..") {
                            $results[] = $file;
                            }
                    }
                    // tidy up: close the handler
                    closedir($handler);
                ?>
                	
                
              <!--
                 <div class="latest-news">
                  <div class="image-slider-allied f-left">
                    <div class="slider-wrapper theme-default">
                      <div class="ribbon"></div>
                      <div id="slider" class="nivoSlider-allied"> -->
                         <?php
                            $res = "";
                            if(!empty($results)) { ?>
                          <div id="wowslider-container1">
                            <div class="ws_images">
                              <ul>
                        <?php
                            $totalSlides = count($results);
                            foreach($results as $key=> $slides) {
                        ?>
                                <li><img src="<?php echo '..'.$alliedSerivce[0]->jcarouselPath.$slides;?>" alt="" /><?php echo $alliedSerivce[0] ->heading.' style '.($key+1);?></li>
                        <?php }?>
                              </ul>
                            </div>
                            <!--large images ends-->                            
                            <!-- thumbnails starts-->
                            <div class="ws_thumbs">
                              <div>
                                <?php foreach($results as $key=> $slides) {?>
                                <a title="<?php echo $alliedSerivce[0]->heading.' slide '.($key+1);?>" href="javascript:void(0);"><img width="115" src="<?php echo '..'.$alliedSerivce[0]->jcarouselPath.$slides;?>" alt="" /><?php echo $alliedSerivce[0] ->heading.' style '.($key+1);?></a>
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
                
                <!--h3 class="clear">Few of the Popular themes are:</h3>
                <div class="alliedThumb"><img src="../images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb">
                  <iframe width="241" height="180" src="http://www.youtube.com/embed/rnkndQslmaw" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="alliedThumb"><img src="../images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb"><img src="../images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb"><img src="../images/img_thumb.jpg" alt="" /><span class="themeTitle">Theme One Title Here</span></div>
                <div class="alliedThumb">
                  <iframe width="241" height="180" src="http://www.youtube.com/embed/rnkndQslmaw" frameborder="0" allowfullscreen></iframe>
                </div-->
                <!-- Box Content End -->
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
                  <!--<div class="getvenue_cont">
                   <label>Preferred Date:</label>
                    <input type="text" name="date" class="txt-name" value="Select your Date" onblur="if(this.value==''){this.value='Select your Date'}" onfocus="if(this.value=='Select your Date'){this.value=''}"  />
                    <a href="#"><img src="../images/cal-icon.png" alt="" class="calicon" /></a> </div>
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
                  <br>
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
