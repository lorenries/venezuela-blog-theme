<?php
/**
 * default search form
 */
?>
<form class="search-form center tc overflow-hidden" data-collapsed="true" role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="height: 0px;">
	<div class="search-wrap w-80 center relative pv4">
		<label class="screen-reader-text dn" for="s"><?php _e( 'Search for:', 'presentation' ); ?></label>
		<input class="search-field bn pv3 pl3 w-100 f3 system br2" type="search" placeholder="<?php echo esc_attr( 'Search…', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
		<!-- <input class="screen-reader-text pa3 f3 system bn" type="submit" id="search-submit" value="Go"></input> -->
		<button class="search-button link bn pa0 ma0 wola-gray absolute mr3 pointer" type="submit" style="right: 0px; top: 50%; transform: translateY(-50%);"><svg class="link dim dib h2 w2 self-center" viewBox="0 0 25 25" data-icon="search" style="fill: currentColor;">
				<path d="M23.994 22.348l-6.66-6.66c3.22-3.975 2.765-9.775-1.036-13.198-3.8-3.423-9.616-3.27-13.233.345C-.55 6.452-.703 12.268 2.72 16.068c3.423 3.8 9.223 4.256 13.197 1.035l6.66 6.662c.254.253.623.35.968.26.346-.094.616-.364.71-.71.09-.345-.008-.714-.26-.967zM2.254 9.636c0-4.198 3.414-7.61 7.612-7.61s7.612 3.412 7.612 7.61c0 4.2-3.414 7.612-7.612 7.612s-7.61-3.413-7.61-7.612z" id="Shape"/>
			</svg></button>
	</div>
</form>