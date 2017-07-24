<article id="post-<?php the_ID(); ?>" class="center mw8 ph3">
	<header class="entry-header">
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title f3 f2-ns f1-l lh-title bold measure center">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title f3 f2-ns f1-l bold center"><a class="link wola-gray" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->


	<?php if ( has_post_thumbnail() ) : ?>
		<div class="center">
			<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="center db"></img>
		</div><!-- .entry-meta -->
	<?php endif; ?>

	<div class="flex flex-column flex-row-l<?php if ( has_post_thumbnail() ) : ?> pt3<?php endif; ?>">
		<div class="entry-content measure lh-copy f4 w-100 w-70-l center-nl">
			
			<?php if ( function_exists( 'get_coauthors' ) ) {

				$coauthors = get_coauthors();

				if ($coauthors[0]->display_name == 'wordpress') {

					?>

					<div><? echo get_the_date('F j, Y')?></div>

					<?php

				} elseif(count($coauthors) < 2) {
					$archive_link = get_author_posts_url( $coauthors[0]->ID, $author->user_email );
					$link_title = 'Posts by ' . $coauthors[0]->display_name;
					?>
					<div class="flex items-stretch">
						<div class="self-center">
							<a href="<?php echo esc_url( $archive_link ); ?>" class="author-link" title="<?php echo esc_attr( $link_title ); ?>"><?php echo coauthors_get_avatar( $coauthors[0], 75 ); ?></a>
						</div>
						<div class="flex flex-column justify-center pl2 f5">
							<?php echo coauthors_posts_links_single( $coauthors[0] )?>
							<div><? echo get_the_date('M. d')?></div>
						</div>
					</div>
					<?php	
				} else {
			      // More than 2 authors
					printf( __( '<div class="">By %2$s, %1$s</div>', 'venezuela_blog' ),
						sprintf( '<span class="entry-date">%1$s</span></a>',
							get_the_date('M. d')
						),
						coauthors_posts_links( ", ", " and ", null, null, false )
					);
			      // treat author output normally
				}
			}
			else {
				$archive_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
				$link_title = 'Posts by ' . the_author();

				?>
				<a class="author-link" href="<?php echo esc_url( $archive_link ); ?>" title="<?php echo esc_attr( $link_title ); ?>"></a>
				<?php
			} ?>			

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
		<div class="center w-100 w-30-l pb4 pb0-l">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->