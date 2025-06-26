<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays custom post types: properties archive
 * 
 * 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

            <h2 class="case-studies-archive">Our Properties </h2>

            <?php global $query_string;
            query_posts( $query_string.'&order=ASC' );?>

            <?php while ( have_posts() ) : the_post(); 
                $image = get_field("property_image");
				$size = "medium";
				$property_description = get_field('property_description');
				$bedrooms = get_field('bedrooms');
				$bathrooms = get_field('bathrooms');
				$type_of_property = get_field('type_of_property');
				$price = get_field('price');
            ?>

            <div class="case-studies-row">
                <section class="case-studies-col">
                    <h2> 
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title();?> 
                        </a>
                    </h2>
                    <h4> <?php echo $property_description;?> </h4>
                    <p> <?php the_excerpt();?> </p>
                    <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Property 🡢</a></p>
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
                </section>

                <section class="case-studies-col">
                    <a href="<?php the_permalink(); ?>">
                    <?php if($image) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </a>
                </section>
            </div>

            <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
