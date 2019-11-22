<?php

/*

Template Name: Founder
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
<h1>Company <strong>Founder</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
</div>
<div class="padding_top_20"></div>

<div class="col-md-12 col-sm-12 col-xs-12 TR_content_right sidewise">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/founder_img.jpg" alt="img" class="img-responsive TR_reponsive_img">
<p>In 2010 NYC TLC Service & Securiy Corp. developed a revolutionary new computer program which transformed the taxi industry. The program was My Taxi Ride Dispatch System and since its introduction, it has evolved to become the most advanced booking and dispatch system.</p>
<p><strong class="red_text">Miguel Pieter</strong> founded the company in 2010 following a successful career in the commercial sector where he gained many life-long friends amongst whom were owners of various taxi firms who presented him with the problem of simplifying their complex and disorganised businesses.  Mr. Pieter took the task in hand and before long, the first version of the My Taxi Ride Dispatch System was born.It was from these roots in New York City that the business of producing a unique concept in taxi dispatch systems was born and driven forward with a fire and passion that was only matched by the enthusiasm of those pioneering customers in recommending others to join the My Taxi Ride Dispatch System's family.</p>
<p>In the years that followed, Mr. Pieter led the company from strength to strength and developed an International network of My Taxi Ride users. The company became truly multi-national as did the software which, by now, could be used in almost any language although the basic operating system remained the same thus retaining the simplicity of a standardised system.By 2010 Mr. Pieter knew that a change in image and location were sorely needed to match not only the Company’s rate of growth but also it’s new International dimension.  So this year saw the establishment of not one, but two, new and prestigious Head Office buildings close to New York City to best serve all its customers.</p>
<p>The brand ‘My Taxi Ride Dispatch System’ has come to be recognised as the World leader in the field of Taxi Dispatch Systems.  It is also one of a few companies that can truly be called ‘The best ever’ by not only designing and  manufacturing its own system components but also writing the software so that both components are an exact match.</p>
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