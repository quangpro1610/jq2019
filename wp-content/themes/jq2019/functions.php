<?php
/**
 * Proper way to enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'jq2019_name_scripts' );
function jq2019_name_scripts() {
	wp_enqueue_style( 'jq2019-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700', array(), null, 'all' );
    wp_enqueue_style( 'jq2019-bootstrap',  get_template_directory_uri() . '/css/bootstrap.css', array(), null, 'all' );
	wp_enqueue_style( 'jq2019-font-awesome',  get_template_directory_uri() . '/css/font-awesome.css', array(), null, 'all' );
	wp_enqueue_style( 'jq2019-style',  get_template_directory_uri() . '/css/custom.css', array(), null, 'all' );
    //wp_enqueue_script( 'jq2019-js', get_template_directory_uri() . '/js/example.js', array(), null, true );
}
register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'jq2019' ),
    'secondary' => __( 'Secondary Menu', 'jq2019' )
) );