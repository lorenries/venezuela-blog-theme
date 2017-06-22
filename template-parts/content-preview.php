<article id="post-<?php the_ID(); ?>" class="mw7 ba b1 b--black-20 br2 pa3 ma3 card-shadow">
	<header class="entry-header">
		<?php
			
		the_title( '<h2 class="entry-title f3 bold"><a class="link wola-gray" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php venezuela_blog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php

	if ( has_post_thumbnail() ) : ?>
		
		<?php the_post_thumbnail(); ?>

	<?php endif; ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php venezuela_blog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>