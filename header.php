<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				wp_title('|', true, right); //separator,display,seplocation
				bloginfo('name'); //blog's name
			?>
		</title>
		<?php
			wp_head(); //defining head hook for plugins
		?>
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
