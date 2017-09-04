<?php 
	//get_template_part( 'includes/footer' ); 	
	wp_footer(); 

	/* portfolio cat specific script  */
	global $post;
	if (is_single($post->ID) && in_category('projects.', $post->ID)) {
	?>
		<script>
	      (function(){

	        var config = {
	          viewFactor : 0.15,
	          duration   : 800,
	          distance   : "0px",
	          reset: false,
	          scale      : 0.8,
	          mobile: true,
	          useDelay: 'always',
	          viewFactor: 0.1
	        }

	        window.sr = new ScrollReveal(config)
	        sr.reveal('.item', { container: '.portfolio_container' });

	      })();
	    </script> 
	<?php 
	}
	
?>

</body>
</html>