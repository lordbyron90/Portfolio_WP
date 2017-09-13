<?php 
/*
Template Name: Stuff
*/
?>
<?php include ('includes/header.php'); ?>

	<div class="full_wrapper">
		<div class="main_container">

		<?php
			$args = array(
				'post_type'		=> 'isolated_images',
				);
			$consulta =new WP_Query ($args);
			if($consulta->have_posts()): while ($consulta->have_posts()): $consulta->the_post();
		?>
			<h1 class="logo_blog_section"><img src="<?php the_field('blog_logo') ?>" alt="blog_logo"></h1>

		<?php endwhile;endif;?>
		 <?php wp_reset_postdata(); ?>

			<?php
				$args = array(
					'post_type'		=>'isolated_sentences',
					'posts_per_page'=>1,
					);
				$consulta =new WP_Query ($args);
				if($consulta->have_posts()): while ($consulta->have_posts()): $consulta->the_post();
			?>

			<p class="intro_home"><?php the_field('blog_first') ?></p>
			<p class="second_par"><?php the_field('blog_second') ?></p>
			<?php endwhile;endif;?>
		  	<?php wp_reset_postdata(); ?>
		
		<div class="blog_container">

		<?php
			$args =array(
				'post_type'		=>	array('quote_digest', 'design_article','photo_review'),
				'orderby'		=>	'date',
				'posts_per_page'=>	-1,
				);
			$stuff = new WP_Query ($args);
			if ($stuff->have_posts()): while ($stuff->have_posts()): $stuff->the_post();
		?>
			<?php 
				if(get_post_type()==='design_article'){
					 include ('single-design_article.php');

				}if(get_post_type()==='quote_digest'){
					 include ('single-quote_digest.php'); 
				}
				elseif(get_post_type()==='photo_review'){
					 include ('single-photo_review.php'); 
				}				
			?>

		<?php endwhile; endif;?>
		<?php wp_reset_postdata(); ?>
		</div>

<?php include ('includes/footer.php'); ?>