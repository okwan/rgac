<?php
/* Template Name: Events Page */
// Advanced Custom Fields
get_header();
?>
<style>
#rgac-accordion {
  margin-top: 5%;
  margin-left: 6%;
  margin-right: 6%;
}

.panel-heading {
  border-radius: 0px;
}

.panel-default {
  border-bottom: 1px;
}

.panel-group .panel {
  border-radius: 0px;
}

.panel {
  border: none;
  border-bottom: 1px solid;
  box-shadow: none;
  -webkit-box-shadow: none;
}

.panel-default {
  border-bottom: 1px solid;
}

.panel-heading {
  font-family: 'EB Garamond', serif;
  font-size: 1.5em;
}

.panel-body {
  margin-top: 20px;
  margin-bottom: 20px;
}

.panel-heading .chevron:after {
    content: "+";
}
.panel-heading .chevron.collapsed:after {
    content: "-";
}

@media screen and (max-width: 1000px) {
  #descDiv {
    padding-top: 15px;
  }
}

@media screen and (max-width: 380px) {
  #rgac-accordion {
    padding-top: 25px;
  }
}

.panel a {
  color: black;
}

.panel a:hover {
  text-decoration: none;
}
</style>
<script>
$(document).ready(function() {
  $("#collapse-1").addCLass("show");
});
</script>
<div class = "wrapper" id = "rgac-accordion">
    <div class="row">
        <div class="col-md-12">
            <?php
             $args = array(
                 'post_type' => 'events',
                 'orderby' => 'date',
                 'order' => 'DESC',
             );
            ?>
            <?php $i = 1; ?>
            <?php $query = new WP_Query( $args ); ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php
                $date             = get_field('date');
                $dayofweek        = get_field('dayofweek');
                $eventTime        = get_field('eventtime');
            ?>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>">
                    <div class="panel-heading"><i class = "chevron fa fa-fw pull-right"></i>
                        <div class = "row">
                          <div class ="col-md-2 col-sm-2">
                            <?php echo $date; ?>
                          </div>
                          <div class ="col-md-2 col-sm-2">
                            <?php echo $dayofweek; ?>
                          </div>
                          <div class ="col-md-2 col-sm-2">
                            <?php echo $eventTime; ?>
                          </div>
                          <div class ="col-md-5 col-sm-5">
                            <?php the_title(); ?>
                          </div>
                        </div>
                    </div>
                    </a>
                    <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse <?php if($i == 1) { echo "show"; } ?>">
                        <div class="panel-body">
                          <div class = "row">
                            <div class = "col-md-6">
                              <?php the_post_thumbnail('medium_large', array('class' => 'attachment-post-thumbnail wp-post-image img-responsive'));?>
                            </div>
                            <div id = "descDiv" class = "col-md-6">
                              <div class = "row">
                                <div class = "col-md-12">
                                  <?php the_content(); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<div class="push"></div>


<?php get_footer(); ?>
