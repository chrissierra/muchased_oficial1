<?php get_header(); ?>
        
		<!--HOME START-->
		<div id="home" class="clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'loop/menu','search'); ?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END--> 

    <div class="content blog-wrapper">  
        <div class="container clearfix">
             <div class="row clearfix">
                <div class="col-md-7 blog-content">
                	<h3 class="search-title"><?php esc_html_e('Search result for ', 'andier'); the_search_query(); ?>:</h3>
                	<!--BLOG POST START-->
                    <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                    
						<article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix blog-post'); ?>>
							 
							 <!--if post is standard-->
                             <?php  if ( get_post_meta($post->ID, 'post_format', true) == ''){ the_post_thumbnail(); }?>
							 <?php  if ( get_post_meta($post->ID, 'post_format', true) == 'post_standard'){ ?>
								 <?php  the_post_thumbnail(); ?>
								<!--if post is gallery-->
								<?php } else if ( get_post_meta($post->ID, 'post_format', true) == 'post_gallery'){ 
								echo '<div class="portfolio-gallery clearboth clearfix">';
									$andier_image_ids = get_post_meta(get_the_ID(), 'post_gallery_setting', true);
									$andier_image_ids = explode( ',', $andier_image_ids );
									foreach( $andier_image_ids as $andier_image_id ) {
										$andier_image_title  = get_the_title( $andier_image_id );
										$andier_image_port = wp_get_attachment_image( $andier_image_id, 'full' );
										$andier_imageurl     =  esc_url( wp_get_attachment_url( $andier_image_id )); 
										echo '<div>
												<a class="popup-img" href="' . $andier_imageurl . '">
													<span>
													<i class="fa fa-search"></i>
													</span>
													' . $andier_image_port . '
												</a>
											</div>';
								} echo'</div>';
								
								//if post is slider
								}else if ( get_post_meta($post->ID, 'post_format', true) == 'post_slider'){
									echo'<div class="blog-slider owl-carousel owl-theme" data-auto-play="7000">';
									$andier_simage_ids = get_post_meta(get_the_ID(), 'post_slider_setting', true);
									$andier_simage_ids = explode( ',', $andier_simage_ids );
									foreach( $andier_simage_ids as $andier_simage_id ) {
										$andier_simage_port = wp_get_attachment_image( $andier_simage_id, 'full' );
										echo '<div class="slide">' . $andier_simage_port . '</div>';
									}
									echo'</div>'; 
									
								//if post video	
								} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_video'){ 
								echo'<div class="video"><iframe width="570" height="300" 
								src="'.esc_attr( get_post_meta($post->ID, 'post_video_setting', true)).'?wmode=opaque;rel=0;showinfo=0;controls=0;iv_load_policy=3"></iframe></div>';
								
								//if post audio
								} else if ( get_post_meta($post->ID, 'post_format', true) == 'post_audio'){ ?>
								<div class="audio">
								<?php $andier_audio =get_post_meta($post->ID, 'post_audio_setting', true);
								echo wp_kses( $andier_audio, array( 
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
							 
							 <div class="spacing20 clearfix"></div>
                             <a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
                             
							 <ul class="post-detail">
                             	<?php if(get_the_category_list()) { ?> 
							 		<li class="postarch"><i class="fa fa-archive"></i> <?php the_category(', '); ?></li>
                                <?php }?>
                                								
								<?php if(get_the_tag_list()) { ?> 
									<li class="posttag"><i class="fa fa-tags"></i>
										<?php the_tags('', ', '); ?>
									</li>
								<?php }?>
								<li class="postcal"><i class="fa fa-calendar-o"></i> <?php echo get_the_date();  ?> </li>
							  </ul>
							 <div class="spacing40 clearfix"></div>
							 
							 
							 <?php the_excerpt(); ?>
							 <div class="spacing20 clearfix"></div>
							 <a class="go-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('View Post','andier') ?></a>
							 <div class="border-post clearfix"></div>
							 <div class="clearboth spacing40"></div>
						</article><!--/.blog-post-->
                    <?php endwhile; else: ?>
                    <p><?php esc_html_e('Sorry, no results found. ','andier'); ?></p>
                    <?php endif; ?>
                    <!--BLOG POST END-->
                    
                    <ul class="pagination clearfix">
                        <li><?php  previous_posts_link();  ?></li>
                        <li><?php next_posts_link(); ?> </li>
                    </ul>
                    <div class="spacing40 clearfix"></div>
                </div><!--/.col-md-8-->
                
                <?php get_sidebar(); ?>
             </div><!--/.row-->
        </div><!--/.container-->
	</div><!--/.blog-wrapper-->

    <?php  get_footer(); ?> 