<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package venezuela-blog
 */

?>

<?php if( ( is_home() && is_front_page() ) || ( is_archive() ) ) : ?>

	<?php get_template_part( 'template-parts/content-preview' ); ?>

<?php else : ?>

	<?php get_template_part( 'template-parts/content-post' ); ?>

<?php endif; ?>
