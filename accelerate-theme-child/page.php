<?php
/**
 * The template for Contact page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
             <section class="contact-form">
                <div class="site-content">
                    <h3>Get in Touch with Estatein</h3>
                         <div class="contact-form-content">
                            <p>Welcome to Estatein’s Contact Us page. We’re here to assist you with any inquiries, requests, or feedback you may have. 
                              Whether you’re looking to buy or sell a property, explore investment opportunities, or simply want to connect, we’re just a message away. Reach out to us, and let’s start a conversation.</p>
                        </div>

                        <?php get_template_part( 'template-parts/hero' ); ?>

                        <div class="contact-form-section">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stars.png" alt="divider stars" />
                                        
                            <h3>Let's Connect</h3>
                            <div class="contact-form-content">
                                <p>We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein. 
                                Whether you're a prospective client, partner, or simply curious about our services, we're here to answer your questions and provide the assistance you need.</p>
                            </div>
                        </div> 
                            
                        <!-- The form -->
                        <p><?php the_content(); ?></p>                

                         <div class="contact-form-section">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stars.png" alt="divider stars" />
                                        
                            <h3>Discover Our Office Locations</h3>
                            <div class="contact-form-content">
                                <p>Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, 
                                    or simply drop by for a chat, we have offices conveniently located to serve your needs. Explore the categories below to find the Estatein office nearest to you</p>
                            </div>

                            <div class="locations">
                                <ul>
                                    <?php query_posts('posts_per_page=2 & post_type=locations & order=ASC'); ?>
                                        <?php while (have_posts() ) : the_post();
                                            $type_of_office = get_field('type_of_office');
                                            $name = get_field('name');
                                            $description = get_field('description');
                                            $email = get_field('email');
                                            $phone = get_field('phone');
                                            $city = get_field('city');
                                        ?>
                                        <li>
                                            <p><?php echo ($type_of_office);?></p>
                                            <h4 class="locations-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                            </h4>
                                            <p><?php echo ($description);?></p>

                                            <div class="locations-info">
                                                <span class="pill"><i class="fa fa-envelope"></i><?php echo ($email);?></span>
                                                <span class="pill"><i class="fa fa-phone"></i><?php echo ($phone);?></span>
                                                <span class="pill"><i class="fa fa-map-marker"></i><?php echo ($city);?></span>
                                            </div>
                                            <button>
                                                <a href="<?php the_permalink(); ?>">Get Directions</a>
                                            </button>
                                        </li>

                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                                </ul>
                            </div>	<!---->
                        </div> 

                        <div class="image-gallery">
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-1.png" alt="image of employees" />
                            </div>
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-2.png" alt="image of employees" />
                            </div>
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-4.png" alt="image of employees" />
                            </div>
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-3.png" alt="image of employees" />
                            </div>
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stars.png" alt="image of employees" />
                                <h4>Explore Estatein's World</h4>
                                <p>Step inside the world of Estatein, where professionalism meets warmth, and expertise meets passion. Our gallery offers a glimpse into our team and workspaces, inviting you to get to know us better.</p>
                            </div>
                            <div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-5.png" alt="image of employees" />
                            </div>
                        </div>
            </section>

        </div> <!--main content-->

	</div><!-- #primary -->

<?php get_template_part('template-parts/cta'); ?>


<?php get_footer(); ?>
