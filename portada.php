<?php /* Template Name: Portada */ ?>

<?php 
get_header(); 
global $post;
$purified_content = apply_filters('the_content', $post->post_content); 


$args = array(
	'post_type' => 'codigos-postales',
	'posts_per_page' => -1,
	'post_parent' => 0,
	'orderby' => 'title',
	'order' => 'ASC',
	// 'post_status' => 'any', //ELIMINAR.. SOLO DE PRUEBAS
	'post__not_int' => array($post->ID) //DESCOMENTAR, ESTE SI VA
);
$estados_cp = get_posts($args);
?>
<?php ob_start();?>
	<div class="row">
		<div class="col--xs-12 col-sm-12 col-md-12 col-lg-12 CPlistR">
			<ul>
				<?php foreach($estados_cp as $estado):?>
				<li><a href="<?php echo get_permalink($estado->ID)?>"> <?php echo $estado->post_title; ?></a></li>
				<?php endforeach; ?>

			</ul>
		</div>
	</div>

<?php
$listado_estados = ob_get_clean();
$purified_content = preg_replace('/<h2>Encuentra Códigos Postales.*<\/h2>/', '$0'.$listado_estados, $purified_content);
?>

<div class="container topCont">
	<div class="row">
		<div class="col-12 text-center"><br>
			<h1>Códigos Postales México</h1>

		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<?php 
			if ( have_posts() ) : 
				while ( have_posts() ) : the_post();
					echo $purified_content;
				endwhile; 
			else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php  
$json_file = dirname(__FILE__, 3). '/plugins/codigos-postales/data/shortcode_name.json';

$json = json_decode( file_get_contents($json_file), true );
$URL_cotizador = $json['shortcode_1'];

?>

<?php if($URL_cotizador):?>

<div class="container-fluid shadow CPcta">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">
                <img src="<?php echo get_template_directory_uri() . '/images/CPcta.svg'; ?>" />     
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 text-center">
                <h2>¿Necesitas hacer un envío?</h2>

                <a class="btn btn-CPcta tdn shadow" href="<?php echo $URL_cotizador; ?>">Cotiza Ahora</a>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<div class="clearfix"></div>
 
<?php get_footer(); ?>
