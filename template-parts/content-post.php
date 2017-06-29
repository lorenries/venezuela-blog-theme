<article id="post-<?php the_ID(); ?>" class="center mw8">
	<header class="entry-header">
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title f1 lh-title bold measure-wide center">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title f3 bold"><a class="link wola-gray" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php venezuela_blog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="center">
			<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="center db"></img>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="entry-content measure-wide lh-copy f4 center">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'venezuela-blog' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'venezuela-blog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php venezuela_blog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->