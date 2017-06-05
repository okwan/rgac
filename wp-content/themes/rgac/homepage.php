<?php
/* Template Name: Home Page */

$hp_img__1_1         = get_field('hp_img__1_2');
$hp_day__1_1         = get_field('hp_day__1_1');
$hp_time__1_1        = get_field('hp_time__1_1');
$hp_activity__1_1    = get_field('hp_activity__1_1');

$hp_img__1_2         = get_field('hp_img__1_2');
$hp_day__1_2         = get_field('hp_day__1_2');
$hp_time__1_2        = get_field('hp_time__1_2');
$hp_activity__1_2    = get_field('hp_activity__1_2');

$hp_img__1_3         = get_field('hp_img__1_3');
$hp_day__1_3         = get_field('hp_day__1_3');
$hp_time__1_3        = get_field('hp_time__1_3');
$hp_activity__1_3    = get_field('hp_activity__1_3');

$hp_img__1_4         = get_field('hp_img__1_4');
$hp_day__1_4         = get_field('hp_day__1_4');
$hp_time__1_4        = get_field('hp_time__1_4');
$hp_activity__1_4    = get_field('hp_activity__1_4');

$hp_img__1_5         = get_field('hp_img__1_5');
$hp_day__1_5         = get_field('hp_day__1_5');
$hp_time__1_5        = get_field('hp_time__1_5');
$hp_activity__1_5    = get_field('hp_activity__1_5');

$hp_details_desc__1_1   = get_field('hp_details_desc__1_1');
$hp_details_desc__1_2   = get_field('hp_details_desc__1_2');
$hp_details_desc__1_3   = get_field('hp_details_desc__1_3');
get_header(); ?>
<style>
.page-id-43 footer {
  display: none;
}
/* The only rule that matters */
#video-background {
/*  making the video fullscreen  */
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: -100;
}
.videoWrapper {
    position: relative;
    padding-bottom: 57.25%; /* 16:9 */
    padding-top: 25px;
    height: 0;
}
.videoWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
video {
  vertical-align: middle;
}
.video-container {
  position: relative;
}
.overlay-desc {
  margin-top: -150px;
  background: rgba(0,0,0,0);
  position: absolute;
  top: 0; right: 0; bottom: 0; left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}
html, body {
  height: 100%;
}
#wrap {
  min-height: 100%;
  height: auto !important;
  height: 100%;
  margin: 0 auto -155px; /* the bottom margin is the negative value of the footer's height */
}
.footer, .push {
    height: 155px; /* .push must be the same height as .footer */
}
</style>
<div class = "wrapper">
  <div class ="container-fluid" id ="main" style = "height: 100vh; background-color:rgba(255,255,255,0.3);">
    <div class = "row text-center">
      <div class="video-container" style ="width:100%;">
        <video class="videot" id="videot" width="100%" height = "auto" autoplay muted loop>
          <source src="./wp-content/uploads/2017/03/RGAC_2017.mp4" type="video/mp4" >
        </video>
        <div class="overlay-desc">
          <h3>Worship. Wait. Watch.</h3>
        </div>
      </div>
    </div>
    <div class = "row" style = "margin-top: 100px;">
      <div class="col">
      </div>
      <div class="col-8 text-center">
        <h3>Our culture and church.</h3>
      </div>
      <div class="col">
      </div>
    </div><br>
    <div class = "row">
      <div class="col">
      </div>
      <div class="col-8 text-center">
        <p>Everyone, at various points in their lives, faces times of temptation, fear, uncertainty… times where faith is tested and tried. In times like these, we hope to respond with worship and trust in the Lord, wait and stand firm through prayer, and watch for His work that surrounds us day to day. In doing so, may we witness the greatness and goodness of our God.</p>
      </div>
      <div class="col">
      </div>
    </div>
    <br>
    <div class = "row">
      <div class = "col-3">
      </div>
      <div class = "col-6">
        <div class = "row">
          <div class="col">
            <img src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/04/annie-spratt-126386-e1491983869769.png" class = "img-fluid">
          </div>
          <div class="col">
            <img src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/04/annie-spratt-126386-e1491983869769.png" class = "img-fluid">
          </div>
          <div class ="w-100"></div>
          <!-- <div class="col">
            <img src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/04/annie-spratt-126386-e1491983869769.png" class = "img-fluid">
          </div>
          <div class="col">
            <img src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/04/annie-spratt-126386-e1491983869769.png" class = "img-fluid">
          </div> -->
        </div>
      </div>
      <div class = "col-3">
      </div>
    </div>
  </div>
  <div class="push"></div>
</div>
<?php get_footer(); ?>
