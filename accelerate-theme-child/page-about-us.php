<?php
/**
 * The template for About page
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content about" role="main">
				<?php the_content(); ?>
			
		</div><!-- .main-content -->
	</div><!-- #primary -->


    <section>
		<div class="about-content">
			<div class="about-intro">
				<h4>OUR SERVICES</h4>
                <p>We take pride in our clients and the content we create for them.</p>
                <p>Here's a brief overview of our offered services.</p>
			</div>
			<h4>Page under construction .... coming soon</h4>

			<hr class="horizontal-line">
            
            <div class="about-us-contact-section">
                <div>
					<h3>Interested in working with us?</h3>
				</div>
				<div>
					<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us &#129122;</a>
				</div>
			</div>

			
		</div><!--about-content-->
	</section>

   

<?php get_footer(); ?>
