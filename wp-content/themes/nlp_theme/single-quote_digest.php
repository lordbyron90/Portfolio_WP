<section class="quote_blog_container blog_container_gap">

	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>	

	<div class="quote_blog"><?php the_content('') ?></div>

	<div class="author_blog"><?php the_field('autor') ?></div>
	<div class="date_blog"><?php echo get_the_date(); ?></div>

	<?php endwhile; ?> 
	<?php endif ?>
</section>