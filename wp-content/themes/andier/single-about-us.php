<?php

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
						
						
			  <?php while (have_posts()) : the_post(); ?>
              
              <h3 class="small-title"><?php the_title(); ?> <i class="fa <?php echo esc_attr( get_post_meta($post->ID, 'abt_icon', true)); ?>"></i></h3>
              <p class="small-sub"><?php echo esc_attr( get_post_meta($post->ID, 'abt_small_title', true)); ?></p>
              <?php the_content(); ?>
              <div class="spacing40 clearfix"></div>
              
                      
              <?php endwhile; ?>
							
		
			</div><!--/.container-->
		</div><!--/.blog-wrapper-->


               
    <?php  get_footer(); ?>