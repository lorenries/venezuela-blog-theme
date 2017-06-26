<article id="post-<?php the_ID(); ?>" class="mw7 ba b1 b--black-20 br2 ph3 ma3 card-shadow">
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) : ?>
		<div class="f6 black-70 entry-meta">
			<?php venezuela_blog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
			
		<?php the_title( '<h2 class="entry-title f3 bold"><a class="link wola-gray hover-wola-blue" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<?php

	if ( has_post_thumbnail() ) : ?>

		<div class="">

			<a href="<?php get_permalink($post->ID); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="w-100 max-height-5 center object-fit-cover"></img></a>

		</div>


	<?php endif; ?>

	<div class="entry-content">
		<p><?php echo wp_trim_words( get_the_content(), $num_words = 35, $more = "…" );?></p>
	</div><!-- .entry-content -->

</article>