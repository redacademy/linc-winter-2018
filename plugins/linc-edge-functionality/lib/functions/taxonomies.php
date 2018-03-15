<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Team Member Type Taxonomy
function team_member_type_taxonomy() {

    $labels = array(
        'name'                       => 'Team Member Types',
        'singular_name'              => 'Team Member Type',
        'menu_name'                  => 'Team Member Type',
        'all_items'                  => 'All Team Member Types',
        'parent_item'                => 'Parent Team Member Type',
        'parent_item_colon'          => 'Parent Team Member Type:',
        'new_item_name'              => 'New Team Member Type Name',
        'add_new_item'               => 'Add New Team Member Type',
        'edit_item'                  => 'Edit Team Member Type',
        'update_item'                => 'Update Team Member Type',
        'view_item'                  => 'View Team Member Type',
        'separate_items_with_commas' => 'Separate Team Member Types with commas',
        'add_or_remove_items'        => 'Add or remove Team Member Types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Team Member Types',
        'search_items'               => 'Search Team Member Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No Team Member Types',
        'items_list'                 => 'Team Member Type list',
        'items_list_navigation'      => 'Team Member Type list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'team-member-type', array( 'team-member' ), $args );

}
add_action( 'init', 'team_member_type_taxonomy', 0 );


/**
 * Register `department` taxonomy - Kevin Leary https://css-tricks.com/creating-meet-team-page-wordpress/
 */
function team_taxonomy() {
	
	// Labels
	$singular = 'Department';
	$plural = 'Departments';
	$labels = array(
		'name' => _x( $plural, "taxonomy general name"),
		'singular_name' => _x( $singular, "taxonomy singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
		'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'team', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $labels
	) );
}
add_action( 'init', 'team_taxonomy', 0 );