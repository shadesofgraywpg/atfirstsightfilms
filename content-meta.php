<!-- BEGIN .entry-meta.entry-header -->
<aside class="grid-2 entry-meta entry-header">

    <?php
    $format = get_post_format();
    if(empty($format)) $format = 'standard';
    $link =  get_post_format_link($format);
    ?>
    
	
    <span class="published clearfix">

			<div class="avatarpic"><?php if (function_exists('get_avatar')) { echo get_avatar(get_the_author_email(), '93' ); }?></div>
			<p><?php the_author_meta('user_description'); ?></p>
			
			<!--<img src="images/cinema-mark.jpg" alt="cinema-mark" width="93" height="117" />-->
			<!--<?php the_author(); ?>-->

			<!-- 
			<br /><br />
			<?php the_time('l, F jS, Y') ?>
			 -->
			</p>

		<!--
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'stag'), get_the_title()); ?>"><i class="icon icon-date pull-left"></i> <?php the_time('M d, Y'); ?></a>
        -->
        
    </span>
    
    
    
    <div class="post-meta clearfix">

		
        <?php if(!empty($link)): ?>
        
        <span class="icon-wrap smallwrap posttype"><a href="<?php echo $link; ?>"><i class="icon icon-<?php echo $format; ?>"></i></a></span>
        <?php else: ?>
        <span class="icon-wrap smallwrap"><i class="icon icon-<?php echo $format; ?>"></i></span>
        <?php endif; ?>

        <span class="comment-number smallwrap">
        
        <!-- Place this tag where you want the +1 button to render. -->
		<div class="g-plusone" data-size="small" data-annotation="none" data-href="http://www.atfirstsightfilms.com"></div>
		
		<!-- Place this tag after the last +1 button tag. -->
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
        
        <!--<?php comments_popup_link(__('0', 'stag'), __('1', 'stag'), __('%', 'stag'), ''); ?>-->
        </span>
        <span class="likes-number">
        <!--
        <?php stag_likes(); ?>
        -->
        

		
		<div class="fb-like" data-href="http://facebook.com/atfirstsightvid" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false" data-font="verdana"></div>
		
        </span>
    </div>


        <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=192942594062239";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
    <!-- END .entry-meta.entry-header -->
</aside>