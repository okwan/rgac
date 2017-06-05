<?php
/* Template Name: Landing Page */
// Advanced Custom Fields
get_header();
?>

<div class ="container">
  <div class="menu-wrap">
    <nav class="menu">
      <div class="icon-list">
        <a href="#"><i class="fa fa-fw fa-star-o"></i><span>Favorites</span></a>
        <a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Alerts</span></a>
        <a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Messages</span></a>
        <a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Comments</span></a>
        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Analytics</span></a>
        <a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Reading List</span></a>
      </div>
    </nav>
  </div>
  <button class="menu-button" id="open-button"></button>
</div>

<?php wp_footer(); ?>
