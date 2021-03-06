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

		<?php if ( venezuela_blog_has_featured_posts( 1 ) ) : ?>
			<h3 class="extrabold ttu i flex justify-start hline-center ph0 ph1-ns ma0 pv2">Featured</h3>
		    <?php get_template_part( 'template-parts/featured' ); ?>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<div class="flex flex-column flex-row-l justify-center">

				<div class="center self-center mw-100 w-70-l pr0 pr3">

					<h3 class="extrabold ttu i flex justify-start hline ph3">The Latest</h3>

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

					<div class="center w-100 w-30-l ph2 pb4 pb2-l">
						
						<div class="">

							<?php get_template_part( 'template-parts/contributors'); ?>
							
							<?php get_sidebar(); ?>

							<?php get_template_part( 'template-parts/twitter-timeline'); ?>
								
						</div>
							
					</div>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php

		get_footer();
