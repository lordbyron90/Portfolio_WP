<section class="photo_blog_container blog_container_gap">
	<div class="photo_container">
		<img src="<?php the_field('image_1') ?>" alt="<?php the_field('alt_image_1') ?>">
		<img src="<?php the_field('image_2') ?>" alt="<?php the_field('alt_image_2') ?>">
		<img src="<?php the_field('image_3') ?>" alt="<?php the_field('alt_image_3') ?>">
		<img src="<?php the_field('image_4') ?>" alt="<?php the_field('alt_image_4') ?>">
		<img src="<?php the_field('image_5') ?>" alt="<?php the_field('alt_image_5') ?>">
		<img src="<?php the_field('image_6') ?>" alt="<?php the_field('alt_image_6') ?>">
	</div>
	<div class="article_content_blog"><?php the_content() ?></div>
	<div class="place_blog"><?php the_field('city') ?></div>
	<div class="date_blog"><?php echo get_the_date(); ?></div>
</section>