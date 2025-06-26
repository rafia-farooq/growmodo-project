<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<?php get_template_part( 'template-parts/hero' ); ?>

	<section class="featured" id="properties">
		<div class="site-content">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stars.png" alt="divider stars" />
			<h3>Featured Properties</h3>
			<div class="featured-content">
				<p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein.
				Click "View Details" for more information.</p>
				<button>
					<a href="<?php echo esc_url( get_post_type_archive_link( 'properties' ) ); ?>">
					View All Properties
					</a>
				</button>
			</div>

			<div class="featured-item">
				<ul>
					<?php query_posts('posts_per_page=3 & post_type=properties & order=ASC'); ?>
						<?php while (have_posts() ) : the_post();
							$image = get_field("property_image");
							$size = "medium";
							$property_description = get_field('property_description');
							$bedrooms = get_field('bedrooms');
							$bathrooms = get_field('bathrooms');
							$type_of_property = get_field('type_of_property');
							$price = get_field('price');
						?>
						<li>
							<p>
								<a href="<?php the_permalink(); ?>">
								<?php if($image) {
								echo wp_get_attachment_image( $image, $size );
								} ?>
								</a>
							</p>

							<h4 class="property-title">
								<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</h4>
							<p> <?php echo esc_html($property_description); ?>... <span class="read-more">Read More<span></p>

							<div class="property-info">
								<span class="pill"><?php echo intval($bedrooms); ?> Bedroom<?php echo $bedrooms > 1 ? 's' : ''; ?></span>
								<span class="pill"><?php echo intval($bathrooms); ?> Bathroom<?php echo $bathrooms > 1 ? 's' : ''; ?></span>
								<span class="pill"><?php echo implode($type_of_property);?></span>
							</div>
							<div class="price-column">
								<div>
									<p>Price</p>
									<p class="price">$<?php echo number_format_i18n($price); ?></p>
								</div>
								<button>
										<a href="<?php the_permalink(); ?>">View Property Details</a>
								</button>
							</div>
						</li>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>	<!---->
		</div> <!--site-content-->
	</section>

	<section class="featured" id="testimonials">
		<div class="site-content">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stars.png" alt="divider stars" />
			<h3>What Our Clients Say</h3>
			<div class="featured-content">
				<p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
				<button>
					<a href="<?php echo esc_url( get_post_type_archive_link( 'testimonials' ) ); ?>">
					View All Testimonials
					</a>
				</button>
			</div>

			<div class="featured-item">
				<ul>
					<?php query_posts('posts_per_page=3 & post_type=testimonials & order=ASC'); ?>
						<?php while (have_posts() ) : the_post();
							$image = get_field("client_image");
							$size = "small";
							$heading = get_field('heading');
							$testimonial = get_field('testimonial');
							$client_name = get_field('client_name');
							$location = get_field('location');
							$stars = get_field('stars');
						?>
						<li>
							<?php if ( $stars && $stars > 0 ) : ?>
								<div class="star-rating">
									<?php for ( $i = 0; $i < $stars; $i++ ) : ?>
										<span class="star">★</span>
									<?php endfor; ?>
								</div>
							<?php endif; ?>

							<h4 class="testimonial-title"> <?php echo $heading; ?></h4>
							<p class="testimonial-content"> <?php echo $testimonial; ?></p>

							<div class="client-info">
								<div>
									<p>
										<a href="<?php the_permalink(); ?>">
										<?php if($image) {
										echo wp_get_attachment_image( $image, $size );
										} ?>
										</a>
									</p>
								</div>
								<div>
									<p class="client-name"> <?php echo $client_name; ?></p>
									<p> <?php echo $location; ?></p>
								</div>
							</div>
						</li>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>	<!---->
		</div> <!--site-content-->

		<section class="featured" id="faqs">
			<div class="site-content">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stars.png" alt="divider stars" />
				<h3>Frequently Asked Questions</h3>
				<div class="featured-content">
					<p>Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.</p>
					<button>
						<a href="<?php echo esc_url( get_post_type_archive_link( 'faqs' ) ); ?>">
						View All FAQs
						</a>
					</button>
			</div>

			<div class="featured-item">
				<ul>
					<?php query_posts('posts_per_page=3 & post_type=faqs & order=ASC'); ?>
						<?php while (have_posts() ) : the_post();
							$question = get_field('question');
							$answer = get_field('answer');
						?>
						<li>
							<h4> <?php echo $question; ?></h4>
							<p> <?php echo $answer; ?></p>
							<p>
								<a href="<?php the_permalink(); ?>">
									<button>Read More</button>
								</a>
							</p>
						</li>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>
			</div>	<!---->
		</div> <!--site-content-->
	</section>

<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>
