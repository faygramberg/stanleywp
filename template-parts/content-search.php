<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerottiPaintings
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail(); ?>
		    </a>
		</div><!--  .post-thumbnail -->
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php stanleywp_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php stanleywp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
