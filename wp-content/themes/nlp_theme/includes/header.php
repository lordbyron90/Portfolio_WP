<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css?v=kjlfs">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://localhost:8888/nlp_/wp-content/uploads/2017/09/ICON_animation.gif" type="image/gif" >
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

		<div class="main_container header_container">

			<?php
				$args = array(
					'post_type'		=>'isolated_images',
					);

				$consulta =new WP_Query ($args);

				if($consulta->have_posts()): while ($consulta->have_posts()): $consulta->the_post();
			?>

			<h1 class="logo">
				<a href="/nlp_"><img src="<?php the_field('web_logo') ?>" alt="Noel Lago Logo"></a>
			</h1>

			<div class="burger_menu">
				<a href="javascript:void(0)" class="x_container">
					<div class="line_ov line_1"></div>
					<div class="line_ov line_2"></div>
				</a>
			</div>
			<?php endwhile;endif;?>
		  	<?php wp_reset_postdata(); ?>
		</div>
	</header>
