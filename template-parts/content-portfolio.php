<?php
/**
 * Template part for displaying projects on portfolio page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerottiPaintings
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?>>

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