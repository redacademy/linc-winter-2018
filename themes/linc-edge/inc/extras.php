<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package linc_edge_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function linc_edge_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'linc_edge_body_classes' );

function lincedge_hero_image(){
	if ( !is_page_template( 'front-page.php' ) ) {
		return;
	}else{
		$CFS_url = CFS()->get( 'bannerimage' );
		if (!$CFS_url){
			return;
		}
		$CSS =".page-template-front-page .banner-container{
		background: 
		url({$CFS_url}) no-repeat center top;
		background-size:cover;
		height:250px;

		}";
		wp_add_inline_style ('red-starter-style',$CSS);
	} 
}
 
add_action("wp_enqueue_scripts" , 'lincedge_hero_image');