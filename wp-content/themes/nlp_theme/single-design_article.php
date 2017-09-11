<section class="article_blog_container blog_container_gap">

	<div class="photo_container">
		<?php the_post_thumbnail('full'); ?>
	</div>

	<h2 class="title_article_blog"><?php the_title() ?></h2>
	<div class="place_blog"><?php the_field('city') ?></div>
	<div class="date_blog"><?php echo get_the_date(); ?></div>
	<div class="article_content_blog"><?php the_content() ?></div>

</section>

