<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package venezuela-blog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-light-gray" role="contentinfo">
		<div class="flex justify-between mw8 center pv5">
			<div>
				<h3 class="bb bw2 b--wola-blue">Follow WOLA</h3>
				<ul class="link white flex items-center list ma0 pa0">
					<li class="flex items-center">
						<a class="link hover-twitter wola-gray dib h1-5 w1-5 mr3 self-center" href="https://twitter.com/WOLA_org" title="Follow WOLA on Twitter" rel="noopener noreferrer" target="_blank">
							<svg data-icon="twitter" viewBox="0 0 32 32" style="fill:currentColor">
								<title>twitter icon</title>
								<path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"></path>
							</svg>
						</a>
					</li>
					<li class="flex items-center">
						<a class="link hover-facebook wola-gray dib h1-5 w1-5 mr3 self-center" href="https://www.facebook.com/WOLA.org/" title="Follow WOLA on Facebook" rel="noopener noreferrer" target="_blank">
							<svg data-icon="facebook" viewBox="0 0 32 32" style="fill:currentColor">
								<title>facebook icon</title>
								<path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z"></path>
							</svg>
						</a>
					</li>
					<li class="flex items-center"><a href="https://wola.org" class="link wola-gray hover-wola-blue f4 fw3" rel="noopener noreferrer" target="_blank">WOLA.org</a></li>
				</ul>
			</div>

			<div>

				<h3 class="bb bw2 b--wola-blue">Contact</h3>
				<div class="">
					<p>Washington Office on Latin America<br>1666 Connecticut Ave NW, Suite 400<br>Washington, DC 20009</p><p>Tel: (202)797-2171</p>
				</div>

			</div>

			<div>

				<h3 class="bb bw2 b--wola-blue">Menu</h3>

				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'link f4 fw3 wola-gray pl2 pv0 ma0 list flex flex-column', 'container_class' => 'list',  ) ); ?>

			</div>

		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
