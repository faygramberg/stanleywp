<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */
?>

<div class="col-md-8">

	<?php 
					// Get the list of files
	$files = get_post_meta( get_the_ID(), '_stanleywp_images', 1 );

					// Loop through them and output an image
	 foreach ( (array) $files as $attachment_id => $attachment_url ) {
		echo '<div class="post-thumbnail">';
		echo '<a href="$attachment_id['url'];" data-rel="lightbox-gallery-test" title="<?php the_title_attribute(); ?>">';
		echo wp_get_attachment_image( $attachment_id, 'full' );
		echo '</a>';
		echo '</div>';
	}
	?>
</div> 
