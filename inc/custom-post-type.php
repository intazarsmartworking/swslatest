<?php

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
		'menu_icon'          => 'dashicons-welcome-write-blog', //pick one here ~> https://developer.wordpress.org/resource/dashicons/
		'rewrite'            => array( 'slug' => 'faq' ),
		'supports'           => array( 'excerpt', 'custom-fields', 'title', 'thumbnail' ),
		'taxonomies'  => array( 'topics', 'category' )
	);

	register_post_type( 'faq', $args );
}