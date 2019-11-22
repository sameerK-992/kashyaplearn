<?php

/*

Template Name: Contact
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
<h1>Contact  <strong>Us</strong></h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heading_bg.png" class="heading-bg" alt="img">
</div>
<div class="margin_bottom_40"></div>

<div class="padding-top-5"></div>
<h3 class=" quction text-center">5 Questions that will change your dispatching experience!</h3>
<div class="line"></div>
<!----quctions start------>
<div class="margin_bottom_40"></div>
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">
<div class="5_quction">
<label for="input_26" id="label_26">
          Q1. What dispatch system are you currently using?<span style="color:red; margin-left:7px;">*</span>
        </label>
<div class="radio">
  <label><input type="radio" name="optradio" required>Radio</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" required >Manual</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio" required >Other</label>
</div>
<br>
<label>
         Q2. Number of your vehicles<span style="color:red; margin-left:7px;">*</span>
        </label>
        <div class="quc_2">
        <input type="text" name="filed" required style="width:200px; height:30px; border: 1px solid #AAAAAA;">
        </div><br>
</div></div>
<div class="col-lg-6">		
<label>
Q3. What challenges are you currently facing?<span style="color:red; margin-left:7px;">*</span>
<div class="form-input-contact">
          <div class="form-single-column"><span><input type="checkbox">
              <label> No vehicle tracking </label></span><span class="clearfix"></span><span><input type="checkbox" required>
              <label> Insecure payment </label></span><span class="clearfix"></span><span><input type="checkbox" required >
              <label> Too many charge backs </label></span><span class="clearfix"></span><span style="clear:left;"><input type="checkbox" required>
              <label> Too much paperwork </label></span><span class="clearfix"></span><span style="clear:left;" ><input type="checkbox" required>
              <label> Difficult to train drivers </label></span><span class="clearfix"></span><span style="clear:left;"><input type="checkbox" required>
              <label> Lack of billing and cashiering </label></span><span class="clearfix"></span><span style="clear:left;" ><input type="checkbox" required >
              <label> No integrated booking and dispatching </label></span><span class="clearfix"></span><span style="clear:left;" ><input type="checkbox" required >
              <label> The current system is missing features &amp; unscalable </label></span><span class="clearfix"></span><span style="clear:left;" class="form-checkbox-item"><input type="checkbox" required>
              <label > Unfair dispatch causing drivers competing for jobs </label></span><span class="clearfix"></span><span><input type="checkbox" value=""  required style="  float: left;  margin-right: 9px;  margin-top: 1px;">
              
              <textarea style=" width:250px; height:50px; border: 1px solid #AAAAAA;"></textarea>

              <br></span>
          </div>
        </div>

</label><br>
</div>
<div class="col-lg-6">
<label>
        Q4 . What other dispatching systems are under your evaluation if you are thinking to replace your current system?<span style="color:red; margin-left:7px;">*</span>
        </label>
        <div class="quc_3">
        <input type="text" name="filed" required style="width:200px; height:30px; border: 1px solid #AAAAAA;">
        </div><br>
        <label>
		</div>
		<div class="col-lg-6">
       Q5. What is the most important criteria for you when selecting a dispatch system?<span style="color:red; margin-left:7px;">*</span>
        </label>
        <div class="form-single-column"><span><input type="checkbox">
              <label>  Product features /flexibility / scalability </label></span><span class="clearfix"></span><span><input type="checkbox" required>
              <label>  Reviews from existing users </label></span><span class="clearfix"></span><span><input type="checkbox" required >
              <label> Price</label></span><span class="clearfix"></span><span style="clear:left;"><input type="checkbox" required>
              <label>  Ongoing customer support </label></span><span class="clearfix"></span><span style="clear:left;" ><input type="checkbox" required>
              <label>  Easy to learn and use </label></span><span class="clearfix"></span><span style="clear:left;"><input type="checkbox" required>
              <label>  Company's reputation </label></span><span class="clearfix"></span><span style="clear:left;" ><input type="checkbox" required >
              
              <textarea style=" width:250px; height:50px; border: 1px solid #AAAAAA;"></textarea>

              <br></span>
          </div>
		  </div>
</div>
</div>
</div>
 <!---- end---->
 <hr>
<!------contact form start------>
<div class="col-lg-12">
<div class="row">
<div class="contbg_image">
<div id="div-forms">
<form>
<div class="col-lg-6 form-group">
<label for="Name">Business Name</label>
<input type="name" class="form-control" id="Name" placeholder="Name">
</div>
<div class="col-lg-6 form-group">
<label for="Email1">Email</label>
<input type="email" class="form-control" id="Email1" placeholder="Email">
</div>  
<div class="col-lg-6 form-group">
<label for="Inputselect">Business Number</label>
<input type="text" class="form-control" id="Number" placeholder="Business Number">
</div> 
<div class="col-lg-6 form-group">
<label for="Inputselect">Contact Name</label>
<input type="text" class="form-control" id="Business" placeholder="Contact Name">
</div>
<div class="col-lg-12 form-group">
<label for=" Email1msg">Message</label>
<textarea class=" msg text-area"></textarea>
<!-- add text area here -->
</div>
<div class="col-lg-6">
<button type="submit" class="btn btn-info TR_info_btn readbtn">Apply</button>
</div>
</form>
</div>	
<!----<div class="col-md-5 col-sm-6 col-xs-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/online_image.jpg" alt="img" class="img-responsive"></div>
</div>
<!----contact closed--------->
</div>
</div>
</div>
</div>
</div>
<div class="margin_bottom_40"></div>
<div class=" map-container">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.230394033309!2d-73.93586998414217!3d40.84486517931765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f420504009b7%3A0xe82f7e3b98a1d92b!2s2326+Amsterdam+Ave%2C+New+York%2C+NY+10033%2C+USA!5e0!3m2!1sen!2sin!4v1493670176758" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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