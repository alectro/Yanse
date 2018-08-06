<?php
/*
 * Load languages from child theme
 *
 */
  function generate_press_child_setup() {
      load_child_theme_textdomain( 'yanse', get_stylesheet_directory() . '/languages' );
  }

  add_action( 'after_setup_theme', 'generate_press_child_setup' );


  function custom_excerpt(){
    $permalink = get_the_permalink( $id = 0, $leavename = false );
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 140);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <small><a href="' . $permalink . '">' . __('READ MORE', 'yanse') . '</a></small>';
    return $excerpt;
  }







  /**********************
  Add theme supports
   **********************/

  function yanse_theme_support() {	// Change names for your convinience

    /**
     *	WordPress Theme support
     *	@since	yanse 1
     *
     */
    add_theme_support( 'title-tag' );
    // content width
    if ( ! isset( $content_width ) ) $content_width = 1440;
    // Feeds
    add_theme_support('automatic-feed-links');
    // Add HTML5 Support
    add_theme_support( 'html5',
             array(
              'comment-list',
              'comment-form',
              'search-form',
             )
    );

    // Localization
      load_theme_textdomain('yanse', get_template_directory() . '/languages');
    	$locale = get_locale();
    	$locale_file = get_template_directory() . "/languages/$locale.php";
    	if ( is_readable( $locale_file ) )
    		require_once( $locale_file );
    	/* <?php _e( 'zzz', 'yanse' ); ?> */
    	/* <?php __( 'xxx', 'yanse' ); ?> */
    }

    // Post Thumbnails

    add_theme_support('post-thumbnails');

    //	Post Formats
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video' , 'audio', 'chat' ) );

    function yanse_post_formats( $template ) {
        if ( is_single() && has_post_format() ) {
            $post_format_template = locate_template( 'single-' . get_post_format() . '.php' );
            if ( $post_format_template ) {
                $template = $post_format_template;
            }
        }

        return $template;
    }
    add_filter( 'template_include', 'yanse_post_formats' );



  add_action('after_setup_theme', 'yanse_theme_support');

  /* end theme support */
  // Sidebars and Widgets
  function yanse_widgets_init() {
    $sidebars = array('Sidebar');
    foreach ($sidebars as $sidebar) {
        register_sidebar(array('name'=> $sidebar,
          'id' => 'Sidebar',
            'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
            'after_widget' => '</article>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
    }

    $sidebars = array('Footer');
    foreach ($sidebars as $sidebar) {
        register_sidebar(array('name'=> $sidebar,
          'id' => 'Footer',
            'before_widget' => '<div class="large-3 columns"><article id="%1$s" class="panel widget %2$s">',
            'after_widget' => '</article></div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
    }
  }
  add_action( 'widgets_init', 'yanse_widgets_init' );


  // return entry meta information for posts, used by multiple loops.
  if(!function_exists('yanse_entry_meta')) :
      function yanse_entry_meta() {
          echo '<span class="byline author">'. __('Written by', 'yanse') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .', </a></span>';
          echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
      }
  endif;
  ?>
