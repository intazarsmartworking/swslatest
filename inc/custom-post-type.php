<?php

// Custom Post Type for FAQ
add_action( 'init', 'cc_faq_post_type' );
function cc_faq_post_type() {
	$labels = array(
		'name'               => __( 'FAQ' ),
		'singular_name'      => __( 'FAQ' ),
		'all_items'          => __( 'All FAQ' ),
		'add_new'            => _x( 'Add new', 'FAQ' ),
		'add_new_item'       => __( 'Add new FAQ' ),
		'edit_item'          => __( 'Edit FAQ' ),
		'new_item'           => __( 'New FAQ' ),
		'view_item'          => __( 'View FAQ' ),
		'search_items'       => __( 'Search in FAQ' ),
		'not_found'          => __( 'No FAQ found' ),
		'not_found_in_trash' => __( 'No FAQ found in trash' ),
		'parent_item_colon'  => '',
		
	);

	$args = array(
		'labels'             => $labels,
        'hierarchical'       => true,
        'show_ui'            => true,
		'show_admin_column'  => true,
		'query_var'          => true,
		'menu_icon'          => 'dashicons-welcome-write-blog',
		'rewrite'            => array( 'slug' => 'faq' ),
		'supports'           => array( 'excerpt', 'custom-fields', 'title', 'thumbnail' ),
		'taxonomies'  => array( 'topics', 'category' )
	);

	register_post_type( 'faq', $args );
}


// Custom Post Type for Vetted Profile
add_action( 'init', 'cc_vetted_profile_post_type' );
function cc_vetted_profile_post_type() {
	$labels = array(
		'name'               => __( 'AI Vetted Profile' ),
		'singular_name'      => __( 'AI Vetted Profile' ),
		'all_items'          => __( 'All AI Vetted Profile' ),
		'add_new'            => _x( 'Add new', 'AI Vetted Profile' ),
		'add_new_item'       => __( 'Add new AI Vetted Profile' ),
		'edit_item'          => __( 'Edit AI Vetted Profile' ),
		'new_item'           => __( 'New AI Vetted Profile' ),
		'view_item'          => __( 'View AI Vetted Profile' ),
		'search_items'       => __( 'Search in AI Vetted Profile' ),
		'not_found'          => __( 'No AI Vetted Profile found' ),
		'not_found_in_trash' => __( 'No AI Vetted Profile found in trash' ),
		'parent_item_colon'  => '',
		
	);

	$args = array(
		'labels'             => $labels,
        'hierarchical'       => true,
        'show_ui'            => true,
		'show_admin_column'  => true,
		'query_var'          => true,
		'menu_icon'          => 'dashicons-groups',
		'rewrite'            => array( 'slug' => 'ai-vetted-profile' ),
		'supports'           => array( 'excerpt', 'custom-fields', 'title', 'thumbnail' ),
		'taxonomies'  => array( 'topics', 'category' )
	);

	register_post_type( 'ai-vetted-profile', $args );
}