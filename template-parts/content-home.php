<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
		    <a href="<?php the_post_thumbnail_url(); ?>" data-rel="lightbox-gallery-test" title="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
		        <?php the_post_thumbnail(); ?>
		    </a>
		</div><!--  .post-thumbnail -->
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
