<?php
get_header();
?>

<div class = "row">

  <?php

    if( have_posts() ):

      while( have_posts() ): the_post();

        get_template_part( 'template-parts/single', get_post_format() );

        the_posts_navigation();
      endwhile;

    endif;

   ?>

</div>

<?php get_footer(); ?>
