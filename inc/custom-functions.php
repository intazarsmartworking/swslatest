<?php

// For Footer Navigation & walker class

register_nav_menus(
	array(
		'footer' => esc_html__( 'Footer', 'sws' ),
        'header_menu' => __('Header Menu')
	)
);


class Hire_Custom_Walker_Nav_Menu extends Walker_Nav_Menu {

    // Start Level
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $classes = array('sub-menu');
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= "\n" . $indent . '<ul' . $class_names . '>' . "\n";
    }

    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';

        // Add specific class and data attribute for "Hire Developers" menu item
        if ($item->title == 'Hire Developers') {
            $atts['class'] = 'more_menu';
            $atts['data-mainmenu'] = 'hireDevId';
        }

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;

        // Add caret images for "Hire Developers"
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;

        // Add caret images only for the "Hire Developers" menu item
        if ($item->title == 'Hire Developers') {
            $item_output .= '<img class="w-[22px] caret-down" src="' . get_template_directory_uri() . '/images/caret-down.png">';
            $item_output .= '<img class="w-[22px] caret-up" src="' . get_template_directory_uri() . '/images/caret-up.png">';
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}




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
	
	// Get the active category ID
    $active_category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : 0;
    
    // Check if there are any categories
    if (!empty($terms) && !is_wp_error($terms)) {
        echo '<div class="left-profile">';
        foreach ($terms as $term) {
		$active_class = ($term->term_id == $active_category_id) ? 'category-filter active' : '';	
		$category_link = add_query_arg('category_id', esc_attr($term->term_id), get_permalink());
        $category_link .= '#profile-vet';	
            echo '<div class="skills px-4 py-5 rounded-2xl mb-4 ' . esc_attr($active_class) . '">';
            echo '<a href="' . esc_url($category_link) . '">';
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
		echo '<div class="grid grid-cols-1 lg:grid-cols-12 gap-4">';
		$counter = 0;
        while ($query->have_posts() && $counter < 4 ) {
            $query->the_post();
			$designation = get_field('profile');
			$dev_image_id = get_post_thumbnail_id();
			$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
            echo '<a href="/contact-us/" class="grid-item col-span-3 block developer-sec-pic">';
            echo '<img src="' . esc_url($dev_image_src[0]) . '" class="rounded-xl">';
            echo '<div class="short-bio">';
            echo '<p class="text-white pb-2 text-center text-xl">' . get_the_title() . '</p>';
            echo '<p class="text-white text-center mb-5 text-sm">' . esc_html($designation) . '</p>';
            echo '<div class="block pb-3">';
            echo '<ul class="skill-card-itme">';
            // Display the repeater field 'skills'
            if (have_rows('skills')) {
                while (have_rows('skills')) {
                    the_row();
                    $skill = get_sub_field('skill');
                    echo '<li>' . esc_html($skill) . '</li>';
                }
            }
            echo '</ul>';
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






function load_more_stories() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $args = array(
        'post_type' => 'success-story',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 10
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $image_id = get_post_thumbnail_id();
            $image_src = wp_get_attachment_image_src($image_id, 'full');
            $terms = get_the_terms(get_the_ID(), 'successcategory');
            $term_names = array();
            if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    $term_names[] = $term->name;
                }
            }
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 py-14 border-b border-[#431d0e] gap-2 md:gap-80">
                <div class="col-span-2 md:col-span-1">
                    <h5 class="text-[28px] text-[#fff] font-semibold leading-[40px] mb-[50px]"><?php the_title(); ?></h5>
                    <p class="text-[16px] text-[#fff] leading-[28px] mb-[20px]"><?php echo get_the_excerpt(); ?></p>
                    <p class="text-[12px] text-[#fff] leading-[16px]"><?php echo implode(', ', $term_names); ?> • 500+</p>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <div class="stories-img-box">
                        <img class="w-[100%]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>">
                        
                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        // No more posts to load
        wp_die();
    }
    wp_die();
}
add_action('wp_ajax_load_more_stories', 'load_more_stories');
add_action('wp_ajax_nopriv_load_more_stories', 'load_more_stories');


// Code for Success Story
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);
    wp_localize_script('custom-js', 'my_ajax_obj', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



// Enqueue the script and localize it with the AJAX URL
function enqueue_custom_ajax_script() {
    wp_enqueue_script('custom-ajax-script', get_template_directory_uri() . '/js/custom-ajax.js', array('jquery'), null, true);
    wp_localize_script('custom-ajax-script', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ai_vetted_profile_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_ajax_script');


