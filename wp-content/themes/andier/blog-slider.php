<?php
/*
* Template Name: Blog with Slider Header
* Description: Blog page style with slider header
*/

get_header(); ?>
        
		<!--HOME START-->
		<div id="home" class="clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'loop/menu'); ?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END--> 
        
        <div class="blog-header-slider dark-bg slider" data-auto-play="8000">
        	
            <?php $andier_post_per_page = get_option('posts_per_page');
				  $andier_args = array(
					  'posts_per_page' => $andier_post_per_page,
					  'post_type' => 'post'
					); 
					query_posts($andier_args);
					while (have_posts()) : the_post(); ?>
                    
        	<div class="slide blog-img-bg" data-background="<?php echo the_post_thumbnail_url(); ?>">
            	<div class="blog-box">
                	<div class="blog-box-inner">
                    	<?php if(get_the_category_list()) { ?> 
                        <p class="blogcat"><?php the_category(', '); ?></p>
                        <?php }?>
                        <a href="<?php the_permalink(); ?>"><h3 class="blog-title"><?php the_title(); ?></h3></a>
                        <a class="spc-btn slide-btn" href="<?php the_permalink(); ?>"><?php esc_html_e('View Post','andier') ?></a>
                    </div>
                </div><!--/.blog-box-->
                <div class="slider-mask"></div>
            </div><!--/.slide-->
            
            <?php endwhile; ?>
        </div><!--blog-slider-->

		<div class="content blog-wrapper">  
			<div class="container clearfix">
				 <div class="row clearfix">
				 	<div class="col-md-8 blog-content">
						<?php $andier_post_per_page = get_option('posts_per_page');
                              $andier_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                              $andier_args = array(
								  'posts_per_page' => $andier_post_per_page,
								  'paged' => $andier_paged,
								  'post_type' => 'post'
								); 
								query_posts($andier_args);
								
						 get_template_part( 'loop/loop', 'post' ); ?>
						
						 <?php  andier_pagination(); ?>
						<div class="spacing40 clearfix"></div>
					</div><!--/.col-md-8-->
					
					<?php get_sidebar(); ?>
                    
				 </div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.blog-wrapper-->


               
    <?php  get_footer(); ?>