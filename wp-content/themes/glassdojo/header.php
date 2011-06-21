<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php
	global $page, $paged;
	
	wp_title( '|', true, 'right' );
	
	bloginfo( 'name' );
	
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
	<meta name="description" content="<?php echo $site_description; ?>">
	<meta name="author" content="David Bohórquez Argote">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<link rel="shortcut icon" href="<?php echo get_bloginfo("template_url"); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_bloginfo("template_url"); ?>/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_url"); ?>/reset.css?v=1">
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_url"); ?>/style.css?v=1">
	<link rel="stylesheet" media="print" href="<?php echo get_bloginfo("template_url"); ?>/devices.css?v=1">
    <script src="<?php echo get_bloginfo("template_url"); ?>/js/jquery-1.4.2.min.js"></script>
	<script src="<?php echo get_bloginfo("template_url"); ?>/js/modernizr-1.5.min.js"></script>

</head>
<body <?php body_class(); ?> id="top">
<!--[if lt IE 7 ]><div class="browser-notice">¡Hola! El navegador que estás usando es obsoleto y no puede mostrar todos los efectos visuales de esta página. Te recomendamos usar un navegador moderno como Google Chrome o Mozilla Firefox. ¿No me crees? Haz click aquí para ver cómo se ve clubkansei.com en los navegadores modernos.</div><div id="wrapper" class="ie6 ie7 ie8 ie9 clearfix"> <![endif]-->
<!--[if IE 7 ]><div class="browser-notice">¡Hola! El navegador que estás usando es obsoleto y no puede mostrar todos los efectos visuales de esta página. Te recomendamos usar un navegador moderno como Google Chrome o Mozilla Firefox. ¿No me crees? Haz click aquí para ver cómo se ve clubkansei.com en los navegadores modernos.</div><div id="wrapper" class="ie7 ie8 ie9 clearfix"> <![endif]-->
<!--[if IE 8 ]><div class="browser-notice">¡Hola! El navegador que estás usando es obsoleto y no puede mostrar todos los efectos visuales de esta página. Te recomendamos usar un navegador moderno como Google Chrome o Mozilla Firefox. ¿No me crees? Haz click aquí para ver cómo se ve clubkansei.com en los navegadores modernos.</div><div id="wrapper" class="ie8 ie9 clearfix"> <![endif]-->
<!--[if IE 9 ]>    <div id="wrapper" class="ie9 clearfix"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <div id="wrapper" class="clearfix"> <!--<![endif]-->
		<header class="main clearfix">
			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
        	<<?php echo $heading_tag; ?> id="logo"><a href="<?php echo home_url( '/' ); ?>" title="Volver al Inicio" rel="home"><img src="<?php echo get_bloginfo("template_url"); ?>/images/header-logo.png" alt="Club Deportivo de Karate Do Kansei" /></a></<?php echo $heading_tag; ?>>
			<div class="skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
			<nav>
				<a href="<?php echo home_url( '/' ); ?>" id="nv-inicio" class="current"><span>Inicio</span></a>
				<a href="<?php echo get_bloginfo("url"); ?>/karate-do-shotokan" id="nv-karate"><span>Karate Do Shotokan</span></a>
				<a href="<?php echo get_bloginfo("url"); ?>/videos" id="nv-videos"><span>Videos</span></a>
				<a href="<?php echo get_bloginfo("url"); ?>/nuestro-club" id="nv-club"><span>Nuestro Club</span></a>
				<a href="<?php echo get_bloginfo("url"); ?>/contactenos" id="nv-contactenos"><span>Contáctenos</span></a>
			</nav>
			<ul class="social-media">
				<li><a href="http://www.facebook.com/ClubKansei" target="_blank" title="Síguenos en Facebook" class="follow"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icn/facebook.png" alt="Facebook" /></a></li>
				<li><a href="http://twitter.com/ClubKansei" target="_blank" title="Síguenos en Twitter" class="follow"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icn/twitter.png" alt="Twitter" /></a></li>
				<li><a href="http://www.youtube.com/ClubKansei" target="_blank" title="Visita nuestro canal en Youtube" class="follow"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icn/youtube.png" alt="Youtube" /></a></li>
				<li><a href="http://www.vimeo.com/clubkansei/videos" target="_blank" title="Visita nuestro canal en Vimeo" class="follow"><img src="<?php echo get_bloginfo("template_url"); ?>/images/icn/vimeo.png" alt="Vimeo" /></a></li>
			</ul>
		</header>
		
		<div id="content">
			<section id="main">