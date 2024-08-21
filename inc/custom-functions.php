<?php

// For Footer Navigation & walker class

register_nav_menus(
	array(
		'footer' => esc_html__( 'Footer', 'sws' ),
	)
);

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"sub-menu\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'mb-2 text-sm leading-10';
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $output .= '<li' . $class_names .'>';
        $attributes = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url ) .'"' : '';
        $attributes .= ' class="text-footer-menu-color"';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


// Function to fetch and display categories for 'ai-vetted-profile'
function display_ai_vetted_profile_categories() {
	$terms  = get_terms(array(
        'taxonomy' => 'vettedcategory', 
        'type' => 'ai-vetted-profile',
        'orderby' => 'name',
        'order' => 'ASC',
		'hide_empty' => false, 
    ));
    
    // Check if there are any categories
    if (!empty($terms) && !is_wp_error($terms)) {
        echo '<div class="left-profile">';
        foreach ($terms as $term) {
            echo '<div class="skills px-4 py-5 rounded-2xl mb-4">';
            echo '<a href="#" class="category-filter" data-category-id="' . esc_attr($term->term_id) . '">';
            echo '<h3>' . esc_html($term->name) . '</h3>';
            echo '</a>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<p>No categories found.</p>';
    }
}



// AJAX handler to fetch posts
function ajax_fetch_ai_vetted_profile_posts() {
    check_ajax_referer('ai_vetted_profile_nonce', 'nonce');
	$category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : null;

    $args = array(
        'post_type' => 'ai-vetted-profile',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    // If a category ID is provided, include it in the query
    if ($category_id) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'vettedcategory',
                'field' => 'term_id',
                'terms' => $category_id,
            ),
        );
    }

    // Execute the query
    $query = new WP_Query($args);

    // Check if there are any posts
    if ($query->have_posts()) {
        $total_posts = $query->post_count;
		echo '<div class="userMore">';
		$counter = 0;
        while ($query->have_posts() && $counter < 4 ) {
            $query->the_post();
			$designation = get_field('profile');
			$dev_image_id = get_post_thumbnail_id();
			$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
            echo '<a href="' . get_permalink() . '" class="developer-sec-pic">';
            echo '<img src="' . esc_url($dev_image_src[0]) . '" class="rounded-xl">';
            echo '<div class="short-bio">';
            echo '<p class="text-white pb-2 text-center text-xl">' . get_the_title() . '</p>';
            echo '<p class="text-white text-center mb-5 text-sm">' . esc_html($designation) . '</p>';
            echo '<div class="grid grid-cols-3 gap-2 pb-5 px-6">';
            // Display the repeater field 'skills'
            if (have_rows('skills')) {
                while (have_rows('skills')) {
                    the_row();
                    $skill = get_sub_field('skill');
                    echo '<div class="skill-bg">';
                    echo '<div class="flex justify-center">';
                    echo '<h4 class="text-xs">' . esc_html($skill) . '</h4>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            echo '</div>';
            echo '</div>';
            echo '</a>';
			$counter++;
        }
		echo '</div>';

		if ($total_posts > 4) {
        echo '<div class="grid-cols-1">';
		echo '<section class="section-introduction p-3">';
		echo '<div class="container-circule">';
		$counter = 0;
		while ($query->have_posts() && $counter < 3) {
		$query->the_post();
		$dev_image_id = get_post_thumbnail_id();
		$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
		echo '<div class="item-' . $counter . ' circle-box">';
		echo '<img src="' . esc_url($dev_image_src[0]) . '" />';
		echo '</div>'; 
		$counter++;
		}
		$remaining_count = $total_posts - 7;
		 
		 
		if ($remaining_count > 0) {
			echo '<div class="item-4 circle-box">';
			echo '<p>+' . $remaining_count . '</p>';
			echo '</div>';
		}
		echo '</div>'; 
		echo '</section>';
		echo '</div>';

        wp_reset_postdata();
    } else {
        echo '<p>No posts found.</p>';
    }

    die();
}
}
add_action('wp_ajax_nopriv_fetch_ai_vetted_profile_posts', 'ajax_fetch_ai_vetted_profile_posts');
add_action('wp_ajax_fetch_ai_vetted_profile_posts', 'ajax_fetch_ai_vetted_profile_posts');

// Enqueue the script and localize it with the AJAX URL
function enqueue_custom_ajax_script() {
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);
    wp_localize_script('custom-ajax-script', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ai_vetted_profile_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_ajax_script');