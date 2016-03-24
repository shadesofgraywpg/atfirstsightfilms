<?php
/*
Template Name: AFS Home
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>At First Sight Films</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We're a Canadian-based team of creative filmmakers who enjoy the process of learning and interacting with agencies as well as our clients to help tell authentic stories and connect with an audience." />
	<meta name="keywords" content="film, production, digital, hd, commercial, studio, creative, at first sight, at first sight films, advertising, marketing, brand story, video production, cinema agency, creative video, video and film, agency video, film production, stephen gray, chris radtke, audio visual, digital production, steadicam" />
	
	<?php stag_meta_head(); ?>
	
    <!-- Loading Bootstrap -->
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/awwwards.css" rel="stylesheet">
    
    <link href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/flat-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/css/main.css">
    <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,400,700' rel='stylesheet' type='text/css'>

    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/libs/modernizr-2.0.6.min.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    
    
    <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24823701-1']);
	  _gaq.push(['_setDomainName', 'atfirstsightfilms.com']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/html5shiv.js"></script>
    <![endif]-->


<meta property="og:title" content="At First Sight Films" />
<meta property="og:site_name" content="<?php wp_title('|', true, 'right'); ?>" />
<meta property="og:url" content="<?php echo get_permalink( $post->ID ); ?>" />
<meta property="og:description" content="<?php the_description(); ?>" />
<meta property="og:image" content="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/afs-feature.jpg" />

    
  <meta property="twitter:account_id" content="4503599627886606" />
  </head>
  <body data-spy="scroll" data-target=".navbar">


    	<div class="navbar">
    	<div class="topcolor"></div>
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse-01">
                </button>
                <a href="javascript:void(0);" class="brand">AFS</a>
                <div class="nav-collapse collapse" id="nav-collapse-01">
                  <ul class="nav">
                    <li><a href="#work" class="work">Work</a></li>
                    <li><a href="#about" class="about">About</a></li>
                    <li><a href="#contact" class="contact">Contact</a></li>
                    <li><a href="http://www.atfirstsightfilms.com/blog">Blog</a></li>
                  </ul> <!-- /nav -->

                  
                  <div class="demo-icons pull-right">
			          <a href="http://www.vimeo.com/atfirstsightfilms" target="_blank" class="fui-vimeo"></a>
			          <a href="http://www.twitter.com/atfirst_sight" target="_blank" class="fui-twitter"></a>
			          <a href="http://www.facebook.com/atfirstsightfilms" target="_blank" class="fui-facebook"></a>
			          <a href="https://plus.google.com/u/0/b/108167093868479672754/108167093868479672754/" rel="publisher" target="_blank" class="fui-googleplus"></a>
			          <!--<a href="#" class="fui-linkedin"></a>
			          <a href="#" class="fui-googleplus"></a>
			          <a href="#" class="fui-youtube"></a>-->
                  </div>
          
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
          

	<div id="intro">
	<div id="videoContainer">
		<div class="container">
			<h1>We're At First Sight Films.
			<a href="#contact">Let's tell a story.</a></h1>
		</div><!-- end container -->
		
		<div id="background_patternOverlay"></div>
		<video id="backgroundVideo" width="100%" height="100%;" onended="this.play()" autoplay loop>
			<source src="http://cineagency.s3.amazonaws.com/test.mp4" type="video/mp4">
			<source src="http://cineagency.s3.amazonaws.com/test.webm" type="video/webm">
			<source src="http://cineagency.s3.amazonaws.com/test.ogv" type="video/ogg">
			<img src="http://cineagency.s3.amazonaws.com/fallback.jpg" alt="At First Sight Films" width="100%" height="100%" alt="" /> <!-- Image fallback -->
		</video><!-- #backgroundVideo -->
	</div><!-- .background_container -->
	</div><!-- end intro -->

          <div class="container">          	
          	
         <div class="demo-row demo-illustrations clientlist"> 	
         <div class="demo-content-wide">
         
         <h4>We are an easy-going, creative &amp; strong storytelling team with years of experience, having worked with and been trusted by some of the most exceptional clients.</h4>
         
	          <div class="first">
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/kindermorgan-dark@2x.png" alt="Kinder Morgan"></a><p>Kinder Morgan</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/leisurevans-dark@2x.png" alt="Leisure Travel Vans"></a><p>Leisure Travel Vans</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/schneiderelectric-dark@2x.png" alt="Schneider Electric"></a><p>Schneider Electric</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/cic-dark@2x.png" alt="Composites Innovation Centre"></a><p>Composites Innovation Centre</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/webershandwick-dark@2x.png" alt="Weber Shandwick"></a><p>Weber Shandwick</p>
	          </div>
	          
	          
	          <div class="first">
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/streamenergy-dark@2x.png" alt="Stream Energy"></a><p>Stream Energy</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/steinbach-dark@2x.png" alt="Steinbach Chamber of Commerce"></a><p>City of Steinbach</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/google-dark@2x.png" alt="Google & Youtube"></a><p>Google & Youtube</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/caravus-dark@2x.png" alt="Caravus"></a><p>Caravus</p>
	          </div>
	          <div>
	          	<a href="javascript:void(0);">
	          	<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/clients/akanyc-dark@2x.png" alt="AKA New York City"></a><p>AKA New York City</p>
	          </div>
        </div>
        </div>
          </div><!-- end container -->


<div id="work" class="row demo-samples">

	<div class="container"> 
	      <h4 class="hello">Featured Work.</h4>
	          
		<div class="span12 demo-video">
			<div id="ourwork" class="carousel slide" data-interval="pause">

			  <!-- Carousel items -->
			  <div class="carousel-inner">
			    <div class="active item">
			    		<!-- FibreCITY -->
				    	<div class="videocontainer">
						<iframe src="http://player.vimeo.com/video/147815139?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="944" height="531" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
			    </div>
			    <div class="item">
			    		<!-- Steinbach -->
				    	<div class="videocontainer">
						<iframe src="http://player.vimeo.com/video/76486398?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="944" height="531" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
			    </div>
			    <div class="item">
			    		<!-- 50 Years -->
				    	<div class="videocontainer">
						<iframe src="http://player.vimeo.com/video/150440184?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="944" height="531" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
			    </div>
			    <div class="item">
			    		<!-- Alaska -->
				    	<div class="videocontainer">
						<iframe src="http://player.vimeo.com/video/127085400?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="944" height="531" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
			    </div>
			    <div class="item">
						<!-- Lennard Taylor -->
				    	<div class="videocontainer">
						<iframe src="http://player.vimeo.com/video/42015418?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="944" height="531" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
			    </div>
			  </div>

			<div class="pagination clearfix">
			  <ol class="carousel-indicators clearfix">
			    <li data-target="#ourwork" data-slide-to="0" class="active">FibreCITY</li>
			    <li data-target="#ourwork" data-slide-to="1">Steinbach</li>
			    <li data-target="#ourwork" data-slide-to="2">50 Years</li>
			    <li data-target="#ourwork" data-slide-to="3">Alaska</li>
			    <li data-target="#ourwork" data-slide-to="4" class="last">Lennard Taylor</li>
			  </ol>
			</div>

			</div>
		</div>

	</div><!-- end container -->        
</div>



	<div class="container">       
     <div id="about" class="afsprofiles">	
	   <h4 class="hello">Meet The Team.</h4>
	   <!-- Get to know the team behind AFS -->
	   <div class="row demo-tiles">
        
        
        <div class="span6">
          <div class="tile rotate">
            <div class="profilepic">
            	<img class="tile-image big-illustration" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/about-stephengray.jpg" alt="Stephen Gray, Filmmaker">
            </div>
            <h3 class="tile-title">Stephen Gray</h3>
            <!-- Stephen Gray Twitter -->
            <a href="https://twitter.com/atfirst_sight" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @atfirst_sight</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <p><span>Partner, DP, Editor, Colorist, Father, Drummer</span>
            Having a background in design, web development and music, Stephen came to AFS with experience having worked with companies like AOL, Target, and Pepsi from an international agency. These strengths have bled over into the aesthetic world of film. Driven by his passion for technology, art and music, his innovation and creativity leave a distinct print on all his work.</p>
            <div class="fb-like" data-href="http://facebook.com/atfirstsightfilms" data-width="150" data-layout="button_count" data-show-faces="true" data-send="false" style="margin-right: 15px;"></div>
            <!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="medium" data-href="http://www.atfirstsightfilms.com/"></div>
			
			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/platform.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
          </div>
        </div>


        <div class="span6">
          <div class="tile rotate">
            <div class="profilepic">
            	<img class="tile-image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/about-chrisradtke.jpg" alt="Chris Radtke">
            </div>
            <h3 class="tile-title">Chris Radtke</h3>
            <!-- Chris Radtke Twitter -->
            <a href="https://twitter.com/atfirst_sight" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @atfirst_sight</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

            <p><span>Partner, Director, Sound, Pseudo Vegetarian</span>
            Born and raised in Winnipeg, Chris has had extensive experience in the world of filmmaking; travelled the world a few times over with several shorts and a full length feature under his belt. One major strength is with sound and sound mastering. While remaining artistic in his filmmaking approach, Chris defies all odds and breaks clichés by holding a passion for both sports &amp; tech.</p>
            <div class="fb-like" data-href="http://facebook.com/atfirstsightfilms" data-width="150" data-layout="button_count" data-show-faces="true" data-send="false" style="margin-right: 15px;"></div>
            <!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="medium" data-href="http://www.atfirstsightfilms.com/"></div>
			
			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/platform.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
          </div>
        </div>
      </div>
      
      <!-- What it's all about -->
      <h4>We're focused on both quality &amp; the overall experience. Big or small, our process follows the same steps.</h4>
      	 <div class="iconbar iconbar-horizontal iconbar-warning clearfix">
            <ul>
              <li><a href="javascript:void(0);" class="fui-mail"></a>Enquirey</li>
              <li><a href="javascript:void(0);" class="fui-search"></a>Discovery</li>
              <li><a href="javascript:void(0);" class="fui-calendar"></a>Logistics</li>
              <li><a href="javascript:void(0);" class="fui-video"></a>Production</li>
              <li><a href="javascript:void(0);" class="fui-windows"><!--<span class="iconbar-unread">1</span>--></a>Finishing</li>
            </ul>
          </div>
     </div><!-- end about -->
          </div><!-- end container -->

<div class="processtxt" id="discover">
		  <div class="container"> 
            <div class="row-fluid show-grid">
              <div class="span4">
			  	<div id="processCarousel" class="carousel slide carousel-indicators">
			  	  <!-- Crousel Pagination -->
			  	  <div class="pagination clearfix">
			  	  		<ol class="carousel-indicators">
		                  <li data-target="#processCarousel" data-slide-to="0" class="active">1</li>
		                  <li data-target="#processCarousel" data-slide-to="1" class="">2</li>
		                  <li data-target="#processCarousel" data-slide-to="2" class="">3</li>
		                  <li data-target="#processCarousel" data-slide-to="3" class="">4</li>
		                  <li data-target="#processCarousel" data-slide-to="4" class="">5</li>
		                  <li data-target="#processCarousel" data-slide-to="5" class="">6</li>
		                  <li data-target="#processCarousel" data-slide-to="6" class="">7</li>
		                  <li data-target="#processCarousel" data-slide-to="7" class="">8</li>
		                  <li data-target="#processCarousel" data-slide-to="8" class="">9</li>
		                  <li data-target="#processCarousel" data-slide-to="9" class="">10</li>
		                  <li data-target="#processCarousel" data-slide-to="10" class="">11</li>
		                  <li data-target="#processCarousel" data-slide-to="11" class="">12</li>
		                  <li data-target="#processCarousel" data-slide-to="12" class="">13</li>
		                  <li data-target="#processCarousel" data-slide-to="13" class="">14</li>
		                </ol>
		          </div> 
				  <!-- Carousel items -->
				  <div class="carousel-inner random">
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img01.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img02.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img03.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img04.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img05.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img06.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img07.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img08.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img09.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img10.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img11.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img12.jpg" alt="At First Sight Films Behind The Scenes"></div>
				    <div class="item"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/process-img14.jpg" alt="At First Sight Films Behind The Scenes"></div>
				  </div>
				</div>

              </div>
              
              <div class="span8">
              	
              	<div class="row-fluid show-grid">
              		<div class="span6">
              		<h2>So, Why Work With AFS?</h2>
              		</div>
              		<div class="span6 line"></div>
              	</div>
              
              <div class="descript">
              <h3><i>We're a personable, meticulously organized, and leanly operated team from start to finish. What sets us apart is our unique story-telling ability, which is backed by years of experience in both commercial film production &amp; wedding events. Our goal is to tell a captivating story. We want you to feel a connection with a film on a basic and emotional level. During both production &amp; post production, we use some of the best tools available which helps further shape a truly cinematic experience.</i></h3>
              </div>

               <ul class="random">
              	<li><p class="btnsqare btn-1 btn-1b">RED Digital Cinema</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">4K</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">1080P</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Digital Delivery</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Freefly Movi</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Canon L Series</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Manfrotto</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Lowel</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Apple</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">LaCie</p></li>
              	<li><p class="btnsqare btn-1 btn-1b">Sony</p></li>
              </ul>              

              </div>
              
            </div><!-- end row-fluid -->
          </div><!-- end container -->
</div><!-- end processtxt --> 


<!-- What's happening in the field -->
<div class="instagram_feed"><ul></ul></div>


          <!-- Conact Us -->
          <div id="contact">
          	<div class="container firstcontact">
	          <h4>Contact Us</h4>
	          <p>We would love to hear from you and together find a way to collaborate and bring your project to life. As you can imagine, we are frequently out of the office filming so please allow a day for a reply. We look forward to continuing the conversation. For wedding requests, visit <a href="http://www.paperbackfilms.ca" target="_blank" class="pbf">Paperback Films</a>.</p>
	          <hr>
<div class="control-group large formarea newslettersignup">
			  <div class="social">
			  <a href="http://twitter.com/atfirst_sight" target="_blank" class="icon-button icotwitter"><span class="fui-twitter"></span></a>
			  <a href="http://facebook.com/atfirstsightfilms" target="_blank" class="icon-button icofacebook"><span class="fui-facebook"></span></a>
			  <a href="https://plus.google.com/b/108167093868479672754/108167093868479672754" target="_blank" class="icon-button icogoogle-plus"><span class="fui-googleplus"></span></a>
			  <a href="https://vimeo.com/atfirstsightfilms/" target="_blank" class="icon-button icovimeo"><span class="fui-vimeo"></span></a>
			  <a href="http://www.youtube.com/atfirstsightvid" target="_blank" class="icon-button icoyoutube"><span class="fui-youtube"></span></a>
			  <a href="http://linkedin.com/company/at-first-sight-films" target="_blank" class="icon-button icolinkedin"><span class="fui-linkedin"></span></a>
			  <a href="http://www.behance.net/stevegray" target="_blank" class="icon-button icobehance"><span class="fui-behance"></span></a>
			  </div>
	<!-- // Chuck Norris doesn't register an event, the event registers a Chuck Norris // -->
	
	<div style="text-align: left;">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				
		<div class="hide">
		<?php comments_template(); ?>
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
		</div>

	</div>

</div><!-- end control-group large -->


<!--
<div class="control-group large formarea newslettersignup">
<div id="mc_embed_signup">
<form action="http://atfirstsightfilms.us7.list-manage.com/subscribe/post?u=d46ae7f1a1898e1070764e19c&amp;id=1b10e135cf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="mc-field-group">
	<label for="mce-EMAIL">Newsletter (Email Address)<span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
</div> end control-group large newslettersignup -->


        
          	</div><!-- end container -->   	
          </div>


<!-- Going up anyone? -->
<a href="javascript:void(0);" class="scrollup"><span class="caret"></span></i></a>


<div id="footer">
	<div class="bottom-menu bottom-menu-large bottom-menu-inverse">
        <div class="container">
          <div class="row">
          
            <div class="span3 brand">
              <a href="#" class="fui-flat"></a>
            </div>

            <div class="span3">
              <h5 class="title">Categories</h5>
              <ul class="bottom-links">
                <li><?php wp_list_categories('title_li='); ?></li>
              </ul>
            </div>
            
            <div class="span3">
              <h5 class="title">Follow us to keep up with the latest</h5>
              <ul class="bottom-links">
                <li><a href="https://www.facebook.com/atfirstsightfilms" target="_blank">Facebook</a></li>
                <li><a href="http://twitter.com/atfirst_sight" target="_blank">Twitter</a></li>                
                <li><a href="http://instagram.com/atfirstsight" target="_blank">Instagram</a></li>
                <li><a href="http://linkedin.com/company/at-first-sight-films" target="_blank">LinkedIn</a></li> 
              </ul>
            </div>

            <div class="span3">
              <h5 class="title">&nbsp;</h5>
              <ul class="bottom-links">
                <li><a href="https://plus.google.com/b/108167093868479672754/108167093868479672754/" target="_blank">Google Plus</a></li>
                <li><a href="https://vimeo.com/atfirstsightfilms/" target="_blank">Vimeo</a></li>
                <li><a href="http://youtube.com/atfirstsightvid" target="_blank">Youtube</a></li>
                <li><a href="https://vine.co/at.first.sight" target="_blank">Vine <span class="label label-small label-primary">New</span></a></li>
              </ul>
            </div>

            
          </div>
        </div>
      </div>
</div><!-- end footer -->

    <!-- Load JS here for greater good =============================-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
    
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/bootstrap-select.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/bootstrap-switch.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/flatui-checkbox.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/flatui-radio.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.tagsinput.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.placeholder.js"></script>
    <script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.stacktable.js"></script>
    <!--<script src="js/application.js"></script>-->

	<script defer src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/plugins.js"></script>
	

	<script type="text/javascript" src="http://atfirstsightfilms.com/js/jquery.backstretch.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.processtxt').backstretch('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/home-triangles.jpg', { speed: 1000 });
			$('.newslettersignup').backstretch('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/images/home-triangles.jpg', { speed: 1000 });
			});
	</script>


	<!-- STICKY NAV PLUGIN -->
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.sticky.js"></script>
		
	<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/main.js"></script>
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.transit.min.js" type="text/javascript"></script>
	
		
		<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.fitvids.js"></script>
	      
	    <script type="text/javascript">
			$(".videocontainer").fitVids();
		</script>

		<!--
		<script src="js/mediaelement-and-player.js"></script>-->
		
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=192942594062239";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
			
		<!--
		<div id="awwwards" class="right white">
			<a href="http://www.awwwards.com/best-websites/at-first-sight-films" target="_blank">best websites of the world</a>
		</div>
		-->

<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l48w8');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l48w8&p_id=Twitter" />
</noscript>

  </body>
</html>