<?php
/**
 * The template for displaying 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

  <section class="section-content">
    <div class="section-container section-image">
        <h2>404 ERROR</h2>
        <h2>YOU SHOULD HAVE TOOK THE BLUE PILL NEO</h2>

    </div>
  </section>


<?php get_footer(); ?>
