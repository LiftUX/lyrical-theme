<?php
/**
 * The template part for displaying general content.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ascension
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	if( ! is_single() ):
		get_template_part( 'templates/parts/loop/post', 'thumbnail' );
	endif;

	?>

	<?php get_template_part( 'templates/parts/loop/post', 'title' ); ?>

	<?php get_template_part( 'templates/parts/loop/post', 'meta' ); ?>

	<?php

	if( is_single() ):
		get_template_part( 'templates/parts/loop/post', 'content' );
	else:
		get_template_part( 'templates/parts/loop/post', 'excerpt' );
	endif;

	?>

	<?php get_template_part( 'templates/parts/loop/post', 'footer' ); ?>

</article><!-- #post-## -->
