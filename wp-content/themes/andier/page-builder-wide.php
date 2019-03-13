<?php
/*
* Template Name: Wide Page Builder
* Description:Wide page builder without any container.
*/
get_header(); ?>
        
		<!--HOME START-->
		<div id="home" class="clearfix">
			<!--HEADER START-->
			<?php get_template_part( 'loop/menu'); ?>
			<!--HEADER END-->
		</div><!--/home end-->
		<!--HOME END--> 
        <?php while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>
        
		<?php endwhile; ?>
        
<?php  get_footer(); ?>