<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RGAC - Richmond Grace Alliance Church</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i" rel="stylesheet">

    <?php
      wp_head();
      $url = home_url();
    ?>
    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!-- Custom CSS -->
    <!-- <link href="style.css" rel="stylesheet"> -->

    <style>
    img {
      max-width: 100% !important;
      height: auto !important;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .menu-wrap {
      margin-top: -65px !important;
    }
    body {
        padding-top: 50px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .contact-label {
      font-size: 12px !important;
    }

    p {
      font-size: 12px !important;
    }

    input[type=submit] {
      font-size: 12px !important;
    }

    #rgac-accordion .panel-heading {
      font-size: 20px !important;
    }
    ul li {
      font-size: 12px;
    }

    span.ge {
      cursor: pointer;
    }

    .menu-wrap {
      width: 100%;
      padding: 30px;
    }

    @media screen and (min-width: 600px) {
      .icon-list {
        float: left;
        width: 100%;
      }

      .icon-list a {
        display: inline-block;
        padding-right: 7%;
      }
    }
    .menu-link {
      float: right;
      cursor: pointer;
    }

    .menu span {
      font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .ge-mobile {
      display: none;
    }

    @media screen and (max-width: 1077px) {
      #nav-title {
        display: none;
      }
      #nav-div {
        max-width: 45%;
      }
    }

    @media screen and (max-width: 600px) {
      .icon-list {
        width: 100%;
        margin-top: -15px;
        background-color: rgba(255,255,255,0.95);
      }

      .icon-list a {
        display: none;
        color: black;
      }
    }

    @media screen and (max-width: 600px) {
      .ge {
        display: none;
      }

      .ge-mobile {
        display: block;
      }
    }

    nav.menu {
      font-size: 14px;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    $(window).load(function() {
    	$(".loader").fadeOut("slow");
    })
    </script>
    <script>
      $("#nav-div").removeClass("col-12 col-md-auto");
    </script>
</head>

<body <?php body_class();?>>
  <!-- <div class="se-pre-con"></div> -->

    <!-- Navigation -->
    <div class="menu-wrap">
			<nav class="menu">
				<div class="row icon-list">
          <div class = "col-8 col-md-10 col-sm-10">
            <?php
              $menuParameters = array(
                'echo'            => false,
                'container'       => false,
                'items_wrap'      => '%3$s',
                'depth'           => 0,
              );

              echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            ?>
            <!-- <span class = "ge-mobile" onclick="letsGoHome();">RGAC</span>
            <span class = "ge" onclick="letsGoHome();">RICHMOND GRACE ALLIANCE CHURCH</span> -->
          </div>
          <div class = "col text-center" style = "display: none">
            <?php if(!is_page('homepage') ) {?>
            <span id ="nav-title" class = "ge"><?php echo get_the_title(); ?></span>
            <?php } ?>
          </div>
          <div class ="col-4 col-md-2 col-sm-2">
            <span class="menu-link" style = "margin-right:-20px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>
            ">RGAC</a></span>
            <!-- <span id="menu-buttaa" onclick="toggleMenuGGEZ();"class="menu-link">HIDE MENU</span> -->
          </div>
				</div>
			</nav>
		</div>
