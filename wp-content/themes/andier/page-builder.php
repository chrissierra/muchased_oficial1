<?php
/*
* Template Name: Boxed Page Builder
* Description:Boxed Page Builder with container.
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
        
        <div class="container">
        <?php the_content(); ?>
        </div><!--/.container-->
		<?php endwhile; ?>
        
<?php  get_footer(); ?>