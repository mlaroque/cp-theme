<!--HEADER B -->
<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LCtheme2020
 */

 global $post;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elements.css">
<?php if(is_front_page()):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/portada.css">
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cp.css">
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PKGJVTM');
    </script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKGJVTM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="<?php bloginfo( 'name' ); ?>" />
            </a>

<!-- buscador codigos postales -->
            <?php echo do_shortcode('[CP_buscador_codigos_postales]');?>

           <!-- <div class="navbar-toggler hamburger_wrapper">
                <div id="lc_hamburger" class="navbar-toggler" tabindex="1" role="button" onclick="hamburger_toggle();">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

      <div class="openLg" id="lc_nav-menu">

        <?php wp_nav_menu(array(
                           'theme_location' => 'header',
                           'container' => false,
                           'walker' => new LCMN_Walker(),
                           'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto">%3$s</ul>') )?>
      </div>
  -->
    </div>
  </nav>
</header>

<script type="text/javascript">
    
    function hamburger_toggle(){
        var element = document.getElementById("lc_hamburger");
        element.classList.toggle("close");

        var element = document.getElementById("lc_nav-menu");
        element.classList.toggle("now-active");

    }

</script>