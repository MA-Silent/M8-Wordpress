	<footer class="footer mt-auto py-3 bg-body-tertiary">
		<div class="container">
			<?php if ( is_active_sidebar('footer-widget-ig') ):
				dynamic_sidebar( 'footer-widget-ig' );
			endif; ?>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<?php wp_body_close(); ?>
	
	</body>

	</html>