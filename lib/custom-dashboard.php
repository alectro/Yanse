<?php
function remove_menus(){

  $user = wp_get_current_user();
  $allowed_roles = array('editor', 'subscriber', 'author', 'contributor');

  // If in array
  if( array_intersect($allowed_roles, $user->roles ) ) {
     // Start removing items for the roles in array

     //remove_menu_page( 'index.php' );                    //Dashboard
     remove_menu_page( 'jetpack' );                        //Jetpack*
     remove_menu_page( 'edit.php' );                     //Posts
     //remove_menu_page( 'upload.php' );                     //Media
     //remove_menu_page( 'edit.php?post_type=page' );        //Pages
     remove_menu_page( 'edit-comments.php' );              //Comments
     //remove_menu_page( 'profile.php' );                    //Profile
     remove_menu_page( 'themes.php' );                     //Appearance
     remove_menu_page( 'plugins.php' );                    //Plugins
     remove_menu_page( 'users.php' );                      //Users
     remove_menu_page( 'tools.php' );                      //Tools
     remove_menu_page( 'options-general.php' );            //Settings
     //remove_menu_page('edit.php?post_type=homeslider');  // Custom post type 2
     remove_menu_page( 'gutenberg' );                      // gutenberg

  }
}
add_action( 'admin_menu', 'remove_menus' );




// Custom dashbpard buttons
function admin_dash() {
  // If an Admin is logged in
  if ( is_user_logged_in() && current_user_can('administrator')) {
      // Add dashboard button and...
      echo '<div class="editor hide-for-small-only"><span class="button normal secondary"><a href="' . get_dashboard_url() . '">' . __( 'Dashboard', 'yanse' ) . '</a></span>';
      // add Edit button
      edit_post_link(__( 'Edit', 'yanse'), '<span class="button normal ">', '</span></div>');
  }
}
?>
