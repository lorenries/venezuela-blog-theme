<?php if ( 'post' === get_post_type() ) : ?>

	<article id="post-<?php the_ID(); ?>" class="center mw8 ph3">
		<header class="entry-header">

			<?php

			if ( is_single() ) :
				the_title( '<h1 class="entry-title f3 f2-ns f1-l lh-title mv3 bold measure center">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title f3 f2-ns f1-l bold center"><a class="link wola-gray" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			?>

			<div class="entry-meta">


				<!-- BEGIN AUTHOR CARD TEMPLATES -->

				<?php if ( function_exists( 'get_coauthors' ) ) {

					$coauthors = get_coauthors();

					if ($coauthors[0]->display_name == 'wordpress') {

						return;

					} elseif(count($coauthors) < 2) {
						$archive_link = get_author_posts_url( $coauthors[0]->ID, $author->user_email );
						$link_title = 'Posts by ' . $coauthors[0]->display_name;
						?>
						<div class="flex items-stretch pv3 mb4 bt bb b1 b--light-gray">
							<div class="self-center">
								<a href="<?php echo esc_url( $archive_link ); ?>" class="author-link" title="<?php echo esc_attr( $link_title ); ?>"><?php echo coauthors_get_avatar( $coauthors[0], 75 ); ?></a>
							</div>
							<div class="flex flex-column justify-center pl2 f5">
								<?php echo coauthors_posts_links_single( $coauthors[0] )?>
								<div class="mid-gray"><time><? echo get_the_date('F j, Y')?></time></div>
							</div>
						</div>
						<?php	
					} else {
		      // More than 2 authors
						printf( __( '<div class="pv3 bt bb b--light-gray mb4"><div class="mid-gray f5">By %2$s %1$s</div>', 'venezuela_blog' ),
							sprintf( '<div class="entry-date mid-gray f5"><time>%1$s</time></div></div>',
								get_the_date('F j, Y')
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

				<!-- END AUTHOR CARD TEMPLATES -->

			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->


		<?php if ( has_post_thumbnail() ) : ?>
			<div class="center relative">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="center db"></img>
				<p class="caption f6 absolute bottom-0 right-0 ma0 pa3 white i"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<div class="flex flex-column flex-row-l justify-between<?php if ( has_post_thumbnail() ) : ?> pt3<?php endif; ?>">
			<div class="entry-content measure lh-copy f4 w-100 w-70-l center-nl">		

				<!-- THIS IS WHERE THE CONTENT GOES -->
					
					<?php

					if ( get_the_ID() <= 72 || get_the_ID() > 650 ) {

						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'venezuela-blog' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );

						
					} else {
						// echo html_entity_decode( htmlentities( get_the_content() ) );

						$mycontent = get_the_content();
						echo $mycontent;

					}


					?>

				<!-- END OF THE CONTENT -->

			</div><!-- .entry-content -->
			<div class="w-100 w-30-l pb4 pb0-l">
				<div class="sticky"><?php get_sidebar(); ?></div>
			</div>

		</div>

		<footer class="entry-footer pb5">
			<?php the_widget( 'VZ_Recent_Posts_Widget' ); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
<?php endif; ?>