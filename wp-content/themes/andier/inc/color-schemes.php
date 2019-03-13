<?php 
//color scheme
function andier_color_scheme() {
		if ( function_exists( 'ot_get_option' ) ) {
			$general =  ot_get_option( 'color_general' );
			$color_general = "
			.post.sticky .go-btn:hover,.blog-slider .slide-nav:hover,.widgettitle::before,.tagcloud a:hover,#searchform #searchsubmit,.post-detail::after,.go-btn,
			.form-submit #submit,.slide-btn,.line-subtext::before,.team-sicon a, .port-filter a,.port-hov i,.work-content .slide-nav,
			.box-relative .sub-title::before,.portfolio-gallery a i,.wpcf7-submit,.footer-icon a:hover,.pagination > .active > a, .pagination > .active > span, #wp-calendar caption,
			.pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus,.top-title > span,.boxs-btn,.teams-btn,
			#wp-calendar td a:hover,.team-social a,.port-hover i,.team-soc a,blockquote::before,.hero-btn,.post-detail > li i,.abtw-soc a:hover,.sk-cube-grid .sk-cube,
			.home-slider .owl-page.active,.progress-bar-andier,.boxs-icon
			{background-color:$general;}
	
			.post.sticky .go-btn,.go-btn:hover,a:hover,.form-submit #submit:hover,.team-sicon a:hover,.work-content .slide-nav:hover,.wpcf7-submit:hover,
			.blog-slider .slide-nav:hover,.port-filter a:hover,.tagcloud a,.blog-slider .slide-nav,.team-social a:hover,.team-soc a:hover,.slide-btn:hover,.hero-btn:hover,
			.abtw-soc a,.personal-color,.slide-nav:hover
			{color:$general;}
			
			.p-table a ,.footer-icon a:hover,.go-btn,.blog-slider .slide-nav:hover,.work-content .slide-nav:hover
			{color:#fff;}
	
			.blog-slider .slide-nav,.post.sticky .go-btn,.go-btn,.form-submit #submit,.form-submit #submit:hover,.team-sicon a,.team-sicon a:hover,.blog-slider .slide-nav:hover,
			.work-content .slide-nav,.wpcf7-submit:hover,.wpcf7-submit,.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover,.tagcloud a,.tagcloud a:hover,
			 .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus,.port-filter .active,.port-filter a:hover,.port-filter a,.boxs-btn,.teams-btn,
			 .team-soc a:hover,.team-soc a,.hero-btn,.abtw-soc a,.abtw-soc a:hover,.widget-about-us h3::before,.content-title::before
			{border-color:$general;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_general' )) {           
			wp_add_inline_style( 'andier-theme-style', $color_general );
			}
			
			$hovers =  ot_get_option( 'custom_hovers' );
			$custom_hovers = "a:hover{color:$hovers;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
			wp_add_inline_style( 'andier-theme-style', $custom_hovers );
			}
			
			$color =  ot_get_option( 'color_scheme' );
			$custom_css = "
			a,go-btn:hover{color:$color;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_scheme' )) {           
			wp_add_inline_style( 'andier-theme-style', $custom_css );
			}
			
			$hovers =  ot_get_option( 'custom_hovers' );
			$custom_hovers = "a:hover{color:$hovers;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'custom_hovers' )) {           
			wp_add_inline_style( 'andier-theme-style', $custom_hovers );
			}
			
			$heading =  ot_get_option( 'heading_color' );
			$heading_color = "
			h1, h2, h3, h4, h5, h6{color:$heading;} 
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'heading_color' )) {           
			wp_add_inline_style( 'andier-theme-style', $heading_color );
			}
			
			$general =  ot_get_option( 'general_color' );
			$general_color = "
			body{color:$general;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'general_color' )) {           
			wp_add_inline_style( 'andier-theme-style', $general_color );
			}
			
			$footer =  ot_get_option( 'footer_color' );
			$footer_color = "
			.footer{background-color:$footer;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'footer_color' )) {           
			wp_add_inline_style( 'andier-theme-style', $footer_color );
			}
	 
	
			$menu =  ot_get_option( 'stick_menu' );
			$color_menu = "
			.blog-header,.is-sticky .for-sticky,.dark-nav,.bg-nav:hover{background-color: $menu;}
			";   
			if ( function_exists( 'ot_get_option' ) && ot_get_option( 'stick_menu' )) {           
			wp_add_inline_style( 'andier-theme-style', $color_menu );
			}
		}
		 
}

		