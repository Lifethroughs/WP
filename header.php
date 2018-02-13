<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta -->
		<meta charset="<?php bloginfo('charset'); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="<?php bloginfo('description'); ?>">
	    <meta name="author" content="Sami Suikki">

		<!-- Fav icon -->
	    <link rel="icon" href="<?php bloginfo('template_url')?>/assets/img/favicon.ico">

		<title>
			<?php bloginfo('name'); ?>
			<?php is_front_page() ? bloginfo('description') : wp_title('|', true, left); ?>
		</title>

		<!-- CSS -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
		<!-- Bootstrap CSS -->
    	<link href="<?php bloginfo(template_url); ?>/assets/css/bootstrap.css" rel="stylesheet">

		<!-- Head hook -->
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="container">
			<header>
				<h1><?php bloginfo('name'); ?><br />
					<span><?php bloginfo('description'); ?></span></h1>
				<div id="search"><?php dynamic_sidebar('header-right'); ?></div>
			</header>
			<div style="clear:both;"></div>
			<nav class="main"><?php wp_nav_menu(); ?></nav>
		</div>
