
		<footer class="footer clearfix">
				<div class="container">
                
                	<?php  if (is_singular()) { 
					if ( get_post_meta($post->ID, 'footer_format', true) == 'footer_widget'){ ?>
                        <div class="footer-widget clearfix">
                            <div class="row">
                                <div class="col-md-4 widget-box clearfix">
                                    <?php if ( is_active_sidebar( 'andier-footer-one-sidebar' ) ) { dynamic_sidebar( 'andier-footer-one-sidebar' ); } ?>
                                </div>
                                <div class="col-md-4 widget-box clearfix">
                                    <?php if ( is_active_sidebar( 'andier-footer-two-sidebar' ) ) { dynamic_sidebar( 'andier-footer-two-sidebar' ); } ?>
                                </div>
                                <div class="col-md-4 widget-box clearfix">
                                    <?php if ( is_active_sidebar( 'andier-footer-three-sidebar' ) ) { dynamic_sidebar( 'andier-footer-three-sidebar' ); } ?>
                                </div>
                               
                            </div><!--/.row-->
                        </div><!--/.footer-widget-->
                    <?php }
					} ?>
                    
					<div class="row">
						<div class="col-md-6">
							<?php 
                            if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'fot_text' )) { 
							$andier_fot_text = ot_get_option( 'fot_text' );
                            echo wp_kses_post( $andier_fot_text); } else { echo '<p>Made with <i class="fa fa-coffee"></i> in Bandung  &copy;2017 <a href="#">example.com</a></p>';}
                            ?>
						</div><!--/.col-md-6-->
						
						<div class="col-md-6 footer-box">
							<ul class="footer-icon">
								<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'fb_foot')) :  ?>
										<li><a href="<?php  echo esc_url( ot_get_option( 'fb_foot' )); ?>"><i class="fa fa-facebook"></i></a></li>
									<?php endif ; endif; ?>
									<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'gp_foot')) :  ?>
										<li><a href="<?php  echo esc_url(ot_get_option( 'gp_foot' )); ?>"><i class="fa fa-google-plus"></i></a></li>
									<?php endif ; endif; ?>
									<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'twit_foot')) :  ?>
										<li><a href="<?php  echo esc_url(ot_get_option( 'twit_foot') ); ?>"><i class="fa fa-twitter"></i></a></li>
									<?php endif ; endif; ?>
									<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'insta_link')) :  ?>
										<li><a href="<?php  echo esc_url(ot_get_option( 'insta_link') ); ?>"><i class="fa fa-instagram"></i></a></li>
									<?php endif ; endif; ?>
									<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'pint_foot')) :  ?>
										<li><a href="<?php  echo esc_url(ot_get_option( 'pint_foot' )); ?>"><i class="fa fa-pinterest"></i></a></li>
									<?php endif ; endif; ?>
									<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'xing_foot')) :  ?>
										<li><a href="<?php  echo esc_url(ot_get_option( 'xing_foot') ); ?>"><i class="fa fa-xing"></i></a></li>
									<?php endif ; endif; ?>
									<!--ANOTHER SOCIAL ICON LIST-->
									<?php
										if  ( function_exists( 'ot_get_option' )){
										 /* get the icon list */
										 $andier_hsocials = ot_get_option( 'foot_as_icon', array() );
										 
										 if ( ! empty( $andier_hsocials ) ) {
											 foreach( $andier_hsocials as $andier_hsocial ) {
												 echo '
												 <li><a href="' . esc_url( $andier_hsocial['foot_as_link']) . '"><i class="fa ' . esc_attr( $andier_hsocial['foot_soc_icon']) . '"></i></a></li>
												';
											 }
										 }
										}				
									?>
									<!--ANOTHER SOCIAL ICON LIST END-->
							</ul><!--/.team-icon-->
						</div><!--/.footer-box-->
					</div><!--/.row-->			
				</div><!--/.container-->
		</footer><!--/.footer--> 
	
     	
	<?php wp_footer(); ?>
	</body>
</html>