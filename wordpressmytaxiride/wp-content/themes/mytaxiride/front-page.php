<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!--TR slider start--->
<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
     <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">
                <!-- first Slide -->
                <div class="item active">
                    <!-- Slide Background -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/slider-bg-one.png" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text TR_slider_box slide_style_left">
                                <h1 data-animation="animated zoomInRight" class="margin_bottom_40"><span class="bottom-border">Welcome to</span> <strong class="red_text">My Taxi Ride</strong></h1>
                                <h1 data-animation="animated zoomInLeft" class="text-strong"> Your <span class="red_text">Brand,</span> Your <span class="red_text"> Customers</span></h1>
                                <h2 data-animation="animated zoomInRight" class="white_text text-strong">Anytime, Anywhere</h2>
                                <p data-animation="animated fadeInLeft">My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of flawlessly maintained vehicles to our clients.</p>
                                <a href="#contact" target="_blank" class="btn btn-info TR_info_btn TR_slider_readbtn" data-animation="animated fadeInLeft">Read More</a>
                                <a href="#contact" target="_blank" class="btn btn-info TR_info_btn TR_slider_trialbtn" data-animation="animated fadeInRight">Start your free trial</a>
                            </div>
                            <div class="slide-text slide_style_right TR_slider_user_img">
                               <span data-animation="animated fadeInRight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/slider-user12.png" class="slider_animate_img"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
              
                  <!-- third Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/slider-bg-one.png" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text TR_slider_box slide_style_left">
                                <h1 data-animation="animated zoomInRight" class="margin_bottom_40"><span class="bottom-border">Welcome to</span> <strong class="red_text">My Taxi Ride</strong></h1>
                                <h1 data-animation="animated zoomInLeft" class="text-strong"> Your <span class="red_text">Brand,</span> Your <span class="red_text"> Customers</span></h1>
                                <h2 data-animation="animated zoomInRight" class="white_text text-strong">Anytime, Anywhere</h2>
                                <p data-animation="animated fadeInLeft">My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of flawlessly maintained vehicles to our clients.</p>
                                <a href="#contact" target="_blank" class="btn btn-info TR_info_btn TR_slider_readbtn" data-animation="animated fadeInLeft">Read More</a>
                                <a href="#contact" target="_blank" class="btn btn-info TR_info_btn TR_slider_trialbtn" data-animation="animated fadeInRight">Start your free trial</a>
                            </div>
                            <div class="slide-text slide_style_right TR_slider_user_img secondslide">
                               <span data-animation="animated fadeInRight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/slider-user12.png" class="slider_animate_img"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
                  <!-- second Slide -->
                <div class="item">
                    <!-- Slide Background -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/slider-bg-one.png" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text TR_slider_box slide_style_left">
                                <h1 data-animation="animated zoomInRight" class="margin_bottom_40"><span class="bottom-border">Welcome to</span> <strong class="red_text">My Taxi Ride</strong></h1>
                                <h1 data-animation="animated zoomInLeft" class="text-strong"> Your <span class="red_text">Brand,</span> Your <span class="red_text"> Customers</span></h1>
                                <h2 data-animation="animated zoomInRight" class="white_text text-strong">Anytime, Anywhere</h2>
                                <p data-animation="animated fadeInLeft">My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of flawlessly maintained vehicles to our clients.</p>
                                <a href="#contact" target="_blank" class="btn btn-info TR_info_btn TR_slider_readbtn" data-animation="animated fadeInLeft">Read More</a>
                                <a href="#contact" target="_blank" class="btn btn-info TR_info_btn TR_slider_trialbtn" data-animation="animated fadeInRight">Start your free trial</a>
                            </div>
                            <div class="slide-text slide_style_right TR_slider_user_img ">
                               <span data-animation="animated fadeInRight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider/slider-user12.png" class="slider_animate_img"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->
             
            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
<!---TR slider end-->
        </div>
<!-- gif  section -->

<!---TR- about Us-->
<div class="container">
<div class="row margin_bottom_40">
<div class="text-center TR_main_section_heading">
<h1>About <strong>Us</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img"/>
<h3 class="TR_main_section_Subheading">My Taxi Ride - Discover The Ultimate Taxi Dispatch Software </h3>
</div>
<div class="col-md-8 col-sm-7 col-xs-12 TR_about_left">
<p>Whether you are billing customers, taking reservation, dispatching  cars or cashiering drivers,
 My Taxi Ride White Label Dispatch System is just for you! Our system is designed to provide
 smart mobility and prompt transportation, while minimizing downtime. This is an ideal  system 
in the world of navigation for those who are seeking a powerful tool for powering up or setting 
tariffs. </p>         
<p>
My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of 
flawlessly maintained vehicles to our clients. You  can choose an apt taxi, according to your 
needs and we can provide you  a greater degree of flexibility even for unexpected changes 
to the day’s journey. We made it possible for clients to launch their branded mobile  app both
for passengers and drivers in Google App and Apple Store Markting. </p>
<a href="javascript:;" class="btn btn-info TR_info_btn readbtn" data-animation="animated fadeInLeft">Read More</a>
</div>
<div class="col-md-4 col-sm-5 col-xs-12 TR_about_right">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/youtube_img.png" alt="about"/>
</div>
</div>
</div>
<!----TR-service section-->
<section class="TR_services_sec">
<div class="container">
 <div class="row">
 <div class="text-center TR_main_section_heading">
<h1>Our <strong>services</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
<div class="clearfix"></div>
<p class="col-md-8 col-md-offset-2 padding_top_30 padding_bottom_30">My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of 
flawlessly maintained vehicles to our clients. You  can choose an apt taxi, according to your 
needs and we can provide you  a greater degree of flexibility even for unexpected changes 
to the day’s journey.</p>
</div>
<div class="clearfix"></div>
 <div class="col-md-2 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12 service_square_box">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></span>
 </div>
 </div>
  <h5>MTR Softwares</h5>
 </div>
 <div class="col-md-2 col-sm-3 col-xs-12 service_square_box" id="triangle_icon">
 <div class="service_box">
 <div class="driver_div">
 <span class="service_icon driver_icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/drive_app_icon1.png" class="driver_iconimg" alt="img" > <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/drive_app_icon.png" class="driver_iconhover" alt="img"></span>
 </div>
 </div> 
  <h5>Driver Apps</h5>
 </div>
 <div class="col-md-2 col-sm-3 col-xs-12 service_square_box">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-cogs fa-2x" aria-hidden="true"></i></span>
 </div>
 </div> 
  <h5>Affiliate Network</h5>
 </div>
 <div class="col-md-2 col-sm-3 col-xs-12 service_square_box">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-usd fa-2x" aria-hidden="true"></i></span>
 </div>
 </div>
  <h5>Payment Solutions</h5> 
 </div>
 <div class="col-md-2 col-sm-3 col-xs-12 service_square_box">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-mobile fa-3x" aria-hidden="true"></i></span>
 </div>
 </div> 
  <h5>Mobile App </h5>
 </div>
 </div>
</div>
</section>
<div class="container">
 <div class="row">
<div class="text-center TR_main_section_heading">
<h1>Check Out Our <strong>Most Loved Apps</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
<div class="clearfix"></div>
 </div>
<div class="carousel slide margin_top_40" data-ride="carousel" id="TR_loveapp_slider">
 
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-3 TRS_loveApp_box">
    						<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo1.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Merengue Car Service</h4>
									<p>Current Version 1.0.0</p>
								</div>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo3.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Liberty Car Service</h4>
									<p>Current Version 5.3.1</p>
								</div>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo2.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Los Primos</h4>
									<p>Current Version 4.80.11</p>
								</div>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo4.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Fenix Car Service</h4>
									<p>Current Version 4.80.11</p>
								</div>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo3.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Liberty Car Service</h4>
									<p>Current Version 5.3.1</p>
								</div>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo2.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Los Primos</h4>
									<p>Current Version 4.80.11</p>
								</div>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo4.png" alt=""></a>
                                    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Fenix Car Service</h4>
									<p>Current Version 4.80.11</p>
								</div>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo1.png" alt=""></a>
                                     <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Merengue Car Service</h4>
									<p>Current Version 1.0.0</p>
								</div>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3 TRS_loveApp_box">	
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo1.png" alt=""></a>
								    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Merengue Car Service</h4>
									<p>Current Version 1.0.0</p>
								 </div>
                              </div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo2.png" alt=""></a>
								    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Los Primos</h4>
									<p>Current Version 4.80.11</p>
								</div>
                            </div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo3.png" alt=""></a>
								    <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Liberty Car Service</h4>
									<p>Current Version 5.3.1</p>
								</div>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3 TRS_loveApp_box">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-logo4.png" alt=""></a>
								 <div class="caption">
                                    <a href="javascript:;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rating_img.png" alt="rating"/></a>
									<h4>Fenix Car Service</h4>
									<p>Current Version 4.80.11</p>
								</div>
                              </div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
     	<ol class="carousel-indicators TR_loveapp_slider_indicators">
          <li data-target="#TR_loveapp_slider" data-slide-to="0" class="active"></li>
          <li data-target="#TR_loveapp_slider" data-slide-to="1"></li>
          <li data-target="#TR_loveapp_slider" data-slide-to="2"></li>
        </ol>
	   <!-- /.control-box -->   
</div>
<div class="clearfix"></div>
<div class="margin_top_40"></div>
<div class="col-md-2 col-md-offset-4">
<div class="Extra_app_icon padding-top-5">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Apple_app_icon.png" alt="img"/>
</div>
</div>
<div class="col-md-2">
<div class="Extra_app_icon">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/google_app_icon.png" alt="img"/>
</div>
</div>
<div class="clearfix"></div>
<div class="margin_bottom_40"></div>
</div>
</div>
<!---TR- Our Features -->
<section class="our_feature flex">

 <div class="col-md-6 TR_feature_left">
 <div class="TR_main_section_heading">
 <h1 class="white_text">Our <strong>Features</strong></h1>
</div>
<div class="panel-group TR_feature_panel" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      <h4 class="panel-title">
        <a>
          Main system windows
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        You can choose an apt taxi, according to your needs and we can provide you a greater degree of flexibility even for unexpected changes to the day’s journey. We made it possible for clients to launch their branded mobile app both for passengers and drivers in Google App and Apple Store market.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
      <h4 class="panel-title">
        <a>
          Call records
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of flawlessly maintained vehicles to our clients. This is an ideal system in the world of navigation for those who are seeking a powerful tool for powering up or setting tariffs.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
      <h4 class="panel-title">
        <a>
          Passenger's location
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        My Taxi Ride White Label Dispatch System is just for you! Our system is designed to provide smart mobility and prompt transportation, while minimizing downtime. This is an ideal system in the world of navigation for those who are seeking a powerful tool for powering up or setting tariffs.
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
      <h4 class="panel-title">
        <a>
          Compatible ID boxes
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        My Taxi RideTaxi Dispatch System for Fleet Management delivers high standard services of flawlessly maintained vehicles to our clients. This is an ideal system in the world of navigation for those who are seeking a powerful tool for powering up or setting tariffs.
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
      <h4 class="panel-title">
        <a>
          Caller ID
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        My Taxi Ride White Label Dispatch System is just for you! Our system is designed to provide smart mobility and prompt transportation, while minimizing downtime. This is an ideal system in the world of navigation for those who are seeking a powerful tool for powering up or setting tariffs.
      </div>
    </div>
   </div>
  </div>
 </div>
 <div class="col-md-6">
 </div>
</section>
<div class="container">
<div class="row">
<div class="margin_top_40"></div>
<div class="col-md-4 col-sm-4 col-xs-12 service_square_box square_box_snd">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-car fa-2x" aria-hidden="true"></i></span>
 </div>
 </div>
  <h4 class="text-uppercase">book a ride</h4>
  <p>My Taxi Ride White Label Dispatch System is just for you! Our system is designed to provide smart mobility and prompt transportation</p>
  <a href="javascript:;" class="btn btn-info TR_info_btn readbtn" data-animation="animated fadeInLeft">Read More</a>
 </div>
 <div class="col-md-4 col-sm-4 col-xs-12 service_square_box square_box_snd">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i></span>
 </div>
 </div>
  <h4 class="text-uppercase">Avail Dispatch system befefits</h4>
  <p>My Taxi Ride White Label Dispatch System is just for you! Our system is designed to provide smart mobility and prompt transportation</p>
  <a href="javascript:;" class="btn btn-info TR_info_btn readbtn" data-animation="animated fadeInLeft">Read More</a>
 </div>
 <div class="col-md-4 col-sm-4 col-xs-12 service_square_box square_box_snd">
 <div class="service_box">
 <div>
 <span class="service_icon"><i class="fa fa-tablet fa-2x" aria-hidden="true"></i></span>
 </div>
 </div>
  <h4 class="text-uppercase">Get the App Now!</h4>
  <p>My Taxi Ride White Label Dispatch System is just for you! Our system is designed to provide smart mobility and prompt transportation</p>
  <a href="javascript:;" class="btn btn-info TR_info_btn readbtn" data-animation="animated fadeInLeft">Read More</a>
 </div>
 <div class="clearfix"></div>
 <div class="margin_bottom_40"></div>
</div>
</div>
<!---TR-Partner slider-->
<section class="TR_services_sec partner_sec">
<div class="container">
<div class="row">
<div class="text-center TR_main_section_heading">
<h1>Our <strong>Partners</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
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
                </div>
                </section>

<?php
get_footer();
