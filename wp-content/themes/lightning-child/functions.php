<?php
function theme_enqueue_scripts() {

wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css');
wp_enqueue_style( 'common-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array( 'lightning-common-style' )  );

wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '', true);
wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
