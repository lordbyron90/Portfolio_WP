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
 
			<!-- <nav>
				<ul class="ssmm_li">
					<li class="i_instagram footer_li gradient_hover"><a href="/">instagram.</a></li>
					<li class="i_behance footer_li gradient_hover"><a href="/">behance.</a></li>
					<li class="i_spotify footer_li gradient_hover"><a href="/">spotify.</a></li>
					<li class="i_twitter footer_li gradient_hover"><a href="/">twitter.</a></li>
				</ul>
			</nav> -->

		</footer><!--FOOTER -->

	</div>	

</div><!--END OF FULL WRAPPER -->


  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='<?php bloginfo('stylesheet_directory') ?>/js/isotope.3.js'></script>
    <script src="<?php bloginfo('stylesheet_directory') ?>/js/index.js?"></script>
	
</body>
</html>