<?php
/* Template Name: Sunday Page */
// Advanced Custom Fields
$awana_first_image        = get_field('awana_first_image');
$awana_first_title        = get_field('awana_first_title');
$awana_first_title_tag    = get_field('awana_first_title_tag');
$awana_about_description  = get_field('awana_about_description');

$cubbies_about_desc       = get_field('cubbies_about_desc');

get_header();
?>

<style>
#sunday-w {
  margin-top: 5%;
  margin-left: 15%;
  margin-right: 15%;
}

.height-450 {
  max-width: 100%;
  max-height: 450px;
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
</style>

<!-- Page Content -->
<div class="container-fluid" id = "sunday-w">
  <div class = "row star pad-5">
    <div class = "col">
      <img class = "img-responsive" src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/02/IMG_4965-2-e1495154228330.jpg">
    </div>
    <div class = "col">
      <img class = "img-responsive" src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/05/IMG_9963-e1496393920354.png">
    </div>
    <div class = "col">
      <img class = "img-responsive" src = "http://rgac.oscar-kwan.com/wp-content/uploads/2017/05/IMG_9995-e1496393940214.png">
    </div>
  </div>

  <div class = "row center-rgac star align-items-center">
    <div class = "col-md-6 vcenter text-center">
      <h3>Catching a glimpse</h3>
      <h3>of Him.</h3>
    </div>
    <div class = "col-md-6">
      <p>Service</p><br>
      <p>During Sunday services, we hope to encounter God, to refocus and redirect ourselves back to God. In this time, we gather as a community to listen, worship, and learn. Our weekly services are central to the church community.<br><br>
On a typical Sunday, you can expect to a time of musical worship, prayer, Scripture reading, and sermons. We welcome everyone to join us, even children as well! The church is family-friendly; there is a play area within close proximity to the speaker, so parents are able to engage in the sermon with their children.<br><br>
Time: 11am. We encourage you to join us a little earlier prior to the starting time (~10:40) for a time of prayer and to meet and bond with others.<br><br>
We also often share lunch together after the service, and we welcome you to join us as well!</p>
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-12 col-md-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/01/18517188984_bab59695a8_o-e1483437455952.jpg">
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-xs-6 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/P1010908.png">
    </div>
    <div class = "col-lg-6 col-md-6 col-xs-6 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/P1010923.png">
    </div>
  </div>

  <div class = "row center-rgac star align-items-center">
    <div class = "col-lg-6 col-md-6 vcenter text-center">
      <h3>I'm New!</h3>
      <h3>What do I need to know?</h3>
    </div>
    <div class = "col-lg-6 col-md-6">
    <p>Going into new places with unfamiliar faces can be intimidating. Here is some information for you to know what you can expect.
      <br><br>
  <b>What is worship like?</b><br>
  Sunday service is structured and designed to create a time and space to engage and meet with God. Worship usually begins with several songs, ranging from upbeat, celebratory songs to reflective, meditative songs. Following the music is a time of prayer and teaching based on Scripture. In total, Sunday service lasts 1 hour and 30 minutes.<br><br>
  <b>What should I wear?</b><br>
  You are welcome to dress in anything from casual wear to more formal attire. Some of us come in t-shirts and jeans, while others choose to wear blazers and dresses.<br><br>
  <b>How else can I get connected?</b><br>
  There are many ways to get involved! Many newcomers start by making connections with other church members and building these relationships. In addition, various events and gatherings (such as potlucks, hangouts, house gatherings, BBQs/picnics) are available for you throughout the year to meet new people. If you are interested in any of these events, ask any of the church members or email us at _______.
  </p>
    </div>
  </div>

  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/P1010887.png">
    </div>
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/P1010925-1.png">
    </div>
  </div>
  <div class = "row center-rgac-landscape-img star">
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/P1010926.png">
    </div>
    <div class = "col-lg-6 col-md-6 col-sm-12 full-img">
      <img class = "img-responsive" src="http://rgac.oscar-kwan.com/wp-content/uploads/2017/06/P1010904.png">
    </div>
  </div>
</div>

<?php get_footer(); ?>
