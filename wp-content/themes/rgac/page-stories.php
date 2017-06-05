<?php
/* Template Name: Stories Page */
// Advanced Custom Fields

get_header();
?>

<style>
#stories {
  margin-top: 5%;
  margin-left: 20%;
  margin-right: 20%;
}

.row.no-gutter {
  margin-left: 0;
  margin-right: 0;
}

.row.no-gutter [class*='col-']:not(:first-child),
.row.no-gutter [class*='col-']:not(:last-child) {
  padding-right: 0;
  padding-left: 0;
}

</style>


<!-- Page Content -->
<div class="container-fluid wrapper" id = "stories">


      <?php query_posts('post_type=post') ?>

      <?php

        if( have_posts() ):

          $i = 0;

          while( have_posts() ): the_post();

          if($i % 3 == 0) { ?>
            <div class = "row no-gutter">

          <?php
            }
          ?>
          <div class = "col-md-4 col-sm-6">
            <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
          </div>

          <?php $i++;
          if ($i != 0 && $i % 3 == 0) { ?>
            </div>
            <br><br>
          <?php
          }
          ?>

          <?php
          endwhile;
        endif;
        wp_reset_query();
       ?>
</div>
<div class="push"></div>

<?php get_footer(); ?>
