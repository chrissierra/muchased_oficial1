<?php
/*
* One Page menu 
*/
?>
			<!--HEADER START-->
            <?php  if ( get_post_meta($post->ID, 'menu_position', true) == 'head_absolute'){ ?>
            <nav class="header home-section clearfix ">
            <?php } else if ( get_post_meta($post->ID, 'menu_position', true) == 'head_relative') { ?>
            <nav class="header clearfix ">
            <?php } else if ( get_post_meta($post->ID, 'menu_position', true) == 'head_sticky') { ?>
            <nav class="for-sticky header home-section clearfix ">
            <?php } ?>
			
            	
            	<?php  if ( get_post_meta($post->ID, 'menu_format', true) == 'head_standard'){ ?>
                <div class="nav-head">
                <?php } else if ( get_post_meta($post->ID, 'menu_format', true) == 'head_white') { ?>
                <div class="white-nav nav-head">
                <?php } else if ( get_post_meta($post->ID, 'menu_format', true) == 'white_trans') { ?>
                <div class="white-nav trans-nav nav-head">
                <?php } else if ( get_post_meta($post->ID, 'menu_format', true) == 'head_black') { ?>
                <div class="dark-nav nav-head">
                <?php } else if ( get_post_meta($post->ID, 'menu_format', true) == 'head_hovblack') { ?>
                <div class="trans-nav bg-nav nav-head">
                <?php } else {?>
                <div class="blog-header">
                <?php } ?>
						<div class="container nav-box">
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php if ( get_post_meta($post->ID, 'menu_format', true) == 'head_white' || get_post_meta($post->ID, 'menu_format', true) == 'white_trans'){?>
									<img alt="logo" class="logo-img" src="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'logo_white_img' ) ) 
									{ echo esc_url ( ot_get_option( 'logo_white_img' )); } else { echo get_template_directory_uri(); ?>/images/logo-dark.png <?php } ?>">
                                    <?php } else {?>
									<img alt="logo" class="logo-img" src="<?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'logo_img' ) ) 
									{ echo esc_url ( ot_get_option( 'logo_img' )); } else { echo get_template_directory_uri(); ?>/images/logo.png <?php } ?>">
                                    <?php } ?>
                                
								</a>
							</div>
							<div class="menu-box hidden-xs hidden-sm">
								<?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="home-nav one-page-menu navigation %2$s">%3$s</ul>', 'theme_location' => 'ridianur-onepage-menu' ) ); ?>
							</div><!--/.menu-box-->
							<div class="box-mobile hidden-lg hidden-md">
								<div class="menu-btn" data-toggle="collapse" data-target=".nav-collapse">
									<span class="fa fa-bars"></span>
								</div>
								<ul class="nav-collapse mobile-menu hidden-lg hidden-md"></ul>
							</div><!--/.box-mobile-->	
						</div><!--/.container-->
					</div><!--/.for-sticky-->
			</nav><!--/.header-->
			<!--HEADER END-->
            
            
         