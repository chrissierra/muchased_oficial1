<?php
/*
* Template Name: Blog with Sidebar
* Description: Blog page style with sidebar
*/

get_header(); ?>
        
		<!--HOME START-->
		<div id="home" class="clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'loop/menu'); ?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END--> 
        	

		<div class="content blog-wrapper">  
			<div class="container clearfix">
				 <div class="row clearfix">
				 	<div class="col-md-7 blog-content">
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
					</div><!--/.col-md-7-->
					
					<?php get_sidebar(); ?>
                    
				 </div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.blog-wrapper-->


               
    <?php  get_footer(); ?>