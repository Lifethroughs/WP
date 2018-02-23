<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta -->
		<meta charset="<?php bloginfo('charset'); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="<?php bloginfo('description'); ?>">
	    <meta name="author" content="Sami Suikki">

		<!-- Fav icon -->
	    <link rel="icon" href="<?php bloginfo('template_url')?>/assets/img/favicon.ico">

		<title>
			<?php bloginfo('name'); ?>
			<?php is_front_page() ? bloginfo('description') : wp_title('|', true, 'left'); ?>
		</title>

		<!-- CSS -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
		<!-- Bootstrap CSS -->
    	<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet">

		<!-- HTML5 element support for IE8 and earlier -->
		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->

		<!-- Head hook -->
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="container">
	   		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<?php
					wp_nav_menu( array(
					    'theme_location'	=> 'primary',
					    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
						'container'			=> 'div',
						'container_class'	=> 'collapse navbar-collapse',
						'container_id'		=> 'bs-example-navbar-collapse-1',
						'menu_class'		=> 'navbar-nav mr-auto',
					    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
					    'walker'			=> new WP_Bootstrap_Navwalker()
					));
					?>
			</nav>
		</div>

		<div class="container">
			<header class="blog-header">
        		<h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        		<p class="lead blog-description"><?php bloginfo('description'); ?></p>
			</header> <!-- /.blog-header-->
		</div> <!-- /.container -->
