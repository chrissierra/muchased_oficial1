<?php 
/*
*single portfolio page
*/

get_header(); ?>
		<!--HEADER START-->
        <?php get_template_part( 'loop/menu' ); ?>
        <!--HEADER END-->
        
        
        <div class="slider-box clearfix">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="slider-img-bg img-bg" data-background="<?php if (get_post_meta($post->ID, 'port_big_bg', true)== '')
                                {echo the_post_thumbnail_url();} else
                                {echo esc_url( get_post_meta($post->ID, 'port_big_bg', true));} ?>" 
                                
                                <?php if (get_post_meta($post->ID, 'port_para', true)!= 'off') { ?>
                                    data-stellar-ratio="<?php if (get_post_meta($post->ID, 'port_para_rate', true)== '') { echo '0.8'; } 
                                    else {echo esc_attr( get_post_meta($post->ID, 'port_para_rate', true)); } ?>"
                                <?php } ?>
                                >
                <!--HERO  START-->
                <div class="hero-box  hero-head-bg container">	
                    <div class="small-caption-box">
                        <?php $ridianur_taxonomy = 'portfolio_category'; $ridianur_terms = wp_get_post_terms($post->ID,$ridianur_taxonomy);  ?> 
                        <p class="smal-caption-sub"><?php $cats = array();  foreach ( $ridianur_terms as $ridianur_term ) { $cats[] =   $ridianur_term->name ;   } echo implode(', ', $cats);?></p>
                        
                        <h3 class="hero-box-title animated" data-animated="fadeInUp"><?php the_title(); ?>
                        <i class="fa <?php echo esc_attr( get_post_meta($post->ID, 'port_icon', true)); ?>"></i></h3>
                        
                        <p><?php echo esc_attr( get_post_meta($post->ID, 'port_text_bottom', true)); ?></p>
                        
                    </div><!--/.small-caption-box-->
                </div><!--/.hero-box-->
                <!--HERO  END-->
                <div class="slider-mask"></div>
            </div>
            <?php endwhile; endif; ?>
        </div>    
            
		<div class="content clearfix">
            <div class="container">
            	<div class="worksajax clearfix">
                    <div class="work-content" >
                    
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                            
                            
                            <!--if portfolio is standard-->
                            <?php  if ( get_post_meta($post->ID, 'port_format', true) == 'port_standard'){ ?>
                            <?php  if ( get_post_meta($post->ID, 'port_image_setting', true)!= ''){ ?>
                            <img alt="" src="<?php echo esc_url( get_post_meta($post->ID, 'port_image_setting', true)); ?>">
                            <!--show featured image if no big image-->
                            <?php } else { the_post_thumbnail(); }?>
                            
                             <!--if portfolio is gallery-->
                            <?php } else if ( get_post_meta($post->ID, 'port_format', true) == 'port_gallery'){ 
                            echo '<div class="portfolio-gallery clearboth clearfix">';
                                $image_ids = get_post_meta(get_the_ID(), 'port_gallery_setting', true);
                                $image_ids = explode( ',', $image_ids );
                                foreach( $image_ids as $image_id ) {
                                    $image_title  = get_the_title( $image_id );
                                    $image_port = wp_get_attachment_image( $image_id, 'full' );
                                    $imageurl     = esc_url(wp_get_attachment_url( $image_id )); 
                                    echo '<div>
                                            <a class="popup-img" href="' . $imageurl . '">
                                                <span>
                                                <i class="fa fa-search"></i>
                                                </span>
                                                ' . $image_port . '
                                            </a>
                                        </div>';
                            } echo'</div>';
                            
                            //if portfolio is slider
                            }else if ( get_post_meta($post->ID, 'port_format', true) == 'port_slider'){
                                echo'<div class="slider">';
                                $simage_ids = get_post_meta(get_the_ID(), 'port_slider_setting', true);
                                $simage_ids = explode( ',', $simage_ids );
                                foreach( $simage_ids as $simage_id ) {
                                    $simage_port = wp_get_attachment_image( $simage_id, 'full' );
                                    echo '<div class="slide">' . $simage_port . '</div>';
                                }
                                echo'</div>'; 
                                
                            //if portfolio video	
                            } else if ( get_post_meta($post->ID, 'port_format', true) == 'port_video'){ 
                            echo'<div class="video"><iframe width="560" height="315" 
                            src="'.esc_url(get_post_meta($post->ID, 'port_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
                            
                            //if portfolio audio
                            } else if ( get_post_meta($post->ID, 'port_format', true) == 'port_audio'){ 
                            $audio = get_post_meta($post->ID, 'port_audio_setting', true); ?> 
                            <div class="audio">
                            <?php echo wp_kses( $audio, array( 
                                'iframe' => array(
                                        'src' => array(),
                                        'width' => array(),
                                        'height' => array(),
                                        'scrolling' => array(),
                                        'frameborder' => array(),
                                    ),
                            ) ); ?>
                            </div>
                            <?php }?>
                        
                        <div class="spacing20 single-40"></div>    
                        <div class="single-hidden">  
                            <h3 class="work-title no-break"><i class="fa fa <?php echo esc_attr( get_post_meta($post->ID, 'port_icon', true)); ?>"></i><?php the_title(); ?></h3>
                            <?php $ridianur_taxonomy = 'portfolio_category'; $ridianur_terms = wp_get_post_terms($post->ID,$ridianur_taxonomy);  ?> 
                            <p class="sub-content"><?php $cats = array();  foreach ( $ridianur_terms as $ridianur_term ) { $cats[] =   $ridianur_term->name ;   } echo implode(', ', $cats);?></p>
                        </div><!--/.single-hidden-->
                    
                        
                        <?php the_content(); ?>
                        <div class="spacing40"></div>
                        
                        <?php if ( get_post_meta($post->ID, 'port_item_btn_text', true) !='' && get_post_meta($post->ID, 'port_item_btn_link', true) != ''){?>
                        <a class="go-btn" href="<?php echo  esc_url(get_post_meta($post->ID, 'port_item_btn_link', true)); ?>">
                        <?php echo  esc_attr( get_post_meta($post->ID, 'port_item_btn_text', true)); ?> <i class="fa fa-long-arrow-right"></i>
                        </a>	
                        <?php } ?>
                            
                        <i class="fa fa-times ic-close"></i>
                        <div class="clearboth"></div>
            			<div class="spacing40"></div>
                        
                        <?php endwhile; endif; ?>
                        
            			
                        
                    </div><!--/.work-content-->
          
                </div><!--/.worksajax-->
                
                <?php 
 
						// get the custom post type's ridianur_taxonomy terms
						$custom_taxterms = wp_get_object_terms( $post->ID, 'portfolio_category', array('fields' => 'ids') );
						// arguments
						$args = array(
						'post_type' => 'portfolio',
						'post_status' => 'publish',
						'posts_per_page' => 3, 
						'orderby' => 'rand',
						'tax_query' => array(
							array(
								'taxonomy' => 'portfolio_category',
								'field' => 'id',
								'terms' => $custom_taxterms
							)
						),
						'post__not_in' => array ($post->ID),
						);
						$related_items = new WP_Query( $args );
						// loop over query
						if ($related_items->have_posts()) : ?>
                
       			<div class="other-portfolio clearfix animated" data-animated="fadeIn">
                    <h3 class="op-title"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'other_port_title' ) !='')
					{ echo esc_attr ( ot_get_option( 'other_port_title' )); } else { esc_html_e('Other portfolio','andier');} ?></h3>
                    <p class="op-sub"><?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'other_port_sub' ) !='')
					{ echo esc_attr ( ot_get_option( 'other_port_sub' )); } else { esc_html_e('Other portfolio','andier');} ?></p>
                    
                    	
						
						<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
						<div class="col-sm-4 port-item design photography">
                            <a class="port-box" href="<?php the_permalink(); ?>">
                                <div class="port-hover">
                                    <div class="port-inner">
                                        <h3><?php the_title(); ?> </h3>
                                         <?php $ridianur_taxonomy = 'portfolio_category'; $args = array('number' => '1',); 
                                                $ridianur_taxs = wp_get_post_terms($post->ID,$ridianur_taxonomy,$args);  ?> 
                                         <p><?php $ridianur_cats = array();  foreach ( $ridianur_taxs as $ridianur_tax ) { $ridianur_cats[] =   $ridianur_tax->name ;   } 
                                         echo implode(', ', $ridianur_cats);?></p>
                                    </div><i class="fa <?php echo esc_attr( get_post_meta($post->ID, 'port_icon', true)); ?>"></i>
                                </div><!--/.port-hover-->
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
						<?php endwhile; ?>
                   </div><!--/.other-portfolio-->       
                   <?php  endif; wp_reset_postdata(); ?>  
                   <div class="row">
                        <div class="clearboth spacing40"></div>
                            <div class="col-md-6">
                            	<?php if(get_adjacent_post(false, '', true)) {?>
                                <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="port-page"><i class="fa fa-long-arrow-left"></i> 
                                <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'prev_btn' ) !=''){ echo ot_get_option( 'prev_btn' ); } else {_e('Previous Works','andier');} ?></a>
                                <?php } ?>
                            </div><!--/.col-md-6-->
                            
                            <div class="col-md-6 align-right">
                            	<?php if(get_adjacent_post(false, '', false)) {?>
                                <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="port-page">
                                <?php if ( function_exists( 'ot_get_option' )&& ot_get_option( 'next_btn' ) !=''){ echo ot_get_option( 'next_btn' ); } else {_e('Next Works','andier');} ?> 
                                 <i class="fa fa-long-arrow-right"></i></a>
                                <?php } ?>
                            </div><!--/.col-md-6-->
                            <div class="clearboth spacing40"></div>
                            
                    </div><!--/.row-->
                    <!-- begin custom related loop, isa -->
 

 

                
                
            </div><!--container-->
        </div><!--content-->
 <?php  get_footer(); ?> 