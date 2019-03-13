<?php
//load all theme jquery script
function andier_theme_scripts() {
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array('jquery'), false, '', false);	
		wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-effects-core');
		wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/js/isotope.pkgd.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/superfish.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js',array(),'', 'in_footer');
		wp_enqueue_script( 'imagesloaded');
		wp_enqueue_script( 'andier_animate', get_template_directory_uri() . '/js/animate.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js',array(),'', 'in_footer');
		wp_enqueue_script( 'andier_customscript', get_template_directory_uri() . '/js/script.js',array(),'', 'in_footer');
		// Load the html5 shiv.		
		wp_enqueue_script( 'andier-html5','https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js', array(), '3.7.3' );
		wp_script_add_data( 'andier-html5', 'conditional', 'lt IE 9' );
}    




