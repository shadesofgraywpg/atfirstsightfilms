<div class="hentry-inner">

    <?php

        if(get_post_meta(get_the_ID(), '_stag_gallery_images', true) != '' ){
            $images = get_post_meta(get_the_ID(), '_stag_gallery_images', true);
            $images = explode(',', $images);

            echo '<div id="gallery-slider-'.get_the_ID().'" data-role="slider" class="flexslider"><ul class="slides">';
            foreach($images as $img){
                echo '<li><img src="'.$img.'" alt=""></li>';
            }
            echo '</ul></div>';
        }
    ?>

  <div class="entry-wrapper grids">

    <?php get_template_part('content', 'meta'); ?>

    <div class="entry-content grid-10 clearfix">

      <?php if( is_single() ) { ?>

        <h1 class="entry-title"><?php the_title(); ?></h1>

      <?php } else { ?>

        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'stag'), get_the_title()); ?>"> <?php the_title(); ?></a></h2>
      <?php } ?>

      <?php

        if(!is_singular()){
          if(get_the_excerpt() != '') echo "<p>".strip_shortcodes(get_the_excerpt())."</p>";
        }else{
          the_content(__('Continue Reading', 'stag'));
          wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'stag').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
        }

      ?>
    </div>
    <span class="bottom-accent"></span>
  </div>
</div>