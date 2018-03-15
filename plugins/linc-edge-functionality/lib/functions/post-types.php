<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type Testimonials
function testimonial_post_type() {

	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimonial',
		'menu_name'             => 'Testimonials',
		'name_admin_bar'        => 'Testimonials',
		'archives'              => 'Testimonial Archives',
		'attributes'            => 'Testimonial Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Testimonials',
		'add_new_item'          => 'Add New Testimonial',
		'add_new'               => 'Add New',
		'new_item'              => 'New Testimonial',
		'edit_item'             => 'Edit Testimonial',
		'update_item'           => 'Update Testimonial',
		'view_item'             => 'View Testimonial',
		'view_items'            => 'View Testimonials',
		'search_items'          => 'Search Testimonial',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Testimonial',
		'uploaded_to_this_item' => 'Uploaded to this Testimonial',
		'items_list'            => 'Testimonials list',
		'items_list_navigation' => 'Testimonials list navigation',
		'filter_items_list'     => 'Filter Testimonials list',
	);
	$args = array(
		'label'                 => 'Testimonial',
		'description'           => 'Store Items',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-thumbs-up',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );


// Register Custom Post Type 'team' - https://css-tricks.com/creating-meet-team-page-wordpress/
function team_post_type() {
   
	// Labels
	 $labels = array(
		 'name' => _x("Team", "post type general name"),
		 'singular_name' => _x("Team", "post type singular name"),
		 'menu_name' => 'Team Profiles',
		 'add_new' => _x("Add New", "team item"),
		 'add_new_item' => __("Add New Profile"),
		 'edit_item' => __("Edit Profile"),
		 'new_item' => __("New Profile"),
		 'view_item' => __("View Profile"),
		 'search_items' => __("Search Profiles"),
		 'not_found' =>  __("No Profiles Found"),
		 'not_found_in_trash' => __("No Profiles Found in Trash"),
		 'parent_item_colon' => ''
	 );
	 
	 // Register post type
	 register_post_type('team', array(
		 'labels' => $labels,
		 'public' => true,
		 'has_archive' => false,
		 'menu_position' => 10,
		 'menu_icon' => 'dashicons-businessman',
		 'rewrite' => false,
		 'publicly_queryable' => true,
		 'supports' => array('title', 'editor', 'thumbnail')
	 ) );
 }
 add_action( 'init', 'team_post_type', 0 );