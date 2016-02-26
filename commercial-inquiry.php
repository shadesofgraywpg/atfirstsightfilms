<?php
/*
Template Name: Commercial Inquiry
*/
?>

<?php get_header(); ?>  

       

          <!-- Conact Us -->
          <div id="contact" class="standardform">
          	<div class="container">
	          <h4>Commercial Inquiry</h4>
	          <p>These questions will help us gauge what you are looking for, helping us understand the project so we're able to put together a comprehensible quote. We appreciate the opportunity and look forward to your response.</p>


	          <hr>
	          
			  




<div class="control-group large formarea">




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






			  <div class="social">
			  <a href="http://twitter.com/atfirst_sight" target="_blank" class="icon-button icotwitter"><span class="fui-twitter"></span></a>
			  <a href="http://facebook.com/atfirstsightvid" target="_blank" class="icon-button icofacebook"><span class="fui-facebook"></span></a>
			  <a href="https://plus.google.com/b/108167093868479672754/108167093868479672754" target="_blank" class="icon-button icogoogle-plus"><span class="fui-googleplus"></span></a>
			  <a href="https://vimeo.com/atfirstsightfilms/" target="_blank" class="icon-button icovimeo"><span class="fui-vimeo"></span></a>
			  <a href="http://www.youtube.com/atfirstsightvid" target="_blank" class="icon-button icoyoutube"><span class="fui-youtube"></span></a>
			  <a href="http://linkedin.com/company/at-first-sight-films" target="_blank" class="icon-button icolinkedin"><span class="fui-linkedin"></span></a>
			  <a href="http://www.behance.net/stevegray" target="_blank" class="icon-button icobehance"><span class="fui-behance"></span></a>
			  </div>
			 





</div><!-- end control-group large -->





	          
	          
	          
          	</div><!-- end container -->


          	<div class="container">		          


          	</div><!-- end container -->
              	
          </div>





<script type="text/javascript" src="http://www.atfirstsightfilms.com/wp-content/plugins/formidable/pro/js/jquery.ui.datepicker.js"></script>


<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function($){
  
$.datepicker.setDefaults($.datepicker.regional['']);
$("#field_xpt6uy").datepicker($.extend($.datepicker.regional[''], {dateFormat:'mm/dd/yy',changeMonth:true,changeYear:true,yearRange:'2000:2020'}));
});

//]]>
</script>









<a href="javascript:void(0);" class="scrollup"><span class="caret"></span></i></a>



<?php get_footer(); ?>


		
			
  </body>
</html>