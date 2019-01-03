<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	// parent css
    $parent_style = 'parent-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // child css
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    // js
    wp_enqueue_script( 'child-script', 
    	get_stylesheet_directory_uri() . '/js/script.js', 
    	array( 'jquery' ),
    	wp_get_theme()->get('Version'),
    	true 
    );
}


