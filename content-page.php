<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ascension
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'templates/parts/loop/page', 'content' ); ?>

	<?php get_template_part( 'templates/parts/loop/page', 'footer' ); ?>

</article><!-- #post-## -->
