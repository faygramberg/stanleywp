<?php
/**
 * Template part for displaying projects on the home or portfolio page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PerottiPaintings
 */
?>
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


