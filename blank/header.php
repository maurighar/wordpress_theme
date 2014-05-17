<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8" />
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
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>

<div id="header">
	<h1 id="logo"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<p><?php bloginfo('description'); ?></p>
</div>