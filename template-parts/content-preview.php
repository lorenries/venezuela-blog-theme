<article id="post-<?php the_ID(); ?>" class="mw7 ba b1 b--black-20 br2 ph3 ma1 ma3-ns bg-white card-shadow">
	
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) : ?>
		<div class="f6 black-70 flex justify-between items-start pt3">

			<?php if ( function_exists( 'get_coauthors' ) ) {

				$coauthors = get_coauthors();


				
				if(count($coauthors) < 2) {
					$archive_link = get_author_posts_url( $coauthors[0]->ID, $author->user_email );
					$link_title = 'Posts by ' . $coauthors[0]->display_name;
					?>
					<script type="text/javascript">console.log("<?php echo get_author_posts_url( $coauthors[0] ) ?>")</script>
					<div class="flex">
						<div>
							<a href="<?php echo esc_url( $archive_link ); ?>" class="author-link" title="<?php echo esc_attr( $link_title ); ?>"><?php echo coauthors_get_avatar( $coauthors[0], 50 ); ?></a>
						</div>
						<div class="flex flex-column justify-center pl2">
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

			<div class="self-start"><?php echo get_reading_time(); ?></div>

		</div><!-- .entry-meta -->
	<?php endif; ?>

	<?php the_title( '<h2 class="entry-title f3 bold lh-title"><a class="link wola-gray hover-wola-blue" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

</header><!-- .entry-header -->

<?php if ( has_post_thumbnail() ) : ?>

	<div class="">

		<a href="<?php echo esc_url( get_permalink() ); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="w-100 max-height-5 center object-fit-cover pb2"></img></a>

	</div>


<?php endif; ?>

<div>
	<?php if ( has_excerpt() ) : ?>
		<p class="pa0 ma0"><?php echo  get_the_excerpt(); ?></p> 
	<?php else: ?>
		<p class="pa0 ma0"><?php echo force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( get_the_content() ), 50, $more = "…" ) ) );?></p>

	<?php endif; ?>
</div><!-- .entry-content -->

<footer class="flex justify-between pv3">	
	<div class="f5 self-end">
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="link underline-hover wola-blue">Read More…</a>
	</div>
	<div>
		<a title="Share this post on Twitter" href="<?php $posturl = urlencode( get_permalink() ); $text = urlencode( get_the_title() ); $url = 'https://twitter.com/intent/tweet?url='.$posturl.'&text='.$text; echo esc_url($url); ?>" class="link" rel="external noopener noreferrer" target="_blank">

			<div class="h-auto dib twitter grow-large" style="width:1.5rem;"><?php get_template_part( 'assets/icons/twitter.svg' ); ?></div>
			
		</a>
		
		<a title="Share this post on Facebook" href="<?php $posturl = urlencode( get_permalink() ); $text = urlencode( get_the_title() ); $url = 'https://www.facebook.com/sharer/sharer.php?u='.$posturl.'&text='.$text; echo esc_url($url); ?>" class="link" rel="external noopener noreferrer" target="_blank">
			<div class="h-auto dib facebook grow-large" style="width:1.5rem;"><?php get_template_part( 'assets/icons/facebook.svg' ); ?></div>
		</a>	
	</div>
</footer>

</article>