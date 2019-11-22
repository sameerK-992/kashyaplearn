<?php

/*

Template Name: Customer care
*/

?><?php get_header(); ?>
<!--breadcrumb section start--->
<section class="breadcrumb_sec">
<div class="container">
 <div class="row">
<ol class="breadcrumb TR_breadcrumb">
<li><a href="<?php echo home_url();?>">Home</a></li>
  <li class="breadcrumb-item active"><?php the_title(); ?></li>
</ol>
</div>
</div>
</section>
<!--free_trail Div-->
<div class="free_trial"><a href="<?php echo home_url();?>/contactus/">Start Your Free Trial</a></div>
<!---inner content--->
<div class="container">
<div class="row">
<div class="text-center TR_main_section_heading">
<h1>Customer  <strong>Care</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
</div>
<div class="margin_bottom_40"></div>
<div class="col-md-7 col-sm-6 col-xs-12 TR_content_right">
<h4>Customer Care</h4>
<div class="padding-top-5"></div>
<p>We believe that our customers are the most important part of our business. We are always available and ready to listen to any issues you have or any potential improvements we can make to our system</p>
<p>Contact us on 718-666-9848 &amp; 212-920-7641 or email us on <span style="color: #0000ff;"><span style="text-decoration: underline;"><a href="#">customercare@mytaxiride.com</a></span></span></p>
</div>
<div class="col-md-5 col-sm-6 col-xs-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/customer_care.jpg" alt="img" class="img-responsive"></div>
</div>
</div>
<div class="clearfix"></div>
<div class="margin_bottom_40"></div>
<!---TR-Partner slider-->
<section class="TR_services_sec partner_sec">
<div class="container">
<div class="row">
<div class="text-center TR_main_section_heading">
<h1>Our <strong>Partners</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
</div>
<div class="clearfix"></div>
<div class="margin_bottom_40"></div>
                    <div id="myCarousel" class="carousel fdi-Carousel slide">
                     <!-- Carousel items -->
                        <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                           <div class="carousel-inner onebyone-carosel">
                                <div class="item active">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-1.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-2.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-3.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-4.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-5.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-6.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-7.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-8.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 TR_Partner">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-9.png" class="img-responsive center-block"></a>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#eventCarousel" data-slide="prev"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                            <a class="right carousel-control" href="#eventCarousel" data-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                        <!--/carousel-inner-->
                    </div><!--/myCarousel-->
                 
                </div>
                </div>
                </section>
    <!---TR-Partner footer-->
		<?php get_footer(); ?>