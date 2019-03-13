<?php

get_header(); ?>
        
		<!--HOME START-->
		<div id="home" class="clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'loop/menu'); ?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END--> 
        

		<?php while (have_posts()) : the_post(); ?>
        <!--SLIDER HOME START-->
        <div class="slider-box clearfix">
            <div class="slider home-slider  clearfix" data-auto-play="<?php echo esc_attr( get_post_meta($post->ID, 'slider_delay',  true));  ?>" 
            
            <?php if ( get_post_meta($post->ID, 'para_slide',  true) == 'on'){  ?>
            data-stellar-ratio="<?php echo esc_attr(get_post_meta($post->ID, 'para_ratio',  true));  ?>"
            <?php } ?>  >
                <?php 
                          /* get the about llist array */
                          $lists = get_post_meta($post->ID, 'slider_list',  true);
                          
                          if ( ! empty( $lists ) ) {
                            foreach( $lists as $list ) { ?>
                              
                              <div class="item slide image-background  slider-img-bg img-bg clearfix" 
                              data-background="<?php echo esc_url ( $list['slider_image']);  ?>" >
                                <div class="slider-mask"></div>
                                <div class="caption-box clearfix">
                                    <div class="top-left"><span class="shape"></span></div>
                                    <div class="top-right"><span class="shape"></span></div>
                                    
                                    <i class="fa <?php echo esc_attr( $list['slider_icon']);  ?>"></i>
                                    <div class="spacing40 clearboth"></div>
                                    <p class="top-slider"><?php echo esc_attr( $list['bottom_text']);  ?></p> 
                                    <h3><?php echo wp_kses_post( $list['title']);  ?></h3>
                                    
                                    <?php if ( $list['slider_link'] != '' && $list['slider_text'] != ''){  ?>
                                    <a href="<?php echo esc_url($list['slider_link']);  ?>" class="spc-btn slide-btn"><?php echo esc_attr($list['slider_text']);  ?></a>
                                    <?php } ?>
                                    
                                    <div class="clearfix spacing40"></div>
                                    
                                    <div class="bot-left"><span class="shape"></span></div>
                                    <div class="bot-right"><span class="shape"></span></div>
                                    
                                </div><!--/.caption-box-->
                              </div><!--/.slide-->
                            <?php } } ?>
                
                    
                  
                
                
                
            </div><!--/.slider-->
        </div><!--/.slider-box-->
        <!--SLIDER HOME END-->                      
        
        <?php endwhile; ?>

        
<?php  get_footer(); ?>