<!DOCTYPE html>
<html class="no-js home" lang="es">
  <head>
    <meta charset="utf-8" />
    <!--[if IE]><![endif]-->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <title><?php
  	global $page, $paged;

  	wp_title( '|', true, 'right' );

  	echo "Club Deportivo de Karate Do Kansei";

  	if ( $paged >= 2 || $page >= 2 )
  		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
  	?></title>
  	<meta name="description" content="<?php echo $site_description; ?>" />
  	<meta name="author" content="David Bohórquez Argote" />
  	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
    <link href="<?php echo get_bloginfo("template_url"); ?>/images/favicon.png" rel="shortcut icon" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" rel="stylesheet" />
    <link href="<?php echo get_bloginfo("template_url"); ?>/style.css" rel="stylesheet" />
    <script src="<?php echo get_bloginfo("template_url"); ?>/javascripts/modernizr.js"></script>
  </head>
  
  <body <?php body_class(); ?>>
    <!--[if lte IE 6 ]> <div id="outer-wrapper" class="ie9 ie8 ie7 ie6"> <![endif]-->
    <!--[if lt IE 7 ]> <div id="outer-wrapper" class="ie9 ie8 ie7"> <![endif]-->
    <!--[if IE 8 ]> <div id="outer-wrapper" class="ie9 ie8"> <![endif]-->
    <!--[if IE 9 ]> <div id="outer-wrapper" class="ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <div id="outer-wrapper"> <!--<![endif]-->
    <div id="outer-wrapper">
      <div id="wrapper" class="clearfix">
        <header id="header" class="clearfix">
          <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
          <<?php echo $heading_tag; ?> id="logo"><a href=""><img src="<?php echo get_bloginfo("template_url"); ?>/images/logo.png" alt="" /></a></<?php echo $heading_tag; ?>>
          <nav>
            <ul class="social-media">
              <li><a href="http://www.facebook.com/ClubKansei" target="_blank" title="Síguenos en Facebook"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icons/facebook.png" alt="Facebook" /></a></li>
              <li><a href="http://twitter.com/ClubKansei" target="_blank" title="Síguenos en Twitter"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icons/twitter.png" alt="Twitter" /></a></li>
              <li><a href="http://www.youtube.com/ClubKansei" target="_blank" title="Visita Nuestro Canal en Youtube"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icons/youtube.png" alt="Youtube" /></a></li>
            </ul>
            <ul>
              <li><a href="<?php echo home_url( '/' ); ?>">Inicio</a></li>
              <li class="dropdown"><a href="<?php echo get_bloginfo("url"); ?>/karate-do-shotokan">Karate Do Shotokan</a>
                <ul>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/el-dojo">El Dojo</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/terminologia">Terminología</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/kihon">Técnicas</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/kata">Kata</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/kumite">Kumite</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/competencias">Competencias</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/cinturones-y-examenes">Cinturones y Exámenes</a></li>
                  <li><a href="<?php echo get_bloginfo("url"); ?>/japones-basico">Japonés Básico</a></li>
                </ul>
              </li>
              <li><a href="<?php echo get_bloginfo("url"); ?>/videos">Videos</a></li>
              <li><a href="<?php echo get_bloginfo("url"); ?>/nuestro-club">Nuestro Club</a></li>
              <li><a href="<?php echo get_bloginfo("url"); ?>/contactenos">Contáctenos</a></li>
            </ul>
          </nav>
        </header>

        <div id="content" class="clearfix">