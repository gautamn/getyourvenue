<?php
/*
 * Created on Jul 6, 2011
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require_once ("../constants/Constants.php");

$constants = new Constants();
?>
<div id="header">
  <img src="<?php echo $constants->IMAGE_PATH;?>headerLeft.jpg" align="left" alt="" />
  <img src="<?php echo $constants->IMAGE_PATH;?>headerRight.jpg" align="right" alt="" />
  <a href="<?php echo $constants->DOMAIN_URL;?>"><img src="<?php echo $constants->IMAGE_PATH;?>logo.png" class="logo" alt="Get Your Venue, Wedding Venues in Delhi NCR" /></a>
  <img src="<?php echo $constants->IMAGE_PATH;?>hotlinenumber.png" class="hotlineNum" alt="Get Your Venue, Marriage Venues in Delhi NCR" />
  <div class="headerSlogan"><span>Book Your Venue Through Experts,</span> Best Deal Guaranteed</div>
  <div class="topNav"><img src="<?php echo $constants->IMAGE_PATH;?>topNavleft.jpg" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH;?>topNavRight.jpg" align="right" alt="" />
    <ul>
      <li><a href="<?php echo $constants->DOMAIN_URL;?>" title="Home"><img style="margin-top: 5px; height: 20px;" src="<?php echo $constants->DOMAIN_URL;?>images/home.png" title="home" alt="home" /></a></li>
      <li><a href="javascript:void(0);">Popular Choices</a>
        <ul>
          <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-chhatarpur';?>" title="Chhattarpur &amp; MG Road">Chhattarpur &amp; MG Road</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-gt-karnal-road';?>" title="GT Karnal Road">GT Karnal Road</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-nh8-pushpanjali';?>" title="Pushpanjali &amp; NH-8">Pushpanjali &amp; NH-8</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-vaishali-vasundhara';?>" title="Vaishali Extn. &amp; Vasundhara">Vaishali Extn. &amp; Vasundhara</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-mundka';?>" title="Mundka">Mundka</a></li>
            <?php /*<li><a href="#" title="Rama Road & Kirti Nagar">Rama Road & Kirti Nagar</a></li>
            <li><a href="#" title="5 Star Banquets">5 Star Banquets</a></li>
            <li><a href="#" title="Destination Wedding">Destination Wedding</a></li>*/?>
            <li class="last"><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-delhi-ncr';?>" title="Others">Others</a></li>
        </ul>
      </li>      
      <li><a class="newribbon" href="<?php echo $constants->DOMAIN_URL . 'allied-services';?>">Allied Services</a>
        <ul>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-planning" title="Wedding Planning">Wedding Planning</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-decorators-in-delhi" title="Decor">Decor</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-caterers-in-delhi" title="Caterer">Caterer</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>photography" title="Photography">Photography</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>transportation-for-wedding-in-delhi" title="Lodging &amp; Transportation">Lodging &amp; Transportation</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>band-ghori-baggi-services-in-delhi" title="Ghoriwaala, Baggi">Ghoriwaala, Baggi</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>fireworks" title="Fireworks">Fireworks</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>groom-wedding-attires-in-delhi" title="Grooms Wear">Grooms Wear</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-lehengas-in-delhi" title="Bridal Lehengas">Bridal Lehengas</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>music-band-mystique" title="Mystique Music Band">Mystique Music Band</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL;?>dj-and-sound-systems" title="DJ and Sound Systems">DJ and Sound Systems</a></li>
          <li class="last"><a href="<?php echo $constants->DOMAIN_URL;?>vermala-theme" title="Varmala Themes">Varmala Themes</a></li>
        </ul>
      </li>
      <?php /*
      <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions';?>" class="newribbon" title="Social Functions"><strong>Social Functions</strong></a>
          <ul>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/ring-ceremony';?>" title="Ring Ceremony">Ring Ceremony</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/wedding-reception';?>" title="Wedding Reception">Wedding Reception</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/birthday';?>" title="Birthday">Birthday</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/anniversary';?>" title="Anniversary">Anniversary</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/mehendi-ki-raat';?>" title="Mehendi Ki Raat">Mehendi Ki Raat</a></li>
            <li class="last"><a href="<?php echo $constants->DOMAIN_URL.'social-functions/bachelor-party';?>" title="Bachelor Party">Bachelor Party</a></li>
          </ul>
      </li>
      <li>
          <a href="<?php echo $constants->DOMAIN_URL.'corporate-functions';?>" class="newribbon" title="Corporate Functions"><strong>Corporate Functions</strong></a>
          <ul>            
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/dealers-meet';?>" title="Dealer's Meet">Dealer's Meet</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/product-launch';?>" title="Product Launch">Product Launch</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/exhibition';?>" title="Exhibition">Exhibition</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/annual-general-meeting';?>" title="Annual General Meeting">Annual General Meeting (AGM)</a></li>
            <li class="last"><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/family-day';?>" title="Family Day">Family Day</a></li>
          </ul>
      </li>*/?>
      <li><a href="<?php echo $constants->DOMAIN_URL . 'non_wedding'; ?>" title="Non Wedding Functions">Non Wedding Functions</a></li>
      <li><a href="http://blog.getyourvenue.com/" target="_blank" title="GYV Blog">Blog</a></li>
      <li><a href="<?php echo $constants->DOMAIN_URL . 'book_now'; ?>" title="Book Now">Book Now</a></li>      
      <li><a href="<?php echo $constants->DOMAIN_URL . 'about-us';?>" title="About Us">About Us</a></li>
      <li class="last"><a href="<?php echo $constants->DOMAIN_URL . 'contact_us';?>" title="Contact Us">Contact Us</a></li>
    </ul>
    <!-- AddThis Button BEGIN -->
    <!--<div class="addthis_toolbox addthis_default_style ">
      <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
      <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
    </div>-->
    <?php /*<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ecaa14010f9194d"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js#pubid=ra-50d34c4634cc5b81"></script>*/?>    
    <!-- AddThis Button END -->
  </div>
</div>