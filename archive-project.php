<?php
/**
 * The template for displaying the project page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerottiPaintings
 */

get_header(); ?>

	<div class="container">
			<div id="primary" class="content-area-full">
				<main id="main" class="site-main" role="main">
				
				<?php
			    $terms = get_terms("project_category");
			    $count = count($terms);
			    echo '<div id="filters" class="btn-group">';
			    echo '<button type="button" class="btn btn-default" data-filter="*">'. __('All', 'stanleywp') .'</button>';
			        if ( $count > 0 )
			        {   
			            foreach ( $terms as $term ) {
			                $termname = strtolower($term->name);
			                $termname = str_replace(' ', '-', $termname);
			                echo '<button type="button" class="btn btn-default" data-filter=".'.$termname.'">'.$term->name.'</button>';
			            }
			        }
			    echo "</div>";
			?>
				<?php
				if ( have_posts() ) : ?>
					<div class="row justify-content-center text-center">
						<header class="page-header col-md-6">

							<?php $project_title = get_theme_mod( 'project_title', 'Projects' ); ?>

							<?php if( $project_title != '') : ?>
								<h1><?php echo $project_title; ?></h1>
							<?php endif; ?>

						</header><!-- .page-header -->
					</div><!--  .row -->

					<div class="row mt-5" id="portfolio-items">
						

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>

						<?php
		                $terms = get_the_terms( $post->ID, 'project_category' );
		                                     
		                if ( $terms && ! is_wp_error( $terms ) ) : 
		                    $links = array();
		 
		                    foreach ( $terms as $term ) 
		                    {
		                        $links[] = $term->name;
		                    }
		                    $links = str_replace(' ', '-', $links); 
		                    $tax = join( " ", $links );     
		                else :  
		                    $tax = '';  
		                endif;
		                ?>

					<article id="post-<?php the_ID(); ?>" class="col-md-3 item <?php echo strtolower($tax); ?>">

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-thumbnail">
							    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							        <?php the_post_thumbnail(); ?>
							    </a>
							</div><!--  .post-thumbnail -->
						<?php endif; ?>

						<header class="entry-header">
							<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
						</header><!-- .entry-header -->

					</article><!-- #post-## -->

						<?php endwhile; ?>

						
					</div><!--  .row -->

						<div class="col-md-12">

							<?php the_posts_navigation(); ?>

						</div><!--  .col-md-12 -->

					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				
				</main><!-- #main -->
			</div><!-- #primary -->
	</div><!--  .container -->

<?php get_footer(); ?>