<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />


<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/stylesheets/css/reset.css' ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/stylesheets/css/grid.css' ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/stylesheets/css/master.css' ?>" />


<!-- Scripts -->
<script src="<?php echo get_stylesheet_directory_uri(). '/js/jquery-3.2.1.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/js/main.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/js/prettify.js' ?>"></script>

<!-- Typekit fonts -->
<script src="//use.typekit.net/qqh3bsj.js"></script>


<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <div id="search-form" class="search-form">
    <div class="wrapper">
      <div class="row">
        <div class="col col-5">
          <div class="hidden-menu">
            <ul>
              <li><a href="http://www.ysu.edu/directory/a-z">A - Z Index</a></li>
              <li><a href="http://www.ysu.edu/directory">Faculty & Staff Directory</a></li>
              <li><a href="http://www.ysu.edu/directory/departments">Offices & Departments</a></li>
            </ul>
          </div>
        </div>
        <div class="col col-8">
          <div class="search-wrapper">
            <!-- Search Module from Wordpress -->
            <form role="search" method="get" id="searchform" class="searchform" action="http://ysu.edu/search?search" target="_blank">
              <div>
                <label class="screen-reader-text" for="search"><i class="fa fa-search" aria-hidden="true"></i> 	Search pages and people</label>
                <input value="" name="search" id="search" type="text" placeholder="Search">
                <input id="searchsubmit" value="Search" type="submit">
              </div>
            </form>
            <!-- End Search Module -->
          </div>
        </div>
      </div>
      <div class="close-search">
        <div id="close-button" class="btn-close-search"><i class="fa fa-times" aria-hidden="true"></i></div>
      </div>
    </div>
  </div>

  <div id="responsive-btn" class="responsive-menu-btn">

  </div>
  <div id="responsive-menu" class="responsive-menu">
    <div class="responsive-search">
      <form role="search" method="get" id="searchform" class="searchform" action="">
        <div>
          <label class="screen-reader-text" for="s2">Search</label>
          <input value="" name="s2" id="s2" type="text" placeholder="Search">
          <input id="searchsubmit" value="Search" type="submit">
        </div>
      </form>
      <ul>
        <li><a href="http://www.ysu.edu/directory/a-z">A - Z Index</a></li>
        <li><a href="http://www.ysu.edu/directory">Faculty & Staff Directory</a></li>
        <li><a href="http://www.ysu.edu/directory/departments">Offices & Departments</a></li>
      </ul>
    </div>
    <div class="responsive-menu-list">
      <ul>
        <li><a href="http://www.ysu.edu/events">Events</a> |  <a href="http://ysufoundation.com/give-now/">Give</a></li>
        <li><a href="http://www.ysu.edu/about-ysu">About YSU</a></li>
        <li><a href="http://www.ysu.edu/academics">Academics</a></li>
        <li><a href="http://www.ysu.edu/admissions">Admissions</a></li>
        <li><a href="http://www.ysu.edu/student-life">Student Life</a></li>
        <li><a href="http://www.ysu.edu/tuition-financial-aid">Tuition & Financial Aid</a></li>
      </ul>
    </div>
  </div>

  <header role="banner">
    <div class="wrapper">
      <div class="brand">
        <img alt="Youngstown State University Logo" src="<?php echo get_stylesheet_directory_uri() ?>/media/images/ysu-logo-transparent.svg">
      </div>
      <div class="menu-wrapper">
        <nav class="secondary-menu">
          <ul>
            <li><a href="http://www.ysu.edu/events">Events</a></li>
            <li><a href="http://ysufoundation.com/give-now/">Give</a></li>
            <li><a id="az-search" class="btn-search" href="#">A-Z</a></li>
          </ul>
        </nav>
        <nav class="primary-menu">
          <ul>
            <li><a href="http://www.ysu.edu/about-ysu">About YSU</a></li>
            <li><a href="http://www.ysu.edu/academics">Academics</a></li>
            <li><a href="http://www.ysu.edu/admissions">Admissions</a></li>
            <li><a href="http://www.ysu.edu/student-life">Student Life</a></li>
            <li><a href="http://www.ysu.edu/tuition-financial-aid">Tuition & Financial Aid</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
    <div class="breadcrumb-navigation">
      <div class="wrapper">
          <a href="http://ysu.edu" class="ysu-home"><i class="fa fa-home" aria-hidden="false"><b style="display:none">Home</b></i></a>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
    </div>

  	<main role="main">
  		<div class="shards-top"></div>
  		<div class="wrapper">
