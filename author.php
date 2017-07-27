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

		if ( have_posts() ) :

			global $coauthors_plus;

			if (isset($coauthors_plus)) {
				$curauth = $coauthors_plus->get_coauthor_by( 'user_nicename', $author_name );
			} else {
				if(isset($_GET['author_name'])) :
					$curauth = get_userdatabylogin($author_name);
				else :
					$curauth = get_userdata(intval($author));
				endif;
			}

			?>

			<header>
				<div class="flex flex-column flex-row-ns justify-start items-center pt3 ph3">
					<div class="author-picture order-1 order-0-ns pt4 pt0-ns">
						<?php echo coauthors_get_avatar( $curauth, 200) ?>
					</div>
					<div class="mw6 pl0 pl4-ns order-0 order-1-ns">
						<h1 class="f2 ma0 pb1"><?php echo $curauth->display_name; ?></h1>
						<h2 class="f4 i ma0"><?php echo $curauth->title; ?></h2>
					</div>

				</div>

			</header>

			<?php if($curauth->description !="") { /* Displays the author's description from their WordPress profile */ ?>
			<p class="ph3 ml0 ml2-ns"><?php echo $curauth->description; ?></p>
			<?php } ?>


			<div class="flex flex-column flex-row-l justify-center">

				<div class="center self-center mw-100 w-70-l pr0 pr4-l">
				
					<!-- <div class="hline relative ph3"> -->
					<h3 class="extrabold ttu i flex justify-start hline ph3">Posts by <?php echo $curauth->first_name; ?></h3>
					<!-- </div> -->

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
			<div class="flex justify-between ph1 pt3 pb4">
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
