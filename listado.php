<?php /* Template Name: Listado */ ?>
 
<?php get_header();  ?>

<div class="container container-top">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php get_template_part("post_templates/widgets/breadcrumbs"); ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><?php echo $post->post_title; ?></h1>
    </div>
  </div>
</div>

<?php


?>
 


<div class="container">
  <div class="row my-40">
    <div class="col-12">
    <?php the_content(); ?> 
    </div>
  </div>
</div>
<?php get_footer(); ?>