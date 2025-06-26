<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
				<div class="menu">
                    <div>
                        <a href="<?php echo site_url(); ?>" class="top-logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Logo.png" alt="<?php bloginfo('name'); ?> Logo" />
                        </a>
                        <form>
                            <input type="email" name="email" id="email" required placeholder="Enter your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                    <div>
                        <h5>HOME</h5>
                        <nav class="footer-nav" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'home','menu_class' => 'footer-menu',));?>
                        </nav>
                    </div>
                    <div>
                        <h5>About Us</h5>
                        <nav class="footer-nav" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'top-nav','menu_class' => 'footer-menu',));?>
                        </nav>
                    </div>
                    <div>
                        <h5>Properties</h5>
                        <nav class="footer-nav" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'top-nav','menu_class' => 'footer-menu',));?>
                        </nav>
                    </div>
                    <div>
                        <h5>Services</h5>
                        <nav class="footer-nav" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'top-nav','menu_class' => 'footer-menu',));?>
                        </nav>
                    </div>
				</div>
                <!--copyrights section-->
                <div class="copyright">
                    <div>
                        <span>&copy; <?php bloginfo('title'); ?>, LLC</span>
                    </div>
                    <div>
                        <span>Terms and conditions</span>
                    </div>
                    <nav class="social-media-navigation" role="navigation">
                        <?php wp_nav_menu(array('theme_location' => 'footer_icon_menu','menu_class' => 'icon-menu',));?>
                    </nav>
                </div>
		</footer><!-- #colophon -->

	</div><!-- #page -->

    <!-- for toggeling hamburger menu on small screens -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.querySelector('.hamburger');
            const menu = document.querySelector('#primary-navigation');

            hamburger.addEventListener('click', function () {
                menu.classList.toggle('active');
            });
        });
    </script>


	<?php wp_footer(); ?>
</body>
</html>
