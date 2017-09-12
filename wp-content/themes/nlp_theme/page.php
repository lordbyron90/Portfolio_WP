<?php include ('includes/header.php'); ?>

	<div class="full_wrapper">
		<div class="main_container">
			<main>
				<main>
					<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

						<h1 class="intro_home"><?php the_content() ?></h1>
						<div class="contact_second_par"><?php the_field('second_part') ?></span></div>
						<div class="list_contact"><?php the_field('dos') ?></div>
						<div class="list_contact"><?php the_field('donts') ?></div>

					<?php endwhile; ?> 
					<?php endif ?>
				</main>  
			</main> 

<?php include ('includes/footer.php'); ?>