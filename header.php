  <!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <?php // Load Meta ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Load our CSS ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- googlefonts -->
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cousine' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <div class="modal"></div>

    <nav class="navContact navContactTop">
      <!-- <div class="container"> -->
        <div class="hamburger">
          <a class ="hamburgerLink" href="" ><i class="fa fa-bars fa-2x"></i></a>
        </div>
        <ul class="navContactList topNavList">
          <li>
            <a class ="topNavListLink" href="https://github.com/mike01101011" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
          </li>
          <li>
            <a class ="topNavListLink" href="https://twitter.com/mikekalin_" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
          </li>
          <li>
            <a class ="topNavListLink" href="https://www.linkedin.com/in/michaelkalin" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></i></a>
          </li>
          <li>
             <a class ="topNavListLink" href="mailto:mike@mikekalin.ca"><i class="fa fa-envelope-square fa-2x"></i></a>
          </li>
        </ul>
      <!-- </div>container  -->
    </nav><!-- contact -->
    <nav class="site">
      <div class="container">
        <ul class="siteList">
          <li>
            <a class="smoothScroll" href="#about"><i class="fa fa-chevron-down"></i>About</a>
          </li>
          <li>
            <a class="smoothScroll" href="#skills"><i class="fa fa-chevron-down"></i>Skills</a>
          </li>
          <li>
          <h2 class="logo"><i class="fa fa-chevron-down"></i>MK</h2>
          </li>
          <li>
            <a class="smoothScroll" href="#projects"><i class="fa fa-chevron-down"></i>Projects</a>
          </li>
          <li>
            <a class="smoothScroll" href="#contact"><i class="fa fa-chevron-down"></i>Contact</a>
          </li>
        </ul>
      <!-- </div>container -->
    </nav><!-- site -->
    <header>
      <div class="container">
        <div class="header">
          <div class="headerLeft">
            <div class="triangleBlue"></div>
          </div>
          <div class="headerRight">
            <h1>MIKE KALIN</h1>
          </div>
        </div>
      </div><!-- container -->
    </header>