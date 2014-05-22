<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
	</title>



	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="txt/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php
	/**
	 * This hook is important for WordPress plugins and other many things
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>




	<div id="wrapper">

		<div class="container" class="group">
			<header class="group">
				<h1 id="logo">
					<img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?>"> <br/>
					<a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a>
				</h1>
				<p><?php bloginfo('description'); ?></p>
				<?php get_search_form(); ?>
				<?php wp_nav_menu(array('menu' => 'Main','container' => 'nav')); ?>
			</header>