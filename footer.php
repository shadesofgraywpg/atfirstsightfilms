<?php stag_content_end(); ?>

    <?php stag_footer_before(); ?>

    <?php if(is_sidebar_active('footer')): ?>
    <div class="footer-outer">
      <!-- BEGIN .footer -->
      <footer class="footer" role="contentinfo">
        <?php stag_footer_start(); ?>

        <div class="grids">
          <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>

        <?php stag_footer_end(); ?>
        <!-- END .footer -->
      </footer>
    </div>
    <?php endif; ?>

    <div class="footer-copyright-wrap">
		
		<!--
        <div class="instagram_feed feedfooter"><ul></ul></div>
        -->
     
    <!--
      <footer class="footer-copyright">
        <?php echo stripcslashes(stag_get_option('general_footer_text')); ?>
      </footer>
    -->
    </div>

    <?php stag_footer_after(); ?>

  <?php stag_body_end(); ?>
  <?php wp_footer(); ?>



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
                <li><a href="https://www.facebook.com/atfirstsightvid" target="_blank">Facebook</a></li>
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
                <li><a href="https://vine.co/v/b0D0uw6mehi" target="_blank">Vine <span class="label label-small label-primary">New</span></a></li>
              </ul>
            </div>

            
          </div>
        </div>
      </div>
</div><!-- end footer -->



    <!-- Load JS here for greater good =============================-->

    
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

	<!-- STICKY NAV PLUGIN -->
	<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/AtFirstSightFilms/js/main.js"></script>
	      
	    <script type="text/javascript">
			$(".videocontainer").fitVids();
		</script>

		<!--
		<div id="awwwards" class="right white">
			<a href="http://www.awwwards.com/best-websites/at-first-sight-films" target="_blank">best websites of the world</a>
		</div>-->

<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l48w8');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l48w8&p_id=Twitter" />
</noscript>
	
  </body>
</html>