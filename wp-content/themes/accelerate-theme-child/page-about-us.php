<?php
/**
 * The template for displaying about us page
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

    <section class="about-page">

            <div id="primary" class="home-page hero-content">
              <div class="main-content" role="main">
                  <?php while ( have_posts() ) : the_post(); ?>
                  <h2>Accelerate is a strategy and marketing agency <br>
    located in the heart of NYC. Our goal is to build <br>
    businesses by making our clients visible and <br>
    making their customers smile.</h2>
                <?php endwhile; // end of the loop. ?>
              </div><!-- .main-content -->
            </div><!-- #primary -->
    </section>



      <section class="our-services">
        <div class="site-content">
            <h1>OUR SERVICES</h1>
            <h4>We take pride in our clients and the content we create for them.</h4>
            <h4>Here is a brief overview of our offered services.</h4>
        </div>
  <div class='services-description'>


      <ul class="about-services">
        <?php query_posts('posts_per_page=4&post_type=our_services'); ?>
            <?php while ( have_posts() ) : the_post();
                $service = get_field('service');
              $description = get_field('description');
              $image_1 = get_field('image_1');
              $size = "medium";?>

          <li class="individual-about-service clearfix">
              <figure class="about-image">
                 <?php echo wp_get_attachment_image($image_1, $size); ?>
              </figure>
              <div class="about-description">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <?php the_content(); ?>
              </div>



          </li>
            <?php endwhile; // end of loop. ?>
            <?php wp_reset_query(); ?>
      </ul>

        <div class="site-content">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class='contact-button'>
            <h2>Interested in working with us?</h2>
              <a class="button" href="<?php echo home_url('/contact/'); ?>">Contact us</a>
            </div>
            <?php endwhile; // end of the loop. ?>
        </div>
  </div>
  </section>

<?php get_footer(); ?>
