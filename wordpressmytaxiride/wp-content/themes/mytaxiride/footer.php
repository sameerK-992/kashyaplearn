<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
    <!---TR-Partner footer-->
    <footer>
    <div class="TR_footer"> </div>
      <div class="container">
       <div class="row">
       <div class="col-md-3">
         <div class="footer_row">
           <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/MTRdispatchWhite.png" alt="img">
           <p>we can provide you a greater degree of flexibility even for unexpected changes to the day’s journey. We made it possible for clients to launch their branded mobile app both for passengers and drivers in Google App and Apple Store market</p>
         </div>       
       </div>
       
       <div class="col-md-3">
        <div class="footer_row">
        <h3>USEFULL LINKS</h3>
        <ul>
        <li><a href="<?php echo home_url();?>/overview_mytaxiride/">Overview of MTR</a></li>
        <li><a href="<?php echo home_url();?>/our_team/">Our Team</a></li>
        <li><a href="<?php echo home_url();?>/our_history/">History</a></li>
        <li><a href="<?php echo home_url();?>/international/">International</a></li>
        <li><a href="<?php echo home_url();?>/founder/">The Founder</a></li>
        <li><a href="<?php echo home_url();?>/careers/">Careers</a></li>
        <li><a href="<?php echo home_url();?>/privacypolicy/">Privacy Policy</a></li>
        </ul>
        </div>       
       </div>
       <div class="col-md-3">
       <div class="footer_row">
       <h3>OUR SERVICES</h3>
         <ul>
        <li><a href="<?php echo home_url();?>/support/">24/7 Technical Support</a></li>
        <li><a href="<?php echo home_url();?>/training/">Online Training</a></li>
        <li><a href="<?php echo home_url();?>/customer_care/">Customer Care</a></li>
        <li><a href="<?php echo home_url();?>/customer-advice-services/">Customer Advice Services</a></li>
        <li><a href="<?php echo home_url();?>/user-manual/">User Manual</a></li>
       <li><a href="<?php echo home_url();?>/faqs-for-startups/">FAQs For Startups</a></li> 
        </ul>
       </div>
       </div>
       <div class="col-md-3">
       <div class="footer_row">
       <h3>Contact Us</h3>
       <ul class="footer_contact">
       <li>My Taxi Ride Inc.2326 Amsterdam AveNew York, NY 10033</li>
       <li> Monday To Friday (9:30 AM To 6:30 PM)</li>
       <li>718-666-9848 <br> 212-920-7641</li>
       
        <li>info@mytaxiride.com</li>
       </ul>
       </div>
       </div>
          </div>   
      </div>    
    </footer>
    <section class="bottom_footer">
    <div class="container">
    <div class="row">
    <div class="pull-left">
    <p class="copyright">Copryright 2019 by MyTaxiRide | All rights reserved</p>
    </div>
    <div class="pull-right">
    <div class="social-links">
                            <a href="#" class="fa fa-facebook-f"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-pinterest-p"></a>
                        </div>
    </div>
    </div>
    </div>
    </section>
<!----contact-us section
<a id="scrollUp" href="#header-wrapper"><span class="fa fa-long-arrow-up"></span></a>-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slider/animate.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slider/bootstrap-touch-slider.js"></script>
<script>
  $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 20;
			 if ($(window).scrollTop() > 100) {
				 $('nav').addClass('sticky');
			 }
			 else {
				 $('nav').removeClass('sticky');
			 }
		});
	});

$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

$(document).ready(function () {
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});

</script>

<?php wp_footer(); ?>

</body>
</html>