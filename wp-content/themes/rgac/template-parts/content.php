<?php

/*
-- Standard Post Format
*/

 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row entry-content">
    <div class = "col-md-12">
      <div class ="postImage">
        <?php if( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(array(750,400), array('class' => 'img-responsive')); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class = "row">
    <div class = "col-md-12">
      <header class = "entry-header">

        <?php the_title( '<p class = "text-center" style = "padding-top:10px;">', '</p>'); ?>

      </header>
    </div>
  </div>
  <!-- <footer class="entry-footer">
    <?php echo rgac_posted_meta(); ?>
  </footer> -->
</article>
