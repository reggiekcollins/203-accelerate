<?php
/**
 * The template for displaying pages
 * Template post type: page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>



<div id="primary" class="home-page hero-content">
  <div class="main-content" role="main">
    <section class="about-page">
    <?php while ( have_posts() ) : the_post(); ?>

        <h3>Accelerate is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> business by making out clients visible and<br> making their customers smile</h3>


      <?php endwhile; // end of the loop. ?>
      </section>

  </div><!-- .main-content -->
</div><!-- #primary -->


<section class="our-services">
  <div class="site-content">
      <h3>Our Services</h3>
        <p>we take pride in our services and the content we create for them.<br> Here's a brief overview of our offered services.</p>


      <ul class="about-page-services">
          <?php query_posts('posts_per_page=4&post_type=our_services'); ?>
          <?php while (have_posts() ) : the_post();
                $image_1 = get_field('image_1');
                $size = "medium";
           ?>
                <li class="our-services">
                    <figure>
                  <?php echo wp_get_attachment_image($image_1, $size); ?>
                    </figure>
                    <div class="about-content">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_content(); ?>
                    </div>
                </li>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
    </ul>
  </div>
</section>




<?php get_footer(); ?>
