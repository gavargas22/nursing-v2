<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 600 );
	add_image_size( 'single-thumb', 800, 9999 ); //300 pixels wide (and unlimited height)
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'graduate-programs-menu' => __( 'DNP Menu Menu' ),
      'dihs-menu' => __( 'Phd in Interdisciplinary Health Sciences Menu' ),
      'msn-menu' => __( 'MSN Programs Menu' ),
      'undergraduate-programs-menu' => __( 'Undergraduate Programs Menu' ),
	  'apply-masters-menu' => __( 'Apply Masters Program Page' ),
	  'gcp-menu' => __( 'Graduate Certificate Programs Menu' ),
	  'sa-important-links' => __( 'Student Affairs Important Links Page' )
    )
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

function my_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
?>