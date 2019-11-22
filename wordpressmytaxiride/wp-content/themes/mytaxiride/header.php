<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>::MyTaxiRide::</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css"/>
<!--slider css-->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/plugin.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css">
<!---font famliy-->
<link href="https://fonts.googleapis.com/css?family=Exo:300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- top header -->
<header class="TR_top_header">
<div class="container">
<div class="row">
<div class="pull-left">
<div class="TR_logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MTRdispatchWhite.png" alt="logo"></a></div>
</div>
<div class="pull-right">
<div class="row TR_right_side">
<div class="col-md-4 TR_header_call padding_top_20">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heeadphone-icon.png" alt="icon" class="TR_headphone_icon">
<span class="mobile_number white_text">718-666-9848</span><br>
<span class="mobile_number white_text">212-920-7641  </span>
</div>
<div class="col-md-4 TR_Current_job hidden-sm hidden-xs">
<h4>Current Dispatched Jobs</h4>
<input type="text" value="11,557,045" class="TR_current_jobtext">
</div>
<div class="col-md-4 TR-select_box padding_top_30 hidden-sm hidden-xs">
<?php echo do_shortcode('[google-translator]'); ?>

</div>
</div>
</div>
</div>
</div>
</header>
<!---top header end--->

<!----main nav start-->
<nav class="navbar navbar-default navbar-static-top TR_main_nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/my-taxi-ride/">Home</a></li>
             <li class="dropdown">
              <a href="<?php echo home_url();?>/aboutus/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company</a>
              <ul class="dropdown-menu TR_main_nav_dropdown">
                <li><a href="<?php echo home_url();?>/overview_mytaxiride/">Overview of MTR</a></li>
                <li><a href="<?php echo home_url();?>/our_team/">Our Team</a></li>
                <li><a href="<?php echo home_url();?>/our_history/">History</a></li>
                <li><a href="<?php echo home_url();?>/international/">International</a></li>
                <li><a href="<?php echo home_url();?>/founder/">The Founder</a></li>
                <li><a href="<?php echo home_url();?>/careers/">Careers</a></li>
                <li><a href="<?php echo home_url();?>/privacypolicy/">Privacy Policy</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dispatch Software</a>
              <ul class="dropdown-menu TR_main_nav_dropdown">
                <li><a href="<?php echo home_url();?>/mtr-dispatch-system/">MTR Dispatch System</a></li>
               </ul>
            </li>
            <li><a href="<?php echo home_url();?>/driver/">Driver's App</a></li>
            <li><a href="<?php echo home_url();?>/passenger/">Passenger's App</a></li>
            <li class="dropdown">
              <a href="<?php echo home_url();?>/support/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support</a>
              <ul class="dropdown-menu TR_main_nav_dropdown">
                <li><a href="<?php echo home_url();?>/technical_support/">24/7 Technical Support</a></li>
        <li><a href="<?php echo home_url();?>/training/">Online Training</a></li>
        <li><a href="<?php echo home_url();?>/customer_care/">Customer Care</a></li>
        <li><a href="<?php echo home_url();?>/customer-advice-services/">Customer Advice Services</a></li>
        <li><a href="<?php echo home_url();?>/user-manual/">User Manual</a></li>
       <li><a href="<?php echo home_url();?>/faqs-for-startups/">FAQs For Startups</a></li> 
               </ul>
            </li>
            <li><a href="<?php echo home_url();?>/customer_reviews/">Customer reviews</a></li>
            <li><a href="<?php echo home_url();?>/contactus/">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!----main nav end-->
