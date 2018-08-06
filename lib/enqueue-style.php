<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/

function yanse_enqueue_style()
{
	// foundation stylesheet
	wp_register_style( 'yanse-foundation-stylesheet', get_stylesheet_directory_uri() . '/css/app.css', array(), '' );
	wp_enqueue_style( 'yanse-foundation-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'yanse_enqueue_style' );

?>
