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

				<nav id="site-navigation" class="main-navigation ma0 flex justify-between items-center" role="navigation">
					<button class="menu-toggle dn" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'venezuela-blog' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'link white flex items-center ph3 pv0 ma0 list', 'container_class' => 'flex items-center list nested-list-reset',  ) ); ?>
					<ul class="link white flex-l items-center dn ph3 pv0 ma0 list">
						<li class="flex items-center">
							<a href="#" class="link dim white dib h1-5 w1-5 mr3 self-center">
								<svg viewBox="0 0 101 100" data-icon="search" style="fill:currentColor>
								    <g stroke="none" stroke-width="1" fill-rule="evenodd">
								        <g id="search" fill-rule="nonzero" fill="#fff">
								            <path d="M40,78.46 C24.1123478,78.5531487 9.73722832,69.054351 3.59263458,54.4027252 C-2.55195917,39.7510994 0.747383409,22.839992 11.9487649,11.5725511 C23.1501463,0.305110217 40.0415611,-3.09361342 54.7290641,2.96472187 C69.4165671,9.02305715 78.9997269,23.3420747 79,39.23 C79.0332748,60.8201847 61.5900071,78.3663229 40,78.46 Z M40,15.46 C30.3524152,15.3748781 21.6079103,21.122533 17.8596093,30.0126049 C14.1113083,38.9026767 16.1008759,49.1761144 22.8970363,56.0241319 C29.6931966,62.8721493 39.9512144,64.9397503 48.8695211,61.2591332 C57.7878279,57.5785161 63.6017858,48.8779531 63.59,39.23 C63.639829,26.1469524 53.0829754,15.4961209 40,15.43 L40,15.46 Z" id="Shape"></path>
								            <rect id="Rectangle-path" transform="translate(78.906566, 77.954518) rotate(-45.120000) translate(-78.906566, -77.954518) " x="71.1865663" y="54.464518" width="15.44" height="46.98"></rect>
								        </g>
								    </g>
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
				</nav><!-- #site-navigation -->
				
			</div>
		</div>	

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
		<div class="center pt5 pt6-ns">
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
	</aside>

	<div id="content" class="site-content pa2">
