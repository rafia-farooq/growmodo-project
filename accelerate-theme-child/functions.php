<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/// Enqueue scripts and styles

// Rafia's favorite hook:
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));

// Enqueue scripts and styles.
    // wp_enqueue_style( 'accelerate-style', get_stylesheet_uri() );
    // wp_enqueue_style( 'accelerate-child-google-fonts', '//fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap' );

}

add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Enqueue google font
function enqueue_urbanist_font() {
    wp_enqueue_style(
        'urbanist-google-font',
        'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'enqueue_urbanist_font');



function create_custom_post_types() {
    register_post_type( 'properties',
        array(
            'labels' => array(
                'name' => __( 'Properties' ),
                'singular_name' => __( 'Property' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'properties' ),
        )
    );

    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'testimonials' ),
        )
    );

    register_post_type( 'faqs',
        array(
            'labels' => array(
                'name' => __( 'FAQs' ),
                'singular_name' => __( 'FAQ' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'faqs' ),
        )
    );

    register_post_type( 'Locations',
        array(
            'labels' => array(
                'name' => __( 'Locations' ),
                'singular_name' => __( 'location' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'locations' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );


// Font Awesome icons for footer copyright bar without plugin

function enqueue_font_awesome_5() {
    wp_enqueue_style('font-awesome-5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome_5');


function register_custom_menus() {
    register_nav_menu('footer_icon_menu', __('Footer Icon Menu'));
    register_nav_menu('home', __('Home'));
}
add_action('init', 'register_custom_menus');



// Add dynamic sidebar on front page 

function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );


// To check which template Wordpress is using for a certain page. Use this
// function, login as admin, at the bottom of the page it will indicate the 
// template being used.

function which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
 
add_action( 'wp_footer', 'which_template_is_loaded' );
