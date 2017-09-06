<section class="spotify_blog_container blog_container_gap">

	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>	

	<div class="spotify_content">
		<iframe class="spotify_api" src="<?php the_field('spotify_embed_code') ?>" width="300" height="300" frameborder="0" allowtransparency="true"></iframe>

		<div class="spotify_content_desc">
			<p class="spotify_title"><?php the_title() ?></p>
			<p class="spotify_song"><?php the_field('song_title') ?></p>
			<p class="spotify_date"><?php echo get_the_date(); ?></p>
		</div>
	</div>

	<?php endwhile; ?> 
	<?php endif ?>
</section>

