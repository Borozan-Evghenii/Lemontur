<?php

function register_plugin_styles() {
	wp_enqueue_style( 'style', get_template_directory_uri().'./style.css' );
	wp_enqueue_script('script', get_template_directory_uri() . './assets/js/main.js', array(), null, true);
};
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

show_admin_bar(false);