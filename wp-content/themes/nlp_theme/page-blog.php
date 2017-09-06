<?php 
/*
Template Name: Stuff
*/
?>
<?php include ('includes/header.php'); ?>


	<div class="full_wrapper">

		<div class="main_container">

			<h1 class="icon_hero"><img src="images/min_circle_black.svg" alt=""></h1>

			<p class="intro_home">here is where i share my reflections</p>

			<p class="second_par">feel free to inquire how my mind works.</p>

		
		<div class="blog_container">

		<?php
			$args =array(
				'post_type'		=>	'design_music_digest, photo_review, quote_digest',
				'orderby'		=>	'date',
				'posts_per_page'=>	-1,
				);

			$stuff = new WP_Query ($args);
			if ($stuff->have_posts()): while ($stuff->have_posts()): $stuff->the_post();
		?>

			<?php 
				if(get_post_type()=='design_music_digest'){
					 include ('single-design_music_digest.php');

				}elseif(get_post_type()=='photo_review'){
					 include ('single-photo_review.php'); 

				}else(get_post_type()=='photo_review'){
					 include ('single-quote_digest.php'); 
				}
			?>

		<?php endwhile; endif;?>
		<?php wp_reset_postdata(); ?>

		</div>


<?php include ('includes/footer.php'); ?>