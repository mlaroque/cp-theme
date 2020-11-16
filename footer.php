<!--<div class="container-fluid payments">
    <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h3><b>Métodos de Pago</b></h3>

				<?php
					$http_protocol = $_SERVER['HTTPS'];
					if(empty($http_protocol)){
						$http_protocol = 'http';
					}
				?>
				<p> 
					<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/pm-visa.png" alt="visa" class="js-lazy-image">  
					<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/pm-mastercard.png" alt="mastercard" class="js-lazy-image"> 
					<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/pm-amex.png" alt="american express" class="js-lazy-image"> 
					<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/pm-paypal.png" alt="pay pal" class="js-lazy-image"> 
					<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/pm-spei.png" alt="spei" class="js-lazy-image"> 
					<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/pm-oxxo.png" alt="oxxo" class="js-lazy-image"> 
				</p> 
			</div>
		</div>
    </div>
</div>





<div class="container-fluid newsletter">
    <div class="container">
		<div class="row">
			<div class="col-md-1 hidden-xs">
				<img src="<?php echo $http_protocol; ?>://codigospostales.guiapaqueteria.com/wp-content/themes/LCtheme2020/images/newsletter.png" class="img-responsive">
            </div>
        	<div class="col-md-6">
        		<h3>Recibe Ofertas y promociones directo a tu correo</h3>
        		<p>Somos Ecológicos, no enviamos correo basura :)</p>
        	</div>

        	<div class="col-md-5">
        		<div id="mc_embed_signup">
        			<form action="https://guiapaqueteria.us18.list-manage.com/subscribe/post?u=53f130fd26af58902090a2786&amp;id=b30009e1f3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        				<div id="mc_embed_signup_scroll">
        					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="correo electrónico" required>
        					<div style="position: absolute; left: -5000px;" aria-hidden="true">
        						<input type="text" name="b_53f130fd26af58902090a2786_b30009e1f3" tabindex="-1" value="">
        					</div>
        					<div class="clear">
        						<input type="submit" value="Suscribir" name="subscribe" id="mc-embedded-subscribe" class="button">
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
    </div>
</div>
-->
<!--FOOTER B -->
<footer role="contentinfo">
	<!--
		<div class="container">
	<div id="widget-footer" class="container foot">		
		<div class="row">
			<div class="col-12 col-sm-3 col-md-3 col-lg-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-3 col-md-3 col-lg-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-3 col-md-3 col-lg-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12 col-sm-3 col-md-3 col-lg-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5') ) : ?>
				<?php endif; ?>
			</div>	
		</div>
	</div>
</div>
-->
 <div class="container-fluid footHori">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hori') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid footSub">
	<div class="container">
		<div class="row">
			<div class="widget footer-horizontal col-12 col-sm-8 col-md-8 col-lg-8 widget_text">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hsx') ) : ?>
				<?php endif; ?>
			</div>
			<div class="widget footer-horizontal col-12 col-sm-4 col-md-4 col-lg-4   text-right widget_text">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hdx') ) : ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="row copy">
			<div class="widget footer-copy text-center col-12 col-sm-12 col-md-12 col-lg-12  widget_text">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</footer>

<?php
	wp_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lazy-load.js"></script>

</div>
</body>
</html>