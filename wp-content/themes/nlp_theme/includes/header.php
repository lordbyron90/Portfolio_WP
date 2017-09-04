<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css?v=dsdsdss">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body <?php body_class() ?>>

	<header class="main_header">
		
		<?php
		$args= array(
			'theme_location'	=>	'main-nav-menu',
			'container'			=>	'nav',
			'container_class'	=>	'rainbow_container',
			'menu_class'		=>	'overlay_container',
			'fallback_cb'		=>	false,
			);

		wp_nav_menu ($args);

		?>


		<!-- <nav class="rainbow_container">
		<ul class="overlay_container">
		<li class="overlay_item main_container gradient_hover_black"><a href="">home.</a></li>
		/<li class="overlay_item main_container gradient_hover_black"><a href="">projects.</a></li>
		<li class="overlay_item main_container gradient_hover_black"><a href="">blog.</a></li>
		<li class="overlay_item main_container gradient_hover_black"><a href="">contact.</a></li>
		</ul>
		</nav> -->
		<div class="main_container header_container">
			<h1 class="logo">
				<a href="/"><img src="http://localhost:8888/nlp_/wp-content/uploads/2017/08/Mesa-de-trabajo-6-copia-3.svg" alt="Noel Lago Logo"></a>
			</h1>

			<div class="burger_menu">
				<a href="javascript:void(0)" class="x_container">
					<div class="line_ov line_1"></div>
					<div class="line_ov line_2"></div>
				</a>
			</div>
		</div>
	</header>
