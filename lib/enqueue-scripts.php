<?php
function yanse_scripts()
{
    if ( !is_admin() )
    {
      wp_deregister_script('jquery');
  		wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery-min.js', '3', false);
  		wp_enqueue_script('jquery');

  		// Foundation
  		wp_enqueue_script('foundation', get_stylesheet_directory_uri() . '/js/foundation.min.js', array('jquery'), '6.4.3', true);
  		// app Foundation
  		wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.min.js', array('jquery'), '1.1', true);
    }
}
add_action( 'wp_enqueue_scripts', 'yanse_scripts');

/* async */
function async_scripts( $tag, $handle, $src ) {

    $async_scripts = array( 'jquery', 'app' );

    if ( in_array( $handle, $async_scripts ) ) {
        return '<script type="text/javascript" src="' . $src . '" async></script>' . "\n";
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'async_scripts', 10, 3 );

/*function to add async to all scripts
http://orbitingweb.com/blog/add-defer-async-attributes-to-scripts-in-wordpress/
*/
/*
function js_async_attr($tag){
 # Add async to all remaining scripts
 return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'js_async_attr', 10 );
*/
?>
