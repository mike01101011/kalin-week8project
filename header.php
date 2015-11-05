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


    <nav class="contact">
      <div class="container">
        <ul class="contactList">
          <li>
            <a class ="" href="https://github.com/mike01101011" target="_blank">
              <i class="fa fa-github-square fa-2x"></i>
            </a>
          </li>
          <li>
            <a class ="" href="https://twitter.com/mikekalin_" target="_blank">
              <i class="fa fa-twitter-square fa-2x"></i>
            </a>
          </li>
          <li>
            <a class ="" href="tel:+1-647-987-9279">
              <i class="fa fa-phone-square fa-2x"></i>
            </a>
          </li>
          <li>
             <a class ="" href="mailto:mikekalin@gmail.com">
              <i class="fa fa-envelope-square fa-2x"></i>
            </a>
          </li>
        </ul>
      </div><!-- container --> 
    </nav><!-- contact -->
    <nav class="site">
      <div class="container">
        <ul class="siteList">
          <li>
            <a href="#about">About</a>
          </li>
          <li>
            <a href="#about">Skills</a>
          </li>
          <li>
          <h1 class="logo">MK</h1>
          </li>
          <li>
            <a href="#about">Projects</a>
          </li>
          <li>
            <a href="#about">Contact</a>
          </li>
        </ul>
      </div><!-- container -->
    </nav><!-- site -->
    <header>
      <div class="container">
        <h1>MIKE KALIN</h1>
      </div><!-- container -->
    </header>