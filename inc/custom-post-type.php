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
		'supports'           => array( 'excerpt', 'custom-fields', 'title', 'thumbnail' )
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
		'taxonomies'  		 => array( 'vettedcategory' )
	);

	register_post_type( 'ai-vetted-profile', $args );
}

// Custom Taxonomy for Vetted
add_action( 'init', 'cc_vetted_taxonomy', 0 );
function cc_vetted_taxonomy() {
	$labels = array(
		'name'              => _x( 'Vetted Category', 'taxonomy general name' ),
		'singular_name'     => _x( 'Vetted Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Vetted Category' ),
		'all_items'         => __( 'All Vetted Category' ),
		'parent_item'       => __( 'Parent Vetted Category' ),
		'parent_item_colon' => __( 'Parent Vetted Category:' ),
		'edit_item'         => __( 'Edit Vetted Category' ),
		'update_item'       => __( 'Update Vetted Category' ),
		'add_new_item'      => __( 'Add New TopVetted Categoryic' ),
		'new_item_name'     => __( 'New Vetted Category Name' ),
		'menu_name'         => __( 'Vetted Category' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'vettedcategories' ),
	);

	register_taxonomy( 'vettedcategory', array( 'ai-vetted-profile' ), $args );
}



// Custom Post Type for Hire Developers
add_action( 'init', 'cc_hire_post_type' );
function cc_hire_post_type() {
	$labels = array(
		'name'               => __( 'Hire Developer' ),
		'singular_name'      => __( 'Hire Developer' ),
		'all_items'          => __( 'All Hire Developer' ),
		'add_new'            => _x( 'Add new', 'Hire Developer' ),
		'add_new_item'       => __( 'Add New Hire Developer' ),
		'edit_item'          => __( 'Edit Hire Developer' ),
		'new_item'           => __( 'New Hire Developer' ),
		'view_item'          => __( 'View Hire Developer' ),
		'search_items'       => __( 'Search in Hire Developer' ),
		'not_found'          => __( 'No Hire Developer found' ),
		'not_found_in_trash' => __( 'No Hire Developer found in trash' ),
		'parent_item_colon'  => '',
		
	);

	$args = array(
		'labels'             => $labels,
        'hierarchical'       => true,
		'public'             => true, // Ensure this is set to true
        'show_ui'            => true,
		'show_admin_column'  => true,
		'query_var'          => true,
		'menu_icon'          => 'dashicons-universal-access',
		'rewrite'            => array( 'slug' => 'hire', 'with_front' => false ),
		'supports'           => array( 'excerpt', 'custom-fields', 'title', 'thumbnail' )
	);

	register_post_type( 'hire', $args );
}


// Custom Post Type for Author
add_action( 'init', 'cc_author_post_type' );
function cc_author_post_type() {
	$labels = array(
		'name'               => __( 'Author' ),
		'singular_name'      => __( 'Author' ),
		'all_items'          => __( 'All Author' ),
		'add_new'            => _x( 'Add new', 'Author' ),
		'add_new_item'       => __( 'Add New Author' ),
		'edit_item'          => __( 'Edit Author' ),
		'new_item'           => __( 'New Author' ),
		'view_item'          => __( 'View Author' ),
		'search_items'       => __( 'Search in Author' ),
		'not_found'          => __( 'No Author found' ),
		'not_found_in_trash' => __( 'No Author found in trash' ),
		'parent_item_colon'  => '',
		
	);

	$args = array(
		'labels'             => $labels,
        'hierarchical'       => true,
		'public'             => true, // Ensure this is set to true
        'show_ui'            => true,
		'show_admin_column'  => true,
		'query_var'          => true,
		'menu_icon'          => 'dashicons-edit',
		'rewrite'            => array( 'slug' => 'author-sws', 'with_front' => false ),
		'supports'           => array( 'excerpt', 'custom-fields', 'title', 'thumbnail' )
	);

	register_post_type( 'author-sws', $args );
}