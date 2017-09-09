<section class="photo_blog_container blog_container_gap">

	<?php $im_1= get_field('imagen_1'); ?>
	<?php $im_2= get_field('imagen_2'); ?>
	<?php $im_3= get_field('imagen_3'); ?>
	<?php $im_4= get_field('imagen_4'); ?>
	<?php $im_5= get_field('imagen_5'); ?>
	<?php $im_6= get_field('imagen_6'); ?>

	<div class="photo_container">
		<img src="<?php echo $im_1['url'] ?>" alt="<?php the_field('alt_image_1') ?>">
		<img src="<?php echo $im_2['url'] ?>" alt="<?php the_field('alt_image_2') ?>">
		<img src="<?php echo $im_3['url'] ?>" alt="<?php the_field('alt_image_3') ?>">
		<img src="<?php echo $im_4['url'] ?>" alt="<?php the_field('alt_image_4') ?>">
		<img src="<?php echo $im_5['url'] ?>" alt="<?php the_field('alt_image_5') ?>">
		<img src="<?php echo $im_6['url'] ?>" alt="<?php the_field('alt_image_6') ?>">
	</div>

	<div class="photo_comment_blog"><?php the_content() ?></div>
	
	<div class="place_blog"><?php the_field('city') ?></div>
	<div class="date_blog"><?php echo get_the_date(); ?></div>

</section>