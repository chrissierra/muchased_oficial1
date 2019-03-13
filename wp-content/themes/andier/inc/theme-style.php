<?php
function andier_theme_styles()  
{ 
  // Register the style for the theme
  wp_register_style
    ('bootstrap', 
    get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('font_awesome', 
    get_template_directory_uri() . '/css/font-awesome.min.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('magnific-popup', 
    get_template_directory_uri() . '/css/magnific-popup.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('owl_carousel', 
    get_template_directory_uri() . '/css/owl.carousel.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('preloader', 
    get_template_directory_uri() . '/css/preloader.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('animate', 
    get_template_directory_uri() . '/css/animate.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('andier-theme-style', 
    get_stylesheet_directory_uri() . '/style.css', 
    array(), 
    '1', 
    'all' );



  // enqueing:
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('font_awesome');
  wp_enqueue_style( 'magnific-popup' );
  wp_enqueue_style( 'owl_carousel' );
  wp_enqueue_style( 'animate' );
  wp_enqueue_style( 'preloader' );
  wp_enqueue_style( 'andier-theme-style' );
}

//google font
/*
Register Fonts
*/
function andier_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'andier' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:400,700,600,800&subset=latin,cyrillic-ext,greek-ext,greek,cyrillic,latin-ext,vietnamese|Raleway:700,800&amp;subset=latin-ext|Playfair Display:400,400i,700,700i&amp;subset=cyrillic,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}
/*
Enqueue scripts and styles.
*/
function andier_fonts_style() {
    wp_enqueue_style( 'andier-fonts', andier_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'andier_fonts_style' );
