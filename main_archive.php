<?php
/**
 * The page template for the main archive
 * 
 * Template Name: Archive
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package venezuela-blog
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main mw8 center" role="main">

<div class="pv3 pv6-ns">
		<header class="page-header tc">

			<h1 class="page-title mw8 center ph3 lh-title"><?php the_title(); ?></h1>

		</header><!-- .page-header -->


			<div class="flex flex-column flex-row-ns justify-center ph3 ph1-ns pb5">

				<h3 class="pa1 pr3 ma0">Sort posts by month and year:</h2>

				<select class="br2 system" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;" >
				  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
				  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
				</select>

			</div>

			</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
