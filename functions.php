<?php

// Including venue theme CSS & JQuery Files
function template_files(){
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap-4.1.2/bootstrap.min.css', array(), '4.1.2', 'all' );

    wp_register_style( 'font-awesome', get_template_directory_uri() . '/plugins/font-awesome-4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all' );

    wp_register_style( 'owl-carousel', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.carousel.css', array(), '2.2.1', 'all' );

    wp_register_style( 'owl-carousel-theme', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/owl.theme.default.css', array(), '2.2.1', 'all' );

    wp_register_style( 'animate', get_template_directory_uri() . '/plugins/OwlCarousel2-2.2.1/animate.css', array(), '2.2.1', 'all' );

    wp_register_style( 'colorbox', get_template_directory_uri() . '/plugins/colorbox/colorbox.css', array(), '1.0.0', 'all' );

    wp_register_style( 'date-picker', get_template_directory_uri() . '/plugins/jquery-datepicker/jquery-ui.css', array(), '1.0.0', 'all' );

    wp_register_style( 'time-picker', get_template_directory_uri() . '/plugins/jquery-timepicker/jquery.timepicker.css', array(), '1.0.0', 'all' );

    wp_register_style( 'main', get_template_directory_uri() . '/styles/main_styles.css', array(), '1.0.0', 'all' );

    wp_register_style( 'responsive', get_template_directory_uri() . '/styles/responsive.css', array(), '1.0.0', 'all' );


    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'owl-carousel' );
    wp_enqueue_style( 'owl-carousel-theme' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'colorbox' );
    wp_enqueue_style( 'date-picker' );
    wp_enqueue_style( 'time-picker' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'responsive' );
}
add_action('wp_enqueue_scripts', 'template_files');