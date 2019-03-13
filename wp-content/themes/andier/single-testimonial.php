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
								
						
                        <blockquote><?php the_content(); ?></blockquote>
                        <h4><?php the_title(); ?></h4>
                        <p class="testi-from"><?php echo esc_attr( apply_filters('get_the_content', get_post_meta($post->ID, 'testi_post', true))); ?></p>
                       
								
						<?php endwhile; ?>
							
				
			</div><!--/.container-->
		</div><!--/.blog-wrapper-->


               
    <?php  get_footer(); ?>