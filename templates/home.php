<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerottiPaintings
 */
get_header(); ?>



	<div class="pagewrap">
	
	</div>

	<div class="container">	
		<div class="row justify-content-center text-center mt-5">
			<?php 
					// the query
					$args = array('post_type' => 'project', 'posts_per_page' => 6);

					$the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

							get_template_part( 'template-parts/content', 'home' );

						 endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
		

		</div><!--  .row -->
	</div><!--  .container -->


<?php
get_footer(); ?>


