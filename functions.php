<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 600 );
	add_image_size( 'single-thumb', 800, 9999 ); //300 pixels wide (and unlimited height)
}

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
  register_nav_menus(
    array( 'graduate-programs-menu' => __( 'DNP Menu Menu' ) )
  );
  register_nav_menus(
    array( 'dihs-menu' => __( 'Phd in Interdisciplinary Health Sciences Menu' ) )
  );
  register_nav_menus(
    array( 'undergraduate-programs-menu' => __( 'Undergraduate Programs Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
?>