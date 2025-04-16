<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package jypractitioners
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function jypractitioners_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'jypractitioners_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function jypractitioners_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'jypractitioners_pingback_header' );

// Register Custom Post Type
function custom_post_type_our_team() {
    $labels = array(
        'name'                  => _x('Our Team', 'Our Team', 'jypractitioners'),
        'singular_name'         => _x('Team Member', 'Team Member', 'jypractitioners'),
        'menu_name'             => __('Our Team', 'jypractitioners'),
        'name_admin_bar'        => __('Team Member', 'jypractitioners'),
        'archives'              => __('Team Member Archives', 'jypractitioners'),
        'attributes'            => __('Team Member Attributes', 'jypractitioners'),
        'parent_item_colon'     => __('Parent Member:', 'jypractitioners'),
        'all_items'             => __('All Members', 'jypractitioners'),
        'add_new_item'          => __('Add New Member', 'jypractitioners'),
        'add_new'               => __('Add New', 'jypractitioners'),
        'new_item'              => __('New Member', 'jypractitioners'),
        'edit_item'             => __('Edit Member', 'jypractitioners'),
        'update_item'           => __('Update Member', 'jypractitioners'),
        'view_item'             => __('View Member', 'jypractitioners'),
        'view_items'            => __('View Members', 'jypractitioners'),
        'search_items'          => __('Search Member', 'jypractitioners'),
        'not_found'             => __('Not Found', 'jypractitioners'),
        'not_found_in_trash'    => __('Not Found in Trash', 'jypractitioners'),
        'featured_image'        => __('Featured Image', 'jypractitioners'),
        'set_featured_image'    => __('Set Featured Image', 'jypractitioners'),
        'remove_featured_image' => __('Remove Featured Image', 'jypractitioners'),
        'use_featured_image'    => __('Use as Featured Image', 'jypractitioners'),
        'insert_into_item'      => __('Insert into Member', 'jypractitioners'),
        'uploaded_to_this_item' => __('Uploaded to this Member', 'jypractitioners'),
        'items_list'            => __('Members List', 'jypractitioners'),
        'items_list_navigation' => __('Members List Navigation', 'jypractitioners'),
        'filter_items_list'     => __('Filter Members List', 'jypractitioners'),
    );

    $args = array(
        'label'                 => __('Team Member', 'jypractitioners'),
        'description'           => __('Post Type for Our Team', 'jypractitioners'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'custom-fields', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('our_team', $args);
}
add_action('init', 'custom_post_type_our_team', 0);

// Register Taxonomy Departments
function custom_taxonomy_departments() {
    $labels = array(
        'name'                       => _x('Departments', 'Departments', 'jypractitioners'),
        'singular_name'              => _x('Department', 'Department', 'jypractitioners'),
        'menu_name'                  => __('Departments', 'jypractitioners'),
        'all_items'                  => __('All Departments', 'jypractitioners'),
        'parent_item'                => __('Parent Department', 'jypractitioners'),
        'parent_item_colon'          => __('Parent Department:', 'jypractitioners'),
        'new_item_name'              => __('New Department Name', 'jypractitioners'),
        'add_new_item'               => __('Add New Department', 'jypractitioners'),
        'edit_item'                  => __('Edit Department', 'jypractitioners'),
        'update_item'                => __('Update Department', 'jypractitioners'),
        'view_item'                  => __('View Department', 'jypractitioners'),
        'separate_items_with_commas' => __('Separate departments with commas', 'jypractitioners'),
        'add_or_remove_items'        => __('Add or Remove Departments', 'jypractitioners'),
        'choose_from_most_used'      => __('Choose from the Most Used', 'jypractitioners'),
        'popular_items'              => __('Popular Departments', 'jypractitioners'),
        'search_items'               => __('Search Departments', 'jypractitioners'),
        'not_found'                  => __('Not Found', 'jypractitioners'),
        'no_terms'                   => __('No Departments', 'jypractitioners'),
        'items_list'                 => __('Departments List', 'jypractitioners'),
        'items_list_navigation'      => __('Departments List Navigation', 'jypractitioners'),
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

    register_taxonomy('departments', array('our_team'), $args);
}
add_action('init', 'custom_taxonomy_departments', 0);

// Register Taxonomy: Partners Leadership Teams
function custom_taxonomy_partners_leadership_teams() {
    $labels = array(
        'name'                       => _x('Partners Leadership Teams', 'Partners Leadership Teams', 'jypractitioners'),
        'singular_name'              => _x('Partners Leadership Team', 'Partners Leadership Team', 'jypractitioners'),
        'menu_name'                  => __('Partners Leadership Teams', 'jypractitioners'),
        'all_items'                  => __('All Teams', 'jypractitioners'),
        'parent_item'                => __('Parent Team', 'jypractitioners'),
        'parent_item_colon'          => __('Parent Team:', 'jypractitioners'),
        'new_item_name'              => __('New Team Name', 'jypractitioners'),
        'add_new_item'               => __('Add New Team', 'jypractitioners'),
        'edit_item'                  => __('Edit Team', 'jypractitioners'),
        'update_item'                => __('Update Team', 'jypractitioners'),
        'view_item'                  => __('View Team', 'jypractitioners'),
        'separate_items_with_commas' => __('Separate teams with commas', 'jypractitioners'),
        'add_or_remove_items'        => __('Add or Remove Teams', 'jypractitioners'),
        'choose_from_most_used'      => __('Choose from the Most Used', 'jypractitioners'),
        'popular_items'              => __('Popular Teams', 'jypractitioners'),
        'search_items'               => __('Search Teams', 'jypractitioners'),
        'not_found'                  => __('Not Found', 'jypractitioners'),
        'no_terms'                   => __('No Teams', 'jypractitioners'),
        'items_list'                 => __('Teams List', 'jypractitioners'),
        'items_list_navigation'      => __('Teams List Navigation', 'jypractitioners'),
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

    register_taxonomy('partners_leadership_teams', array('our_team'), $args);
}
add_action('init', 'custom_taxonomy_partners_leadership_teams', 0);

/* Register post type Why us USP */

function custom_post_type_whyus_usp() {
    $labels = array(
        'name'                  => _x('Why US USPs', 'Why US USP', 'jypractitioners'),
        'singular_name'         => _x('Why US USP', 'Why US USP', 'jypractitioners'),
        'menu_name'             => __('Why US USP', 'jypractitioners'),
        'name_admin_bar'        => __('Why US USP', 'jypractitioners'),
        'archives'              => __('Why US USP', 'jypractitioners'),
        'attributes'            => __('Why US USP Attributes', 'jypractitioners'),
        'parent_item_colon'     => __('Parent Why US USP:', 'jypractitioners'),
        'all_items'             => __('All Why US USPs', 'jypractitioners'),
        'add_new_item'          => __('Add New USP', 'jypractitioners'),
        'add_new'               => __('Add New', 'jypractitioners'),
        'new_item'              => __('New USP', 'jypractitioners'),
        'edit_item'             => __('Edit USP', 'jypractitioners'),
        'update_item'           => __('Update USP', 'jypractitioners'),
        'view_item'             => __('View USP', 'jypractitioners'),
        'view_items'            => __('View USPs', 'jypractitioners'),
        'search_items'          => __('Search USP', 'jypractitioners'),
        'not_found'             => __('Not Found', 'jypractitioners'),
        'not_found_in_trash'    => __('Not Found in Trash', 'jypractitioners'),
        'featured_image'        => __('Featured Image', 'jypractitioners'),
        'set_featured_image'    => __('Set Featured Image', 'jypractitioners'),
        'remove_featured_image' => __('Remove Featured Image', 'jypractitioners'),
        'use_featured_image'    => __('Use as Featured Image', 'jypractitioners'),
        'insert_into_item'      => __('Insert into USP', 'jypractitioners'),
        'uploaded_to_this_item' => __('Uploaded to this USP', 'jypractitioners'),
        'items_list'            => __('USPs List', 'jypractitioners'),
        'items_list_navigation' => __('USPs List Navigation', 'jypractitioners'),
        'filter_items_list'     => __('Filter USPs List', 'jypractitioners'),
    );

    $args_usps = array(
        'label'                 => __('Why US USP', 'jypractitioners'),
        'description'           => __('Post Type for Why US USPs', 'jypractitioners'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('whyus_usp', $args_usps);
}
add_action('init', 'custom_post_type_whyus_usp', 0);

/* Register Post type Experience and client with same taxonomy */

function register_experience_clients_post_type() {
    $labels = array(
        'name'               => 'Experience and Clients',
        'singular_name'      => 'Experience and Client',
        'menu_name'          => 'Experience & Clients',
        'name_admin_bar'     => 'Experience & Client',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Experience or Client',
        'new_item'           => 'New Experience or Client',
        'edit_item'          => 'Edit Experience or Client',
        'view_item'          => 'View Experience or Client',
        'all_items'          => 'All Experiences and Clients',
        'search_items'       => 'Search Experiences and Clients',
        'not_found'          => 'No Experiences or Clients Found',
        'not_found_in_trash' => 'No Experiences or Clients Found in Trash'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'experience-clients'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 8,
        'supports'           => array('title'),
        'show_in_rest'       => true,
    );

    register_post_type('experience_clients', $args);
}
add_action('init', 'register_experience_clients_post_type');

function register_experience_client_taxonomy() {
    $labels = array(
        'name'              => 'Categories',
        'singular_name'     => 'Category',
        'search_items'      => 'Search Categories',
        'all_items'         => 'All Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'menu_name'         => 'Categories',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'experience-client-category'),
        'show_in_rest'      => true,
    );

    register_taxonomy('experience_client_category', array('experience_clients'), $args);
}
add_action('init', 'register_experience_client_taxonomy');

// Register Custom Post Type "Services"
function register_services_post_type() {
    $labels = array(
        'name'                  => _x('Services', 'Service', 'jypractitioners'),
        'singular_name'         => _x('Service', 'Service', 'jypractitioners'),
        'menu_name'             => __('Services', 'jypractitioners'),
        'all_items'             => __('All Services', 'jypractitioners'),
        'add_new_item'          => __('Add New Service', 'jypractitioners'),
        'edit_item'             => __('Edit Service', 'jypractitioners'),
        'new_item'              => __('New Service', 'jypractitioners'),
        'view_item'             => __('View Service', 'jypractitioners'),
        'search_items'          => __('Search Services', 'jypractitioners'),
        'not_found'             => __('No services found', 'jypractitioners'),
        'not_found_in_trash'    => __('No services found in Trash', 'jypractitioners'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'menu_position'         => 9,
        'supports'              => array('title'),
        'menu_icon'             => 'dashicons-hammer', // Optional: Custom icon for the menu
    );

    register_post_type('services', $args);
}

add_action('init', 'register_services_post_type');

// Register Custom Taxonomy "Service Categories"
function register_service_categories_taxonomy() {
    $labels = array(
        'name'                  => _x('Service Categories', 'Service Categories', 'jypractitioners'),
        'singular_name'         => _x('Service Category', 'Service Category', 'jypractitioners'),
        'menu_name'             => __('Service Categories', 'jypractitioners'),
        'all_items'             => __('All Categories', 'jypractitioners'),
        'edit_item'             => __('Edit Category', 'jypractitioners'),
        'view_item'             => __('View Category', 'jypractitioners'),
        'update_item'           => __('Update Category', 'jypractitioners'),
        'add_new_item'          => __('Add New Category', 'jypractitioners'),
        'new_item_name'         => __('New Category Name', 'jypractitioners'),
        'search_items'          => __('Search Categories', 'jypractitioners'),
    );

    $args = array(
        'labels'                => $labels,
        'hierarchical'          => true,
        'public'                => true,
        'show_admin_column'     => true,
    );

    register_taxonomy('service_categories', array('services'), $args);
}
add_action('init', 'register_service_categories_taxonomy');

