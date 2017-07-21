<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package venezuela-blog
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main mw8 center" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="flex flex-column flex-row-l justify-center">

				<div class="center self-center mw-100 w-70-l">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to overload this in a child theme then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
								?>

							<?php endwhile; ?>

							<div class="flex justify-between pa3">
								<div class=""><?php next_posts_link('&larr; Older Posts') ?></div>
								<div class=""><?php previous_posts_link('Newer Posts &rarr;') ?></div>
							</div>

						<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

							<?php get_template_part( 'no-results', 'index' ); ?>

						<?php endif; ?>

					</div>
					<div class="center w-100 w-30-l pb4 pb0-l"><?php get_sidebar(); ?></div>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php

		get_footer();
