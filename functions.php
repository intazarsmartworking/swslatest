<?php
/**
 * sws functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sws
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'THEME_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sws_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sws, use a find and replace
		* to change 'sws' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sws', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'sws' ),
		)
	);


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'sws_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'sws_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sws_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sws_content_width', 640 );
}
add_action( 'after_setup_theme', 'sws_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sws_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sws' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sws' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sws_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sws_scripts() {
	wp_enqueue_style( 'sws-style', get_stylesheet_uri(), array(), THEME_VERSION );
	wp_enqueue_style( 'sws-theme-style', get_template_directory_uri() . '/css/theme.css', [], THEME_VERSION );
	wp_enqueue_style( 'sws-slick-min', get_template_directory_uri() . '/css/slick.min.css', [], THEME_VERSION );
	wp_enqueue_style( 'sws-aos', get_template_directory_uri() . '/css/aos.css', [], THEME_VERSION );
	wp_enqueue_style( 'sws-slick-theme-min', get_template_directory_uri() . '/css/slick-theme.min.css', [], THEME_VERSION );
	wp_enqueue_script( 'sws-core-js', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), THEME_VERSION, true );

	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), THEME_VERSION, true );
	
	wp_enqueue_script( 'sws-aos-js', get_template_directory_uri() . '/js/aos.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THEME_VERSION, true );


	// wp_enqueue_script( 'sws-gsap', get_template_directory_uri() . '/js/gsap.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-ScrollMagic', get_template_directory_uri() . '/js/ScrollMagic.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-gsap_animation', get_template_directory_uri() . '/js/animation.gsap.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'sws-addIndicators', get_template_directory_uri() . '/js/debug.addIndicators.js', array(), THEME_VERSION, true );
	
	wp_enqueue_script( 'sws-custom', get_template_directory_uri() . '/js/custom.js', array(), THEME_VERSION, true ); // last on write

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap', false ); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sws_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme options.
 */
require get_template_directory() . '/inc/theme-options-acf.php';

/**
 * Custom Taxonomy.
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Custom Functions
 */

 require get_template_directory() . '/inc/custom-functions.php';


 /**
 * Custom SVG
 */

 require get_template_directory() . '/inc/class-svg-enable.php';


// Code for Block Free Email
 function block_free_email_domains($result, $tag) {
    $name = $tag['name'];
    
    // List of free email domains to block
    $free_domains = array('gmail.com', 'yahoo.com', 'aol.com', 'hotmail.com', 'outlook.com', 'aol.com', 'icloud.com', 'live.com', 'zoho.com', 'dont-reply.me');

    // Only apply this check to the email field
    if ($name == 'email-address') {
        $email = isset($_POST[$name]) ? trim($_POST[$name]) : '';
        
        // Extract the domain from the email
        $email_domain = substr(strrchr($email, "@"), 1);
        
        // If the email domain is in the list of free domains, invalidate the form
        if (in_array($email_domain, $free_domains)) {
            $result->invalidate($tag, 'Please use a business email address.');
        }
    }

    return $result;
}
add_filter('wpcf7_validate_email*', 'block_free_email_domains', 20, 2);


function save_form_data_to_db() {
    if (isset($_POST['submit_form'])) {
        // Sanitize user input
		$selected_skill = sanitize_text_field($_POST['selected_skill']);
		$working_time = sanitize_text_field($_POST['working_time']);
		$name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
		$phone = sanitize_text_field($_POST['phone']);

		$selected_skill_cleaned = preg_replace('/\\\\n|\\\\"|[\\s]+/', '', $selected_skill);

		// Step 2: Extract text between commas, which gives us just the words and commas.
		$selected_skill_cleaned = preg_replace('/[\\\[\]]/', '', $selected_skill_cleaned); // Removing any other unwanted characters

		// Step 3: Ensure there is no extra space between words.
		$selected_skill_cleaned = str_replace('\,', ',',  $selected_skill_cleaned);

        // Create the custom table if it doesn't exist
        global $wpdb;
        $table_name = $wpdb->prefix . 'custom_form_data';

        // Insert data into the database
        $wpdb->insert(
            $table_name,
            array(
				'selected_skill' => $selected_skill_cleaned,
				'working_time' => $working_time,
                'name' => $name,
                'email' => $email,
				'phone' => $phone,
                'submitted_at' => current_time('mysql')
            )
        );

		wp_redirect(home_url('/thank-you/'));
		exit;
    }
}

add_action('init', 'save_form_data_to_db');


function create_custom_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_form_data';
    
    // Check if the table exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        // Create the table
        $sql = "CREATE TABLE $table_name (
            id INT(11) NOT NULL AUTO_INCREMENT,
			selected_skill VARCHAR(255) NOT NULL,
			working_time VARCHAR(255) NOT NULL,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
			phone BIGINT NOT NULL,
            submitted_at DATETIME NOT NULL,
            PRIMARY KEY (id)
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
register_activation_hook(__FILE__, 'create_custom_table');

// Add custom admin menu
function custom_form_data_menu() {
    add_menu_page(
        'Custom Form Data',           // Page title
        'Form Submissions',           // Menu title
        'manage_options',             // Capability (who can see this)
        'custom_form_data',           // Menu slug
        'display_custom_form_data',   // Function that displays the content
        'dashicons-forms',            // Icon for the menu
        20                            // Position in the menu
    );
}
add_action('admin_menu', 'custom_form_data_menu');

// Display the custom table data
function display_custom_form_data() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_form_data';  // Custom table

    // Query to get all rows from the custom table
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");

    // If no data exists
    if (empty($results)) {
        echo '<p>No form submissions yet.</p>';
    } else {
        // Start the table for display
        echo '<div class="wrap">';
        echo '<h1>Form Submissions</h1>';
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Selected Skill</th><th>Working Time</th><th>Submitted At</th></tr></thead>';
        echo '<tbody>';

        // Loop through the results and display each row
        foreach ($results as $row) {
            echo '<tr>';
			echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
			echo '<td>' . esc_html($row->phone) . '</td>';
			echo '<td>' . esc_html($row->selected_skill) . '</td>';
			echo '<td>' . esc_html($row->working_time) . '</td>';
            echo '<td>' . esc_html($row->submitted_at) . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
}

// Add custom styles for the table
function custom_admin_styles() {
    echo '
        <style>
            .wp-list-table th, .wp-list-table td {
                padding: 10px;
            }
            .wp-list-table tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }
        </style>
    ';
}
add_action('admin_head', 'custom_admin_styles');







