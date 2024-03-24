<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/virtualpages/VirtualPages.php',
  'lib/icons.php',

  'lib/helpers.php',   // Helper functions
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php',// Theme customizer
  'lib/images.php',
  'lib/emails.php',
  'lib/acf.php',
  'lib/oembed.php',    // OEmbed overrides
  'lib/woocommerce.php',
  'lib/woocommerce-account-endpoints.php',
  'lib/ajax-search.php',
  'lib/rest.php',
  'lib/wp-login.php',

  //documentation by mbc
  // 'lib/documentation/helper.php',
  'lib/learndash-docs.php',


  //'lib/forms-features.php',
  //'lib/forms.php',
  //'lib/forms/example.php',

  'lib/gallery.php',  // Bootstrap version of WP Gallery
  'lib/hacks.php',
  'lib/bootstrap-navwalker.php',
  // 'lib/contact-locations.php',
  'lib/theme-settings-socials.php',
  'lib/shortcodes.php',
  'lib/social-feed.php',
  'lib/facetwp.php',
  // 'lib/tinymce.php',
  //'lib/loadinframe.php', // Uncomment to make products open into lightboxes again
  'lib/beaver-builder.php',
  'lib/beaver-builder-module-overrides.php',
  'lib/gravityforms.php',
  //CPT
  'lib/cpt-portfolio.php',
];

/**
 * Helper function for prettying up errors (ported from Sage 9)
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
  $title = $title ?: __('Sage &rsaquo; Error', 'sage');
  $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p>";
  wp_die($message, $title);
};

/**
 * Ensure required plugins are activated
 */
$required_classes = [
  // Class           => Nice Name
  'ACF'              => 'Advanced Custom Fields',
];
if ( !empty( $required_classes ) ) {
  $missing_plugins = [];
  foreach ( $required_classes as $class_name => $plugin_name ) {
    if ( !class_exists( $class_name ) ) {
      $missing_plugins[] = sprintf( '%s', $plugin_name );
    }
  }
  if ( !empty( $missing_plugins ) ) {
    if ( is_admin() || $GLOBALS['pagenow'] === 'wp-login.php' ) {
      $admin_notices = '';
      foreach ( $missing_plugins as $message ) {
        $admin_notices .= sprintf( '<div class="notice notice-error"><p><strong>Theme Error:</strong> Plugin <em>%s</em> is either not installed or not activated.</p></div>', esc_html( $message ) );
      }
      add_action( 'admin_notices', function () use ( $admin_notices ) { echo $admin_notices; } );
    } elseif ( defined( 'WP_CLI' ) && WP_CLI ) {
      $cli_notices = implode( ', ', $missing_plugins );
      trigger_error( 'Theme Error: One or more plugins are either not installed or not activated: ' . $cli_notices, E_USER_WARNING );
      return;
    } else {
      $user_notices = implode( '</p><p>', array_map( 'esc_html', $missing_plugins ) );
      $user_notices .= sprintf( '</p><p><a href="%s" target="_blank">Go to plugins</a>', admin_url( 'plugins.php' ) );
      $sage_error( $user_notices, 'One or more plugins are either not installed or not activated.', 'Theme Error' );
    }
  }
}

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// ====================================
// Custom post type singular menu active class
// ====================================
function add_current_nav_class($classes, $item) {
  // Getting the current post details
  global $post;
  // Getting the post type of the current post
  $current_post_type = get_post_type_object(get_post_type($post->ID));
  $current_post_type_slug = $current_post_type->rewrite['slug'];
   
  // Getting the URL of the menu item
  $menu_slug = strtolower(trim($item->url));
   
  // If the menu item URL contains the current post types slug add the current-menu-item class
  if (strpos($menu_slug,$current_post_type_slug) !== false) {
  $classes[] = 'current-menu-item';
  }
  else if( is_single() && $item->title == 'portfolio' )
  {
  // Blog page set active menu
  $classes[] = 'current-menu-item';
  }
  // Return the corrected set of classes to be added to the menu item
  return $classes;
  }
  //add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );



  /*
* Define a constant path to our single template folder
*/
define("SINGLE_PATH", TEMPLATEPATH . '/single');
  
/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');
  
/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;
  
/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :

  
if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
  
elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
  
endforeach;
}

