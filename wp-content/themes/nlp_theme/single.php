<?php include ('includes/header.php'); ?>

<div class="full_wrapper">
	<div class="main_container">	
		<article class="main_clearfix">
			<div class="column_text">

			<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

				<h1 class="title_page"><?php the_title() ?><span><?php the_field('segundo_titulo') ?></span></h1>
			
				<div class="extract_page"><?php the_excerpt() ?></div>
				
				<div class="cont_page"><?php the_content() ?></div>

				<div class="tag_page">Date<span><?php the_field('fecha_de_creacion') ?></span></div>

				<div class="tag_page">Client<span><?php the_field('cliente') ?></span></div>

				<div class="tag_page">Category<span><?php the_field('project_tag') ?></span></div>

			<?php endwhile; ?> 
			<?php endif ?>

			</div>


			<div class="column_photo">

			<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

				<?php $im_pr_1= get_field('imagen_proyecto_1'); ?>
				<?php $im_pr_2= get_field('imagen_proyecto_2'); ?>
				<?php $im_pr_3= get_field('imagen_proyecto_3'); ?>
				<?php $im_pr_4= get_field('imagen_proyecto_4'); ?>
				<?php $im_pr_5= get_field('imagen_proyecto_5'); ?>
				<?php $im_pr_6= get_field('imagen_proyecto_6'); ?>
				<?php $im_pr_7= get_field('imagen_proyecto_7'); ?>
				<?php $im_pr_8= get_field('imagen_proyecto_8'); ?>
				<?php $im_pr_9= get_field('imagen_proyecto_9'); ?>
				<?php $im_pr_10= get_field('imagen_proyecto_10'); ?>
				<?php $im_pr_11= get_field('imagen_proyecto_11'); ?>
				<?php $im_pr_12= get_field('imagen_proyecto_12'); ?>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_1['url'] ?>" alt="<?php the_field('alt_imagen_1') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_2['url'] ?>" alt="<?php the_field('alt_imagen_2') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_3['url'] ?>" alt="<?php the_field('alt_imagen_3') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_4['url'] ?>" alt="<?php the_field('alt_imagen_4') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_5['url'] ?>" alt="<?php the_field('alt_imagen_5') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_6['url'] ?>" alt="<?php the_field('alt_imagen_6') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_7['url'] ?>" alt="<?php the_field('alt_imagen_7') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_8['url'] ?>" alt="<?php the_field('alt_imagen_8') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_9['url'] ?>" alt="<?php the_field('alt_imagen_9') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_10['url'] ?>" alt="<?php the_field('alt_imagen_10') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_11['url'] ?>" alt="<?php the_field('alt_imagen_11') ?>"/>
				</div>

				<div class="photo_container_page">
					<img src="<?php echo $im_pr_12['url'] ?>" alt="<?php the_field('alt_imagen_12') ?>"/>
				</div>
			</div>
	
			<?php endwhile; ?> 
			<?php endif ?>

		</article>
	
	<?php
	/*
		//debug cat ID
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
		echo "id: ".$category_id;
	*/
	?>


<?php include ('includes/footer.php'); ?>