<?php

function venue_theme_menus(){
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ),'');
}
add_action( 'init', 'venue_theme_menus' );

function venue_default_main_menu(){
    echo '<ul class="d-flex flex-row align-items-center justify-content-start">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
}