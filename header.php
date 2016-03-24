<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
  <title><?php wp_title('|', true, 'right'); ?></title>

  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="We're a Canadian-based team of creative filmmakers who enjoy the process of learning and interacting with agencies as well as our clients to help tell authentic stories and connect with an audience." />
	<meta name="keywords" content="film, production, digital, hd, commercial, studio, creative, at first sight, at first sight films, advertising, marketing, brand story, video production, cinema agency, creative video, video and film, agency video, film production, stephen gray, chris radtke, mark hiebert, audio visual, digital production, steadicam" />
	
  <?php stag_meta_head(); ?>
  
  <!-- Prefetch DNS for external resources to speed up loading time -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
  <![endif]-->

    <meta name="viewport" content="width=auto, initial-scale=1.0, maximum-scale=1">

    <!-- Loading Bootstrap -->
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/awwwards.css" rel="stylesheet"

    <!-- Loading Flat UI -->
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/flat-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/main.css">


    <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/favicon.ico">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,400,700' rel='stylesheet' type='text/css'>
	
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/libs/modernizr-2.0.6.min.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/html5shiv.js"></script>
    <![endif]-->


<meta property="og:title" content="At First Sight Films" />
<meta property="og:site_name" content="<?php wp_title('|', true, 'right'); ?>" />
<meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/afs-feature.jpg" />

	
  <?php stag_head(); ?>
  <?php wp_head(); ?>
  
  <meta property="twitter:account_id" content="4503599627886606" />
  
</head>

<!-- BEGIN body -->
<body <?php body_class(); ?>>




    	<div class="navbar">
    	<div class="topcolor"></div>
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse-01">
                </button>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">AFS</a>
                <div class="nav-collapse collapse" id="nav-collapse-01">
                  <ul class="nav">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#work">Work</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
                    <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>
                  </ul> <!-- /nav -->

                  
                  <div class="demo-icons pull-right">
			          <a href="http://www.vimeo.com/atfirstsightfilms" target="_blank" class="fui-vimeo"></a>
			          <a href="http://www.twitter.com/atfirst_sight" target="_blank" class="fui-twitter"></a>
			          <a href="http://www.facebook.com/atfirstsightvid" target="_blank" class="fui-facebook"></a>
			          <a href="https://plus.google.com/u/0/b/108167093868479672754/108167093868479672754/" rel="publisher" target="_blank" class="fui-googleplus"></a>
          
          
			          <!--<a href="#" class="fui-linkedin"></a>
			          <a href="#" class="fui-googleplus"></a>
			          <a href="#" class="fui-youtube"></a>-->
                  </div>
          
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>



  <?php stag_body_start(); ?>

  <?php if ( stag_get_option('overlay_state') == 'on' ) get_template_part('helper', 'overlay'); ?>



  <?php stag_content_start(); ?>