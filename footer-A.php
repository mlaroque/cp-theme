<!--FOOTER A-->
<footer role="contentinfo">
	<div class="container">
		<div class="row footClaim">
			<div class="col pt-5 pb-4 text-center">
				<p class="mb-0 h2 blanco">Lorem Ipsum Dolor sit amet!</p>
			</div>
		</div>

		<hr>

		<div class="row foot">
			<div class="col-12 col-sm-4 col-md-4 col-lg-4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-4 col-md-4 col-lg-4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-4 col-md-4 col-lg-4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
				<?php endif; ?>
			</div>

			<!--<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5') ) : ?>
				<?php endif; ?>
			</div>-->
		</div>

<hr>


 		<div class="row footHori">
			<div class="col-12 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hori') ) : ?>
				<?php endif; ?>
			</div>
		</div>
  
<hr>


 	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 footSx">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hsx') ) : ?>
			<?php endif; ?>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6  footDx">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hdx') ) : ?>
			<?php endif; ?>
		</div>
	</div>



	<div class="row copy">
		<div class="col-12">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright') ) : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</footer>

<?php
	wp_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/lazy-load.js"></script>
</div>
</body>
</html>