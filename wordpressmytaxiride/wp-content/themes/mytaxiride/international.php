<?php

/*

Template Name: International
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
<h1><strong> International</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
<h3 class="TR_main_section_Subheading">The world’s market leader My Taxi Ride Dispatch System has an established international customer base which is growing every day.</h3>
</div>
<div class="padding_top_20"></div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="TR_reponsive_bigimg">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/international.jpg" alt="map">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 TR_content_right sidewise">
<p>My Taxi Ride Dispatch System currently operates in over twenty countries across the World, through either fully staffed My Taxi Ride offices or specially selected international agents, who act as official distributors of the My Taxi Ride Dispatch System As our international business has grown over recent years we have appointed a special team to co-ordinate overseas activity – this team consists of multilingual administrators, project engineers and other senior staff. My Taxi Ride Dispatch System currently operates in twenty countries across the world.</p>
<div class="padding_top_20"></div>
</div>
<div class="clearfix"></div>
<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 TR_content_right sidewise">
<ul class="col-md-6 col-sm-6 col-xs-12 international_list">
<li>Australia</li>
<li>Argentina</li>
<li>Brazil</li>
<li>Bulgaria</li>
<li>Chile</li>
<li>Colombia</li>
<li>Ecuador </li>
<li>Egypt </li>
<li>France</li>
<li>Germany</li>
<li>Holland</li>
<li>Lebanon</li>
</ul>

<ul class="col-md-6 col-sm-6 col-xs-12 international_list">
<li>Mexico</li>
<li>Morocco</li>
<li>Panama</li>
<li>Peru</li>
<li>Poland</li>
<li>Portugal</li>
<li>Rep of Ireland</li>
<li>Russia</li>
<li>Serbia & Montenegro</li>
<li>Spain</li>
<li>UK</li>
<li>USA</li>
</ul>

</div>
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