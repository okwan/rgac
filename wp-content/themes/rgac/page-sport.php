<?php
/* Template Name: Sport Page */
// Advanced Custom Fields
$awana_first_image        = get_field('awana_first_image');
$awana_first_title        = get_field('awana_first_title');
$awana_first_title_tag    = get_field('awana_first_title_tag');
$awana_about_description  = get_field('awana_about_description');

$cubbies_about_desc       = get_field('cubbies_about_desc');

get_header();
?>



<!-- Page Content -->
<div class="container-fluid">
  <div class ="row center-rgac full-img star">
    <div class = "col-lg-7 col-md-7">

    </div>
  </div>

  <div class = "row star">
    <div class = "col-lg-12 col-md-12 full-img">
        <img class = "img-responsive" src="<?php echo $awana_first_image['url']; ?>" alt="<?php echo $awana_first_image['alt']; ?>">
    </div>
  </div>

  <div class = "row center-rgac star row-eq-height">
    <div class = "col-lg-6 col-md-6 col-sm-12 vcenter text-center">
      <h3 style = "margin-top: 20%;">Friendly &amp; Competitive</h3>
      <h3>Badminton. Volleyball. Basketball.</h3>
    </div>
    <div class = "col-lg-4 col-md-4 col-sm-12">
      <p>Mission</p><br>
      <p><?php echo $awana_about_description ?></p>
      <br><br><p>What you need to know</p><br>
      <p>Time start: <b>7:30 p.m.</b></p>
      <p>Time end: <b>9:30 p.m.</b></p>
      <p>Location: <b>11371 No. 3 Road, Richmond. BC V7A 1X3 @ the Gym</b></p>
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-12 col-md-12 full-img">
      <img class = "img-responsive" src="https://images.unsplash.com/photo-1473663065522-33361623fa27?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=5d79a5639ab39cd37665d3863f5bd7ac">
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="https://images.unsplash.com/photo-1471018238625-87ca40f13b31">
    </div>
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="https://images.unsplash.com/photo-1471018238625-87ca40f13b31">
    </div>
  </div>

  <div class = "row center-rgac star row-eq-height">
    <div class = "col-lg-6 col-md-6 vcenter text-center">
      <ul class = "awana-list" style = "margin-top: 15%;">
        <li class = "active"><a href="#cubbies" data-toggle="tab">Cubbies</a></li>
        <li><a href="#sparkies" data-toggle="tab">Sparkies</a></li>
        <li><a href="#tnt" data-toggle="tab">T&amp;T</a></li>
        <li><a href="#trek" data-toggle="tab">Trek</a></li>
      </ul>
    </div>

    <div class = "col-lg-4 col-md-4 tab-content">
      <div class = "tab-pane fade in active" id ="cubbies">
        <p>Cubbies</p><br>
        <p><?php echo $awana_about_description ?></p>
        <br><br><p>Rundown of the night</p><br>
        <ul>
          <li>Opening ceremony</li>
          <li>Puppet show</li>
          <li>Craft time</li>
          <li>Game time / Singing time</li>
          <li>Story time</li>
          <li>Snack time</li>
          <li>Handbook time</li>
          <li>Going home time</li>
        </ul>
      </div>
      <div class = "tab-pane fade in" id ="sparkies">
        <p>Sparkies</p><br>
        <p><?php echo $awana_about_description ?></p>
        <br><br><p>Rundown of the night</p><br>
        <ul>
          <li>Opening ceremony</li>
          <li>Puppet show</li>
          <li>Craft time</li>
          <li>Game time / Singing time</li>
          <li>Story time</li>
          <li>Snack time</li>
          <li>Handbook time</li>
          <li>Going home time</li>
        </ul>
      </div>
      <div class = "tab-pane fade in" id ="tnt">
        <p>Truth n Training</p><br>
        <p><?php echo $awana_about_description ?></p>
        <br><br><p>Rundown of the night</p><br>
        <ul>
          <li>Opening ceremony</li>
          <li>Puppet show</li>
          <li>Craft time</li>
          <li>Game time / Singing time</li>
          <li>Story time</li>
          <li>Snack time</li>
          <li>Handbook time</li>
          <li>Going home time</li>
        </ul>
      </div>
      <div class = "tab-pane fade in" id ="trek">
        <p>Trek</p><br>
        <p><?php echo $awana_about_description ?></p>
        <br><br><p>Rundown of the night</p><br>
        <ul>
          <li>Opening ceremony</li>
          <li>Puppet show</li>
          <li>Craft time</li>
          <li>Game time / Singing time</li>
          <li>Story time</li>
          <li>Snack time</li>
          <li>Handbook time</li>
          <li>Going home time</li>
        </ul>
      </div>
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star tab-pane fade in" id ="cubbies">
    <div class = "col-lg-12 col-md-12 full-img">
      <img class = "img-responsive" src="https://images.unsplash.com/photo-1473663065522-33361623fa27?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&s=5d79a5639ab39cd37665d3863f5bd7ac">
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="https://images.unsplash.com/photo-1471018238625-87ca40f13b31">
    </div>
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="https://images.unsplash.com/photo-1471018238625-87ca40f13b31">
    </div>
  </div>

  <div class = "row star">
    <div class = "col-lg-12 col-md-12 full-img">
        <!-- if image exists -->
        <?php if( !empty($awana_first_image) ) : ?>
          <img class = "img-responsive" src="<?php echo $awana_first_image['url']; ?>" alt="<?php echo $awana_first_image['alt']; ?>">
        <?php endif; ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
