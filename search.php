<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package venezuela-blog
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main mw8 center" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header tc">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'venezuela-blog' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			?>

			<div class="flex justify-between ph1 pt3 pb4">
				<div class=""><?php next_posts_link('&larr; Older Posts') ?></div>
				<div class=""><?php previous_posts_link('Newer Posts &rarr;') ?></div>
			</div>

			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
