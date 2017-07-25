<?php
/**
 * The template for displaying author pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package venezuela-blog
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main mw8 center" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title mw8 center ph3">', '</h1>' );
					the_archive_description( '<div class="archive-description mw8 center ph3">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="flex flex-column flex-row-l justify-center">
<p>TEST</p>
			<div class="center self-center mw-100 w-70-l">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			?>
			<div class="flex justify-between ph1 pv3 pa3">
				<div class=""><?php next_posts_link('&larr; Older Posts') ?></div>
				<div class=""><?php previous_posts_link('Newer Posts &rarr;') ?></div>
			</div>

			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div>

		<div class="center w-100 w-30-l pb4 pb0-l"><?php get_sidebar(); ?></div>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
