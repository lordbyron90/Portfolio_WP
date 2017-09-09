<section class="spotify_blog_container blog_container_gap">

	<div class="spotify_content">
		<iframe class="spotify_api" src="<?php the_field('spotify_embed_code') ?>" width="300" height="300" frameborder="0" allowtransparency="true"></iframe>

		<div class="spotify_content_desc">
			<div class="spotify_title"><?php the_title() ?></div>
			<div class="spotify_song"><?php the_field('song_title') ?></div>
			<div class="spotify_date"><?php echo get_the_date(); ?></div>
		</div>
	</div>
</section>

