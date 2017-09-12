<?php include ('includes/header.php'); ?>

<div class="full_wrapper">
	<div class="main_container">
			<div class="full">
				<div class="hero_home">
					<div class="icon_hero">
						<img src="http://localhost:8888/nlp_/wp-content/uploads/2017/09/ICON_animation.gif" alt="">
					</div>

				<?php

					$args = array(
						'post_type'		=>'isolated_sentences',
						'posts_per_page'=>1,
						);
					$consulta =new WP_Query ($args);
					if($consulta->have_posts()): while ($consulta->have_posts()): $consulta->the_post();
				?>

					<div class="intro_home"><?php the_field('index_intro') ?></div>
					<div class="second_par"><?php the_field('index_second') ?></div>
				</div>

				<?php endwhile;endif;?>
		  		<?php wp_reset_postdata(); ?>
			</div>
		    <section id="container" class="pfolio_grid">

				<?php

					$args = array(
						'post_type'		=>'post',
						'cat'			=>3,
						'posts_per_page'=>8,
						'orderby'		=>'date'
						);

					$consulta =new WP_Query ($args);

					if($consulta->have_posts()): while ($consulta->have_posts()): $consulta->the_post();
				?>

				<?php $icon= get_field('icono_de_proyecto'); ?>

				  	<article class="item w2">
				  	<a href="<?php the_permalink() ?>">
					  	<figure class="hover_box">
							<?php the_post_thumbnail('full'); ?>
							<figcaption>
								<div class="text_box">
									<h2 class="title_box"><?php the_title() ?><span><?php the_field('segundo_titulo') ?></span></h2>
									<div class="tag_box"><?php the_field('project_tag') ?></div>
								</div>
								<div class="line_icon">
									<div class="box_icon"><img src="<?php echo $icon['url'] ?>" alt="Imagen"></div>	
								</div>
							</figcaption>			
						</figure>
					</a>
			  	</article>
		  		<?php endwhile;endif;?>
		  		<?php wp_reset_postdata(); ?>
			</section><!--END OF CONTAINER -->

<?php include ('includes/footer.php'); ?>



		