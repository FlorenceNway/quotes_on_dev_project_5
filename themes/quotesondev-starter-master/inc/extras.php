<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package QOD_Starter_Theme
 */

/**
 * Removes Comments from admin menu.
 */
function qod_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'qod_remove_admin_menus' );

/**
 * Removes comments support from Posts and Pages.
 */
function qod_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'qod_remove_comment_support', 100 );

/**
 * Removes Comments from admin bar.
 */
function qod_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'qod_admin_bar_render' );

/**
 * Removes Comments-related metaboxes.
 */
 function qod_remove_comments_meta_boxes() {
	remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
	remove_meta_box( 'commentsdiv', 'post', 'normal' );
	remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
}
add_action( 'admin_init', 'qod_remove_comments_meta_boxes' );


function qod_modify_archives($query){
	if( is_home() || is_single()){
		$query->set('orderby' , 'rand');
		$query->set('orderby' , 'ASC');
		$query->set('posts_per_page',1);
	}
	if((is_archive()) && !is_admin() && $query->is_main_query()){
	$query->set ('posts_per_page',5);
	}
}
add_action('pre_get_posts','qod_modify_archives');


function quotes_login_logo() {
	echo '<style>
		#login h1 a {
			background: url(' . get_template_directory_uri() . '/images/qod-logo.svg) no-repeat !important;
			background-size: 300px 53px !important; width: 300px !important; height: 53px !important;
		}
		#login .button.button-primary {
			background-color: #0c0;
		}
	</style>';
}
add_action( 'login_head', 'quotes_login_logo' ); //(hook, function name)


function quotes_login_logo_url($url) { //argument is previous url
    return home_url(); //index.html

}
add_filter( 'login_headerurl', 'quotes_login_logo_url' ); //(filter name, function name)


function quotes_login_logo_url_title() {
    return 'quotes'; // set the title name u want to give
}
add_filter( 'login_headertitle', 'quotes_login_logo_url_title' );