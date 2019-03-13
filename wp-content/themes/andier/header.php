<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >	
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <!--  Favicon -->
	<?php
	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
	
		// Output old, custom favicon feature.
		 if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'favicon_logo')) :  ?>
			<link rel="shortcut icon" href="<?php echo esc_url( ot_get_option( 'favicon_logo')); ?>"/>
			<?php  else :  ?>
			<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/images/favicon.png" />
			<?php endif ; endif;
		}
     ?>
    <!--  Icon Touch -->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'touch_logo')) :  ?>
    <link rel="apple-touch-icon" href="<?php echo esc_url( ot_get_option( 'touch_logo')); ?>"/>
    <?php  else :  ?>
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/images/favicon-touch.png" />
    <?php endif ; endif; ?>	
	<?php wp_head(); ?> 
</head>

	<body <?php body_class(); ?>>
	
				<!--preloader function-->
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'preloader_set')) :  
                 $andier_preload = ot_get_option( 'preloader_set' ); if ($andier_preload == 'show_home') {  ?>
                    
                    <?php  if (is_front_page() ){ ?>
                        	<!-- Preloader -->
                            <div id="preloader">
                                <div id="status">
                                    <div class="sk-cube-grid">
                                      <div class="sk-cube sk-cube1"></div>
                                      <div class="sk-cube sk-cube2"></div>
                                      <div class="sk-cube sk-cube3"></div>
                                      <div class="sk-cube sk-cube4"></div>
                                      <div class="sk-cube sk-cube5"></div>
                                      <div class="sk-cube sk-cube6"></div>
                                      <div class="sk-cube sk-cube7"></div>
                                      <div class="sk-cube sk-cube8"></div>
                                      <div class="sk-cube sk-cube9"></div>
                                    </div>
                                </div><!--status-->
                                
                            </div><!--/preloader-->
                    
                    <?php } 
                } else if ($andier_preload == 'show_all') {?>
                
                       	<!-- Preloader -->
                        <div id="preloader">
                            <div id="status">
                                <div class="sk-cube-grid">
                                  <div class="sk-cube sk-cube1"></div>
                                  <div class="sk-cube sk-cube2"></div>
                                  <div class="sk-cube sk-cube3"></div>
                                  <div class="sk-cube sk-cube4"></div>
                                  <div class="sk-cube sk-cube5"></div>
                                  <div class="sk-cube sk-cube6"></div>
                                  <div class="sk-cube sk-cube7"></div>
                                  <div class="sk-cube sk-cube8"></div>
                                  <div class="sk-cube sk-cube9"></div>
                                </div>
                            </div><!--status-->
                            
                        </div><!--/preloader-->
                
                <?php  } endif ; endif; ?>