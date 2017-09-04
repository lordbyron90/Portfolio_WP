<footer class="main_footer">
			<p class="web_copyright">crafted by <span>©noellago</span></p>


			<?php
			$args= array(
				'theme_location'	=>	'rrss-nav-menu',
				'container'			=>	'nav',
				'menu_class'		=>	'ssmm_li',
				'fallback_cb'		=>	false,
				);

			wp_nav_menu ($args);

			?>
 

		</footer><!--FOOTER -->

	</div>	

</div><!--END OF FULL WRAPPER -->
<?php get_footer(); ?>