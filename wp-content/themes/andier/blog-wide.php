<?php
/*
* Template Name: Blog Wide 
* Description: Blog page wide style without sidebar
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
			<div class="container clearfix blog-content">

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
	
			</div><!--/.container-->
		</div><!--/.blog-wrapper-->


               
    <?php  get_footer(); ?>