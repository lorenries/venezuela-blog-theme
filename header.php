<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package venezuela-blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text dn" href="#content"><?php esc_html_e( 'Skip to content', 'venezuela-blog' ); ?></a>

	<header id="masthead" class="site-header w-100" role="banner">
		
		<div class="w-100 bg-wola-gray pa0 ma0">		
			<div class="mw8-5 center pa0 ma0">
				<div class="site-branding flex flex-column flex-row-ns justify-around pa2 ma0">
						<div class="flex items-center">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/logo2.png" alt="WOLA Logo" class="ph2" style="max-height: 6rem; width: auto;">
							</a>
						</div>
						<div class="ph3 mv3 br b--white"></div>
						<div class="flex items-center pl4">
							<h1 class="site-title white ttu f4 f3-ns f2-l lh-title ph2" style="max-width: 30rem">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="link white medium">Venezuelan <span class="extrabold">Politics</span> and <span class="extrabold">Human Rights</span></a>
							</h1>
						</div>
						<div class="flex items-center">
							<p class="site-description white measure-narrow ph2 ttu f6 f5-l i"><span class="bold">Independent, Reality-Based Analysis</span></br><span class="medium">Curated by David Smilde</span></p>
						</div>

				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation pa0 ma0" role="navigation">
					<button class="menu-toggle dn" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'venezuela-blog' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'link white flex ph3 ma0 list', 'container_class' => 'list pa3 nested-list-reset',  ) ); ?>
				</nav><!-- #site-navigation -->
				
			</div>
		</div>	

	<!-- header image -->

	<?php if ( get_header_image() && is_front_page() ) : ?>
		<div class="w-100 vh-25 cover pa0 ma0" style="background-image: url('<?php header_image(); ?>');">
			<!-- <img src="<?php header_image(); ?>" class="w-100 h-25"></img> -->
		</div>
	<?php endif; ?>

	<!-- end header image -->			
		
	</header><!-- #masthead -->


	<div id="content" class="site-content pa2">
