<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project for Growmodo.">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="container">
		<div class="page-header clearfix">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo.png" alt="<?php bloginfo('name'); ?> Logo" />
			</a>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 
					'theme_location' => 'top-nav', 
					'menu_class' => 'nav-menu', 
				) ); ?>
			</nav>
			<div>
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact us' ) ) ); ?>" class="contact-btn">
					Contact Us
				</a>
			</div>
			<!-- Hamburger Menu -->
			<button class="hamburger" aria-label="Toggle Menu">
				&#9776;
			</button>
		</div>
	</header>

	<div id="main" class="site-main clearfix">


