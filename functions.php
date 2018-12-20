<?php
require_once get_template_directory() . '/inc/tgm.php';
function theme_set_hexa(){
load_theme_textdomain( 'hexa');
add_theme_support('custom-background');
register_nav_menu('top_menuid',__('Top Menu','hexa'));
add_theme_support( 'post-thumbnails');
add_theme_support( 'title-tag');
add_theme_support( 'post-formats', array('search-form' ,'comment-list') );
add_theme_support( 'html5', array('image' ,'video','audio') );
}
add_action('after_setup_theme','theme_set_hexa');

function hexa_assets(){
   
	           // wp_enqueue_style('style',get_stylesheet_uri());
wp_enqueue_style("Creative-google-Font","https://fonts.googleapis.com/css?family=Droid+Serif:400,400i");
wp_enqueue_style("Creative-google-Fonts","https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i");
wp_enqueue_style("Creative-font-awesome","https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
wp_enqueue_style( 'Hexa-normalize', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/normalize.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-component', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/component.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-bootstrap', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/bootstrap.min.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-countrySelect', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/countrySelect.min.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-animate', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/animate.min.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-owl-carousel', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/owl.carousel.min.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-jquery-fancybox', get_template_directory_uri() . '/assets/stylesheets/vendor/resources/jquery.fancybox.min.css', array(), '2.1.2' );
wp_enqueue_style( 'Hexa-custom-css', get_template_directory_uri() . '/assets/stylesheets/main.css', array(), '2.1.2' );

wp_enqueue_script( 'Hexa-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array( '' ), NULL, TRUE );
wp_enqueue_script( 'Hexa-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), NULL, TRUE );
wp_enqueue_script( 'Hexa-scrollreveal', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), NULL, TRUE );

 }
add_action('wp_enqueue_scripts','hexa_assets');



?>