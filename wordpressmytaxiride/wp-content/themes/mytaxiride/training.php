<?php

/*

Template Name: Training
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
<h1>Online  <strong>Traning</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
</div>
<div class="margin_bottom_40"></div>

<div class="padding-top-5"></div>
<div class="col-md-6 fome">
<div class="bs-example">
    <form class="form-inline" role="form">
        <div class="form-group">
        <!--<label class="sr-only" for="inputName">Name</label>-->
        <input type="text" class="form-control nam" placeholder="Name">
            <!--<label class="sr-only" for="inputEmail">Email</label>-->
            <!--<input type="email email" class="form-control mail" id="inputEmail" placeholder="Email">-->
        </div>
        <div class="form-group">
         <!--<label class="sr-only" for="inputName">Comapny</label>-->
        <!--<input type="text" class="form-control comp" placeholder="Comapny">-->
            <!--<label class="sr-only pas" for="inputPassword">Password</label>-->
            <input type="password" class="form-control pass" id="inputPassword" placeholder="Password">
        </div>
            <input type="text" class="form-control msg" id="Message" placeholder="Message">
       <br>         
        <button type="submit" class="btn btn-primary" id="login">Login</button>
    </form>
</div>                                		
</div>

<div class="col-md-5 col-sm-6 col-xs-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/online_image.jpg" alt="img" class="img-responsive"></div>
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
		<?php get_footer(); ?>b