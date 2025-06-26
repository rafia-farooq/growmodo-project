<?php
/**
 * The template for each Property
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
                $name = get_field('property_name');
                $property_description = get_field('property_description');
                $bedrooms = get_field('bedrooms');
                $bathrooms = get_field('bathrooms');
                $type_of_property = get_field('type_of_property');
                $price = get_field('price');
                $property_image = get_field('property_image');
                $size = "full";
             ?>


            <article class="case-study">
                <aside class="case-study-sidebar">

                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo $name; ?></h3>
                    <h4>Description: <?php echo $property_description; ?></h4>
                    <p><?php the_content(); ?></p>
                    <p><?php echo $bedrooms; ?> Bedrooms</p>
                    <p><?php echo $bathrooms; ?> Bathroom</p>
                    <p><?php echo $type_of_property; ?></p>
                    <p><?php echo implode($type_of_property);?></p>
                    <p>$<?php echo number_format_i18n($price); ?></p>
               
                </aside>
            </article>
            
             <article class="case-study-images">

                <?php if($property_image) {
                     echo wp_get_attachment_image( $property_image, $size );
                
                } ?>
                            
            </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

    <nav id="navigation" class="container">
        <div class="left"><a href="<?php echo site_url('/properties/') ?>">&larr; <span>Back to Properties</span></a></div>
    </nav>

<?php get_footer(); ?>
