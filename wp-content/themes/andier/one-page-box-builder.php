<?php
/*
* Template Name: One Page Boxed Builder
* Description:One page builder boxed with container.
*/
get_header(); ?>
        
		<!--HOME START-->
		<div id="home" class="clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'loop/onepage', 'menu' );?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END--> 
        <div class="container">
			<?php while (have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
           
            <?php endwhile; ?>
        </div>
<?php  get_footer(); ?>