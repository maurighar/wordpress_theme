<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<meta name="distribution" content="global" />
	<meta name="robots" content="follow, all" />

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



	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

	<!-- leave this for stats please-->

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="header">
	<h1 id="logo"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<p><?php bloginfo('description'); ?></p>
</div>


