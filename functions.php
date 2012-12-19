<?php /*
===============================================================
Commentpress Child Theme Functions
===============================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
---------------------------------------------------------------
NOTES

Example theme amendments and overrides.

---------------------------------------------------------------
*/


/** 
 * @description: augment the CommentPress Default Theme setup function
 * @todo: 
 *
 */
function cpchild_setup( 
	
) { //-->

	/** 
	 * Make theme available for translation.
	 * Translations can be added to the /languages/ directory of the child theme.
	 */
	load_theme_textdomain( 
	
		'commentpress-child-theme', 
		get_stylesheet_directory() . '/languages' 
		
	);

}

// add after theme setup hook
add_action( 'after_setup_theme', 'cpchild_setup' );






/** 
 * @description: override styles by enqueueing as late as we can
 * @todo:
 *
 */
function cpchild_enqueue_styles() {

	// init
	$dev = '';
	
	// check for dev
	if ( defined( 'SCRIPT_DEBUG' ) AND SCRIPT_DEBUG === true ) {
		$dev = '.dev';
	}
	
	// add child theme's css file
	wp_enqueue_style( 
	
		'cpchild_css', 
		get_stylesheet_directory_uri() . '/assets/css/style-overrides'.$dev.'.css',
		array( 'cp_reset_css' ),
		'1.0', // version
		'all' // media
	
	);

}

// add a filter for the above
add_filter( 'wp_enqueue_scripts', 'cpchild_enqueue_styles', 110 );



// adding clickable MLA logo to header
function my_child_template_header_body($path) {
	$path = get_stylesheet_directory() . '/assets/templates/header_body.php';
	return $path;
}
add_filter(	'cp_template_header_body', 'my_child_template_header_body' );


add_filter('show_admin_bar', '__return_false');  