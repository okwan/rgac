<?php
/* Template Name: Awana Page */
// Advanced Custom Fields
$awana_first_image        = get_field('awana_first_image');
$awana_second_image       = get_field('awana_second_image');
$awana_third_image        = get_field('awana_third_image');

$awana_first_title        = get_field('awana_first_title');
$awana_first_title_tag    = get_field('awana_first_title_tag');
$awana_about_description  = get_field('awana_about_description');

$cubbies_about_desc       = get_field('cubbies_about_desc');

get_header();
?>

<style>
a {
   outline: 0 !important;
}

#awana-w {
  margin-top: 5%;
  margin-left: 15%;
  margin-right: 15%;
}

.height-450 {
  max-width: 100%;
  max-height: 550px;
}

.height-350 {
  max-width: 100%;
  max-height: 350px;
}

@media screen and (min-width: 1650px) {
  .weird {
    margin-right: -3%;
  }
}

.row.pad-5 {
  margin-right:5px;
  margin-left:5px;
}
.row.pad-5 > [class*='col-'] {
  padding-right:5px;
  padding-left:5px;
}

tr td:nth-child(2) {
  font-weight: bold;
}

.awana-list li {
  outline: none;
}
.awana-list li a {
  color: black;
  cursor: pointer;
}

.awana-list li.active {
  text-decoration: none;
}
</style>

<!-- Page Content -->
<div class="container-fluid" id="awana-w">
  <div class = "row star pad-5">
    <div class = "col">
      <?php
      if( !empty($awana_first_image) ): ?>
      <img class = "height-450" src = "<?php echo $awana_first_image['url']; ?>" />
      <?php endif; ?>
    </div>
    <div class = "col">
      <?php
      if( !empty($awana_second_image) ): ?>
      <img class = "height-450" src = "<?php echo $awana_second_image['url']; ?>" />
      <?php endif; ?>
    </div>
    <div class = "col">
      <?php
      if( !empty($awana_third_image) ): ?>
      <img class = "height-450" src = "<?php echo $awana_third_image['url']; ?>" />
      <?php endif; ?>
    </div>
  </div>

  <div class = "row center-rgac star align-items-center">
    <div class = "col-lg-6 col-sm col-md vcenter text-center">
      <h3>Reach Kids, Equip Leaders</h3>
      <h3>Change the World.</h3>
    </div>
    <div class = "col-lg-6 col-sm col-md">
      <p>Mission</p><br>
      <p><?php echo $awana_about_description ?></p>
      <br><br><p>What you need to know</p><br>
      <table class="table">
        <tbody>
          <tr>
            <td>Time start:</td>
            <td>7:30 p.m.</td>
          </tr>
          <tr>
            <td>Time end:</td>
            <td>9:15 p.m.</td>
          </tr>
          <tr>
            <td>Location:</td>
            <td>11371 No. 3 Road, Richmond. BC V7A 1X3</td>
          </tr>
          <tr>
            <td>Cubbie:</td>
            <td>3 Years Old - Kindergarten</td>
          </tr>
          <tr>
            <td>Sparks:</td>
            <td>Kindergarten - Grade 2</td>
          </tr>
          <tr>
            <td>Truth and Training:</td>
            <td>Grade 3 - Grade 6</td>
          </tr>
          <tr>
            <td>Trek:</td>
            <td>Grade 7 - Grade 10</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-12 col-md-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/IMG_9761-2-e1496393558810.jpg">
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-xs-6 full-img">
      <img class = "height-350" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/02/IMG_9847-2-e1496393647433.jpg">
    </div>
    <div class = "col-lg-6 col-md-6 col-xs-6 full-img">
      <img class = "height-350" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/02/IMG_9869-2-e1496393630122.jpg">
    </div>
  </div>

  <div class = "row center-rgac star align-items-center">
    <div class = "col-lg-6 col-md-6 vcenter text-center">
      <ul class = "awana-list" role="tablist">
        <li class = "nav-item active"><a class = "nav-link" href="#cubbies" data-toggle="tab" role="tab">Cubbies</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#sparkies" data-toggle="tab" role="tab">Sparkies</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#tnt" data-toggle="tab" role="tab">T&amp;T</a></li>
        <li class = "nav-item"><a class = "nav-link" href="#trek" data-toggle="tab" role="tab">Trek</a></li>
      </ul>
    </div>

    <div class = "col-lg-4 col-md-4 tab-content">
      <div role ="tabpanel" class = "tab-pane fade in active show" id ="cubbies">
        <p>Cubbies</p><br>
        <p>We're happy all day long! Cubbies forms an early spiritual foundation of the pre-schoolers through engaging stories, funny puppet shows and catchy songs!</p>
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
      <div role ="tabpanel" class = "tab-pane fade" id ="sparkies">
        <p>Sparkies</p><br>
        <p>We're Sparks to light the world! Sparks inspires the delicate mind of early elementary-age children to learn more about God through playing games, memorizing bible verses, and gospel stories!</p>
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
      <div role ="tabpanel" class = "tab-pane fade" id ="tnt">
        <p>Truth n Training</p><br>
        <p>Grace in Action! Truth and Training, T&T, continues to strengthen elementary children's faith and challenge them to become humble workmen of Christ through Bible stories, games, and lessons!</p>
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
      <div role ="tabpanel" class = "tab-pane fade" id ="trek">
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

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/05/cubbie1.png">
    </div>
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/05/cubbie2.png">
    </div>
  </div>

  <div class = "row star">
    <div class = "col-lg-12 col-md-12 full-img">
        <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/05/P1010793.png">
    </div>
  </div>

</div>

<?php get_footer(); ?>
