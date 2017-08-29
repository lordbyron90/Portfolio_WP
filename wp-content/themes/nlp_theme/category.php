<?php include ('includes/header.php'); ?>

	<div class="full_wrapper">
	
		<div class="main_container">

			<p class="presentation">here is where i share my stuff. <span>but just the good one.</span></p>
		

			<section class="portfolio_container">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): ?>
						<?php the_post(); ?>

				<?php $icon= get_field('icono_de_proyecto'); ?>

				<article class="item h2_port left_column">
				  	<a href="<?php the_permalink() ?>">
					  	<figure class="hover_box">
							<?php the_post_thumbnail('full'); ?>
							<figcaption>
								<div class="text_box">
									<h2 class="title_box"><?php the_title() ?><span><?php the_field('segundo_titulo') ?></span></h2>
									<div class="tag_box"><?php the_field('project_tag') ?></div>
								</div>
							</figcaption>			
						</figure>
						<div class="line_icon"></div>
						<div class="box_icon"><img src="<?php echo $icon['url'] ?>" alt="Imagen"></div>
					</a>
			  	</article>

				<?php endwhile; ?> 
				<?php endif ?>


				<!-- <article class="item h2_port right_column">
				  	<a href="">
					  	<figure class="hover_box">
							<img src="images/bird.png" alt=""/>
							<figcaption>
								<div class="text_box">
									<h2 class="title_box">swatch<span>2016</span></h2>
									<p class="tag_box">branding editorial</p>
								</div>
							</figcaption>			
						</figure>
						<div class="line_icon"></div>
						<div class="box_icon"><img src="images/power.svg" alt=""></div>
					</a>
				</article> -->


			</section>

<?php include ('includes/footer.php'); ?>