<?php
function new_uses_enqueue_assets() {
  wp_enqueue_style( 'nu-core', get_template_directory_uri() . '/style.css', array('nu-app') );
  wp_enqueue_style( 'nu-app', get_template_directory_uri() . '/css/app.css', array() );

  wp_enqueue_script( 'nu-jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), null, true );
  wp_enqueue_script( 'nu-what-js', get_template_directory_uri() . '/bower_components/what-input/what-input.js', array('nu-jquery', 'nu-foundation-js'), null, true );
  wp_enqueue_script( 'nu-foundation-js', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js', array('nu-jquery'), null, true );
  wp_enqueue_script( 'nu-app-js', get_template_directory_uri() . '/js/app.js', array('nu-jquery', 'nu-foundation-js'), null, true );
}
add_action( 'wp_enqueue_scripts', 'new_uses_enqueue_assets' );

add_image_size ('home_links_thumb', 200, 200, true );

function create_posttype() {
    register_post_type( 'nu_department',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Departments' ),
                'singular_name' => __( 'Department' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'departments'),
            'menu_icon' => 'dashicons-building',
            'supports' => array( 'title', 'thumbnail', 'page-attributes' )
        )
    );
  register_post_type( 'nu_categories',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Categories' ),
                'singular_name' => __( 'Category' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'categories'),
            'menu_icon' => 'dashicons-index-card',
            'supports' => array( 'title', 'thumbnail', 'page-attributes')
        )
    );
  register_post_type( 'nu_item',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Items' ),
                'singular_name' => __( 'Item' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'items'),
            'menu_icon' => 'dashicons-products',
            'supports' => array( 'title', 'thumbnail', 'page-attributes')
        )
    );
    register_post_type( 'nu_style',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Styles' ),
                'singular_name' => __( 'Style' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'styles'),
            'menu_icon' => 'dashicons-art',
            'supports' => array( 'title', 'thumbnail', 'page-attributes')
        )
    );
  }
  
add_action( 'init', 'create_posttype' );
add_theme_support( 'post-thumbnails' );
?>