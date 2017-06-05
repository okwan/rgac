<div class="row">
  <div class = "col">
    <?php if( has_post_thumbnail() ): ?>
      <div class ="standard-featured"><?php the_post_thumbnail('full',array('class' => 'img-fluid')); ?></div>
    <?php endif; ?>
  </div>
</div>
<br><br><br>
<div class = "row" style = "margin-left: 15%; margin-right: 15%;">
  <div class = "col">
    <a href="./stories"> - Back to stories</a>
    <br>
    <h3><?php echo the_title(); ?></h3>
    <br>
    <div>
      <?php the_content(); ?>
    </div>
  </div>
</div>
