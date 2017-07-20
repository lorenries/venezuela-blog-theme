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
				<div class="mw8-5 center pa3 ma0">
					<div class="site-branding flex flex-column flex-row-ns justify-between ma0">
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
						<div class="flex items-center justify-end">
							<p class="site-description white ph2 ttu f6 f5-l i tr"><span class="bold">Independent, Reality-Based Analysis</span></br><span class="medium">Curated by David Smilde</span></p>
						</div>

					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">

						<div class="ma0 flex justify-between items-center">
							<button class="menu-toggle dn" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'venezuela-blog' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'link white flex items-center ph3 pv0 ma0 list', 'container_class' => 'flex items-center list nested-list-reset',  ) ); ?>
							<ul class="link white flex-l items-center dn ph3 pv0 ma0 list">
								<li class="flex items-center">
									<a href="#search" class="link dim white dib h1-5 w1-5 mr3 self-center">
										<svg class="link dim white dib h1-5 w1-5 mr3 self-center" viewBox="0 0 25 25" data-icon="search" style="fill: currentColor;">
											<path d="M23.994 22.348l-6.66-6.66c3.22-3.975 2.765-9.775-1.036-13.198-3.8-3.423-9.616-3.27-13.233.345C-.55 6.452-.703 12.268 2.72 16.068c3.423 3.8 9.223 4.256 13.197 1.035l6.66 6.662c.254.253.623.35.968.26.346-.094.616-.364.71-.71.09-.345-.008-.714-.26-.967zM2.254 9.636c0-4.198 3.414-7.61 7.612-7.61s7.612 3.412 7.612 7.61c0 4.2-3.414 7.612-7.612 7.612s-7.61-3.413-7.61-7.612z" id="Shape"/>
										</svg>
									</a>
								</li>
								<li class="flex items-center">
									<a class="link dim white dib h1-5 w1-5 mr3 self-center" href="#" title="">
										<svg data-icon="twitter" viewBox="0 0 32 32" style="fill:currentColor">
											<title>twitter icon</title>
											<path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"></path>
										</svg>
									</a>
								</li>
								<li class="flex items-center">
									<a class="link dim white dib h1-5 w1-5 mr3 self-center" href="#" title="">
										<svg data-icon="facebook" viewBox="0 0 32 32" style="fill:currentColor">
											<title>facebook icon</title>
											<path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z"></path>
										</svg>
									</a>
								</li>
								<li class="flex items-center"><a href="https://wola.org" class="link white dim">WOLA.org</a></li>
							</ul>
						</div>

					</nav>


					<!-- #site-navigation -->
					
				</div>
			</div>	

			<?php get_search_form(); ?>

			<!-- header image -->

			<?php if ( get_header_image() && is_front_page() ) : ?>
				<div class="header-imagew-100 vh-25 cover pa0 ma0" style="background-image: url('<?php header_image(); ?>');">
					<!-- <img src="<?php header_image(); ?>" class="w-100 h-25"></img> -->
				</div>
			<?php endif; ?>

			<!-- end header image -->			
			
		</header><!-- #masthead -->

		<aside id="aboutModal" class="overlay center pa3 pa4-ns">
			<a href="#" class="closebtn">&times;</a>
			
			<div class="center pt5 pt6-ns flex justify-center">
				<div>
					<h1 class="wola-gray f2 ttu">About the Blog</h1>
					<p class="measure wola-gray f3 tl">
						Venezuelan Politics and Human Rights, a blog hosted by the Washington Office on Latin America (WOLA), is a unique resource for journalists, policymakers, scholars, activists and others interested in understanding Venezuelan politics and human rights. 
					</p>
					<p class="measure wola-gray f3 tl">
						The contributors call it as they see it, providing insights on Venezuela’s politics that go beyond the polarized pro-Chávez/anti-Chávez debate. The views expressed in the posts are those of the authors and do not necessarily reflect WOLA’s institutional positions. 
					</p>
					<h2 class="wola-gray f3 ttu">The Bloggers</h2>
					<p class="measure wola-gray f3">David Smilde, curator of the blog, is a WOLA Senior Fellow and the Charles A. and Leo M. Favrot Professor of Human Relations at Tulane University. He has lived in or worked on Venezuela since 1992. He is co-editor of Venezuela's Bolivarian Democracy: Participation, Politics and Culture under Chávez (Duke 2011).</p>
					<p class="measure wola-gray f3">Hugo Pérez Hernáiz is Associate Professor of Sociology at the Universidad Central de Venezuela.</p>
					<p class="measure wola-gray f3">Rebecca Hanson is a graduate student in sociology at the University of Georgia doing doctoral research on police reform and citizen participation in Venezuela.</p>
					<p class="measure wola-gray f3">Timothy Gill is a Post-Doctoral Fellow at the Center for Inter-American Policy and Research at Tulane University. His research focuses on US foreign policy towards Venezuela and foreign funding for non-governmental organizations.</p>
					<h2 class="wola-gray f3 ttu">About WOLA</h2>
					<p class="measure wola-gray f3">WOLA is a leading research and advocacy organization advancing human rights in the Americas.</p>
					<h2 class="wola-gray f3 ttu">Contact</h2>
					<p class="measure wola-gray f3">For comments related to this blog, email us at venezuelablog@wola.org. </p>
					<p class="measure wola-gray f3">For press inquiries only, please email us at press@wola.org. </p>
				</div>
			</div>

		</aside>

		<div id="content" class="site-content pa2 bg-fafafa">
