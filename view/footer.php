<?php
/*
 * Created on Jul 9, 2011
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require_once ("../constants/Constants.php");
$constants = new Constants();
?>
<!-- AddThis Button BEGIN -->
<div class="addThis2">
  <div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:50px;top:215px;">
    <a class="addthis_button_facebook_like"></a>
    <a class="addthis_button_tweet"></a>
    <a class="addthis_button_google_plusone"></a>    
    <a class="addthis_counter"></a>
  </div>
</div>
<script type="text/javascript">
  $(document).ready( function(){
    $('.addThis2 a.addthis_button_facebook_like').attr('fb:like:layout','box_count');
    $('.addThis2 a.addthis_button_tweet').attr('tw:count','vertical');
    $('.addThis2 a.addthis_button_google_plusone').attr('g:plusone:size','tall');
  });
</script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d34c4634cc5b81"></script>
<!-- AddThis Button END -->

<div id="footer">
  <div class="box">
    <div class="boxtop"><img src="<?php echo $constants->IMAGE_PATH;?>boxtopc1.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH;?>boxtopc2.png" align="right" alt="" />
      <div class="boxtopbg"></div>
    </div>
    <div class="fullboxBg">
      <div class="boxContent">
        <div class="boxGr">
          <!-- Box Content Start -->
          <!--<ul class="content" style="width: 180px;">-->
          <ul class="content" style="width: 250px;">
            <li><a href="<?php echo $constants->DOMAIN_URL;?>" title="Popular Choices in Delhi &amp; NCR"><strong>Popular Choices in Delhi &amp; NCR</strong></a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-chhatarpur';?>" title="Chhattarpur &amp; MG Road">Chhattarpur &amp; MG Road</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-gt-karnal-road';?>" title="GT Karnal Road">GT Karnal Road</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-nh8-pushpanjali';?>" title="Pushpanjali &amp; NH-8">Pushpanjali &amp; NH-8</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-vaishali-vasundhara';?>" title="Vaishali Extn. &amp; Vasundhara">Vaishali Extn. &amp; Vasundhara</a></li>
            <?php /*?>
            <li><a href="#" title="Rama Road & Kirti Nagar">Rama Road & Kirti Nagar</a></li><? */?>
            <li><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-mundka';?>" title="Mundka">Mundka</a>, <?php /*<a href="#" title="5 Star Banquets">5 Star Banquets</a>, <a href="#" title="Destination Wedding">Destination Wedding</a>, */?><a href="<?php echo $constants->DOMAIN_URL.'wedding-venues-in-delhi-ncr';?>" title="Others">Others</a></li>
          </ul>
          <!--<ul class="content" style="width:180px;">-->
          <ul class="content" style="width:230px;">
            <li><a href="<?php echo $constants->DOMAIN_URL.'allied-services';?>" title="Allied Services"><strong>Allied Services</strong></a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-planning" title="Wedding Planning">Wedding Planning</a>, <a href="<?php echo $constants->DOMAIN_URL;?>wedding-decorators-in-delhi" title="Decor">Decor</a>, <a href="<?php echo $constants->DOMAIN_URL;?>wedding-caterers-in-delhi" title="Caterer">Caterer</a>, <a href="<?php echo $constants->DOMAIN_URL;?>photography" title="Photography">Photography</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL;?>transportation-for-wedding-in-delhi" title="Lodging &amp; Transportation">Lodging &amp; Transportation</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL;?>band-ghori-baggi-services-in-delhi" title="Ghoriwaala, Baggi">Ghoriwaala, Baggi</a>, <a href="<?php echo $constants->DOMAIN_URL;?>fireworks" title="Fireworks">Fireworks</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL;?>groom-wedding-attires-in-delhi" title="Bridal &amp; Grooms Wear">Bridal &amp; Grooms Wear</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL;?>wedding-lehengas-in-delhi" title="Bridal Lehengas">Bridal Lehengas</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL;?>music-band-mystique" title="Mystique Music Band">Music Band</a>, <a href="<?php echo $constants->DOMAIN_URL;?>dj-and-sound-systems" title="DJ and Sound Systems">DJ and Sound Systems</a>, <a href="<?php echo $constants->DOMAIN_URL;?>vermala-theme" title="Varmala Themes">Varmala Themes</a></li>
          </ul>
          <?php /*
          <ul class="content" style="width: 130px;">
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions';?>" title="Social Functions"><strong>Social Functions</strong></a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/ring-ceremony';?>" title="Ring Ceremony">Ring Ceremony</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/wedding-reception';?>" title="Wedding Reception">Wedding Reception</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/birthday';?>" title="Birthday">Birthday</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/anniversary';?>" title="Anniversary">Anniversary</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/mehendi-ki-raat';?>" title="Mehendi Ki Raat">Mehendi Ki Raat</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'social-functions/bachelor-party';?>" title="Bachelor Party">Bachelor Party</a></li>
          </ul>
          <ul class="content">
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions';?>" title="Corporate Functions"><strong>Corporate Functions</strong></a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/dealers-meet';?>" title="Dealer's Meet">Dealer's Meet</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/product-launch';?>" title="Product Launch">Product Launch</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/exhibition';?>" title="Exhibition">Exhibition</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/annual-general-meeting';?>" title="Annual General Meeting">Annual General Meeting (AGM)</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'corporate-functions/family-day';?>" title="Family Day">Family Day</a></li>
          </ul>*/?>
          <ul class="content" style="width:180px;">
            <li><a href="<?php echo $constants->DOMAIN_URL.'readers-corner';?>" title="Readers Corner">Readers Corner</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'about-us';?>" title="About Us">About Us</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'book_now';?>" title="Book Now">Book Now</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'career';?>" title="Career">Career</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'site-map';?>" title="Sitemap">Sitemap</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'contact_us';?>" title="Contact Us">Contact Us</a></li>
            <li><a href="<?php echo $constants->DOMAIN_URL.'non_wedding';?>" title="Non Wedding Functions">Non Wedding Functions</a></li>
          </ul>
          <ul class="content" style="width:230px;">
            <li><p><strong>Follow Us on</strong></p><a href="http://facebook.com/pages/Getyourvenue/359630997401634" title="follow us @Facebook" target="_blank"><img src="<?php echo $constants->DOMAIN_URL;?>images/icon_facebook.png" alt="facebook" /></a> <a href="http://twitter.com/GetYourVenue" target="_blank" title="follow us @twitter"><img src="<?php echo $constants->DOMAIN_URL;?>images/icon_twitter.png" alt="Twitter" /></a> <a target="_blank" href="https://plus.google.com/116875953644480548807" title="Follow us @Google+"><img alt="Google+" src="<?php echo $constants->DOMAIN_URL;?>images/icon_google.png" /></a></li>
            <li style="border-top: 1px solid #cccccc;"><br /><strong>You can reach us via</strong></li>
            <li>Email: <a href="mailto:sales@getyourvenue.com" title="email us @ sales@getyourvenue.com">sales@getyourvenue.com</a></li>
            <li>Mobile: +91-8800095444, +91-8800093444</li>
            
          </ul>
          <div class="clear"></div>
          <div class="copyright">Copyright &copy;2011 <a href="<?php echo $constants->DOMAIN_URL;?>">Get Your Venue</a>. All Rights Reserved</div>
          <!-- Box Content End -->
        </div>
      </div>
    </div>
    <div class="boxbot"><img src="<?php echo $constants->IMAGE_PATH;?>boxbotc3.png" align="left" alt="" /><img src="<?php echo $constants->IMAGE_PATH;?>boxbotc4.png" align="right" alt="" /><img src="<?php echo $constants->IMAGE_PATH;?>flower.png" class="flower" alt="" />
      <div class="boxbotbg"></div>
    </div>
  </div>
</div>
<?php require_once("footer.config.php");?>