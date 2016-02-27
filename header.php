<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package randomfoo_s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="description" content="leonard lin's weblog.  topical geek news." />
<meta name="keywords" content="leonard lin, weblog, drivel, random, foo, blog, blogs" />

<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:500,700|Source+Sans+Pro:300,500,300italic,500italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'randomfoo_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

                <style>
                </style>
                <div id="usercard">
                  <img src="http://randomfoo.net/junk/avatars/me" class="bio" />
                  <p><a href="http://randomfoo.net/">random($foo)</a> is the occassionally still updated blog of Leonard Lin. My pics are on <a href="https://www.flickr.com/photos/lhl">Flickr</a>, code is on <a href="https://github.com/lhl">Github</a>. <a href="https://twitter.com/">@lhl</a> on Twitter. &nbsp; <a href="/about">More &raquo;</a></p>
                </div>

		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="base0D">random</span><span class="base05">(</span><span class="base08">$foo</span><span class="base05">)</span></a></h1>
			<?php
/*
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
*/
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
