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
	<div id="page" class="site bg-fafafa">
		
		<a class="skip-link screen-reader-text dn" href="#content"><?php esc_html_e( 'Skip to content', 'venezuela-blog' ); ?></a>

		<header id="masthead" class="site-header w-100 pb3" role="banner">

			<div class="w-100 bg-wola-gray">

				<div class="mw8 center pv3 ph2">

					<!-- .site-branding -->

					<div class="flex flex-column flex-row-ns items-center justify-between">
						
						<div class="pv2 pv0-ns ph2 w-20-l">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/wola-logo-white.svg" alt="WOLA Logo" class="h3 h4-ns w-auto" style="max-height: 4rem;">
							</a>
						</div>
						
						<div class="mv1 br b--white dn db-ns pl0 pl3-ns self-stretch"></div>
						
						<div class="flex items-start justify-between pv1 w-70-l">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100 h-auto pl4-l pr5-l ph3-m ph0 pb1" viewBox="0 0 400 70">
								<g id="Page-1" fill="none" fill-rule="evenodd">
									<g id="logo" fill="#FFF">
										<g id="Group">
											<path id="Venezuelan-Politics" d="M22.898.988c.108-.324 0-.504-.252-.504h-2.34c-.288 0-.432.144-.54.396l-8.064 20.628h-.072L3.602.88C3.53.628 3.386.484 3.062.484H.758C.434.484.362.7.506.988l9.432 23.724c.108.324.252.396.54.396h2.304c.324 0 .432-.072.576-.396L22.898.988zM26.03.484c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h16.884c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.36-.324-.36H28.586v-8.46h12.456c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.324-.324-.324H28.586V3.04h14.328c.18 0 .324-.144.324-.36V.844c0-.18-.144-.36-.324-.36H26.03zm39.672 19.872L50.222.844c-.252-.288-.396-.36-.684-.36h-1.98c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h2.088c.18 0 .324-.144.324-.324V5.2l15.48 19.44c.216.288.36.36.648.36h2.016c.18 0 .36-.144.36-.324V.844c0-.18-.18-.36-.36-.36h-2.052c-.216 0-.36.18-.36.36v19.512zM74.198.484c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h16.884c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.36-.324-.36H76.754v-8.46H89.21c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.324-.324-.324H76.754V3.04h14.328c.18 0 .324-.144.324-.36V.844c0-.18-.144-.36-.324-.36H74.198zM93.17 24.46c-.072.072-.072.18-.072.252 0 .18.144.288.36.288h19.08c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.36-.324-.36H97.814L112.466 1.06c.072-.108.072-.18.072-.252 0-.18-.144-.324-.36-.324H93.566c-.18 0-.324.18-.324.36V2.68c0 .216.144.36.324.36h14.256L93.17 24.46zm40.572-9.468c0 2.376-.648 4.248-1.872 5.58-1.296 1.476-3.204 2.196-5.652 2.196-2.412 0-4.32-.72-5.616-2.196-1.188-1.332-1.836-3.204-1.836-5.58V.844c0-.18-.144-.36-.36-.36h-2.16c-.216 0-.36.18-.36.36v14.472c0 2.844.828 5.256 2.376 6.984 1.764 1.944 4.5 3.06 7.992 3.06s6.228-1.116 7.992-3.06c1.548-1.728 2.376-4.14 2.376-6.984V.844c0-.18-.18-.36-.36-.36h-2.196c-.18 0-.324.18-.324.36v14.148zM142.274.484c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h16.884c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.36-.324-.36H144.83v-8.46h12.456c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.324-.324-.324H144.83V3.04h14.328c.18 0 .324-.144.324-.36V.844c0-.18-.144-.36-.324-.36h-16.884zm21.528 0c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h15.048c.18 0 .324-.144.324-.324v-1.872c0-.18-.144-.36-.324-.36h-12.492V.844c0-.18-.18-.36-.36-.36h-2.196zm21.564 18.468l-2.232 5.688c-.072.252-.252.36-.54.36h-2.16c-.216 0-.288-.108-.288-.252 0-.072 0-.18.072-.324L189.542.772c.108-.288.252-.396.54-.396h2.304c.288 0 .432.108.54.396l9.288 23.652c.036.072.108.252.108.324 0 .144-.108.252-.36.252h-2.196c-.288 0-.468-.108-.54-.36l-2.232-5.688h-11.628zm10.908-2.34l-5.076-12.744-5.076 12.744h10.152zm27.396 3.744L208.19.844c-.252-.288-.396-.36-.684-.36h-1.98c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h2.088c.18 0 .324-.144.324-.324V5.2l15.48 19.44c.216.288.36.36.648.36h2.016c.18 0 .36-.144.36-.324V.844c0-.18-.18-.36-.36-.36h-2.052c-.216 0-.36.18-.36.36v19.512zm30.636-11.052c0-1.404-.504-2.268-1.26-2.736-.612-.396-1.368-.54-2.124-.54h-3.996v6.552h3.996c.756 0 1.512-.144 2.088-.504.792-.468 1.296-1.332 1.296-2.772zM241.238.484h10.476c2.016 0 4.176.396 5.976 1.908 1.872 1.548 3.06 3.996 3.06 6.912 0 3.024-1.296 5.544-3.312 7.092-1.728 1.368-3.636 1.728-5.544 1.728h-4.968v6.228c0 .36-.288.648-.648.648h-5.04c-.36 0-.648-.288-.648-.648V1.132c0-.36.288-.648.648-.648zm48.564 12.312c0 7.704-6.156 12.564-13.248 12.564-7.128 0-13.284-4.968-13.284-12.564 0-7.668 6.156-12.636 13.284-12.636 7.092 0 13.248 4.968 13.248 12.636zm-6.732 0c0-3.888-2.7-6.696-6.516-6.696s-6.552 2.808-6.552 6.696 2.736 6.66 6.552 6.66c3.816 0 6.516-2.772 6.516-6.66zM294.086.484c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h15.156c.36 0 .648-.288.648-.648v-4.32c0-.36-.288-.648-.648-.648h-9.468V1.132c0-.36-.288-.648-.648-.648h-5.04zm19.692 0c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648V1.132c0-.36-.288-.648-.648-.648h-5.04zm9 0c-.36 0-.648.288-.648.648v4.32c0 .36.288.648.648.648h6.912v18.252c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648V6.1h6.912c.36 0 .648-.288.648-.648v-4.32c0-.36-.288-.648-.648-.648h-20.16zm24.12 0c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648V1.132c0-.36-.288-.648-.648-.648h-5.04zm22.464 24.876c3.384 0 5.724-.72 7.704-1.656.36-.18.432-.432.288-.792l-2.052-4.356c-.18-.36-.396-.396-.756-.216-1.584.792-3.24 1.26-5.148 1.26-3.78 0-6.552-2.88-6.552-6.876 0-4.032 2.988-6.84 6.516-6.84 1.908 0 3.384.504 4.932 1.224.324.108.612.072.792-.252l2.052-4.284c.144-.288.144-.612-.252-.828-1.692-.828-3.96-1.584-7.344-1.584-7.488 0-13.32 5.292-13.32 12.564 0 7.776 4.896 12.636 13.14 12.636zm19.26 0c2.772 0 5.256-.756 7.02-2.16 1.728-1.368 2.808-3.312 2.808-5.76 0-2.7-1.08-4.428-2.664-5.616-1.908-1.476-4.608-2.016-6.624-2.628-1.692-.504-2.916-1.008-2.916-2.124 0-.432.252-.828.792-1.116.396-.18 1.008-.324 1.8-.324 2.412 0 4.392.936 5.976 1.8.324.18.612.072.792-.252l2.052-4.284c.144-.324.072-.648-.252-.828-1.548-.792-4.032-1.908-8.208-1.908-2.952 0-5.292.684-6.876 1.836-1.836 1.296-2.772 3.204-2.772 5.364 0 2.88 1.152 4.464 2.772 5.688 1.836 1.332 4.284 1.872 6.156 2.484 1.728.54 3.024 1.152 3.024 2.412 0 .36-.108.972-.72 1.404-.432.324-1.152.54-2.232.54-2.592 0-4.644-1.116-6.336-2.16-.36-.216-.648-.072-.792.252l-2.052 4.284c-.18.36-.072.648.252.828 1.908 1.116 4.932 2.268 9 2.268z"/>
											<path id="and-Human-Rights" d="M5.436 62.952L3.204 68.64c-.072.252-.252.36-.54.36H.504c-.216 0-.288-.108-.288-.252 0-.072 0-.18.072-.324l9.324-23.652c.108-.288.252-.396.54-.396h2.304c.288 0 .432.108.54.396l9.288 23.652c.036.072.108.252.108.324 0 .144-.108.252-.36.252h-2.196c-.288 0-.468-.108-.54-.36l-2.232-5.688H5.436zm10.908-2.34l-5.076-12.744-5.076 12.744h10.152zm27.396 3.744L28.26 44.844c-.252-.288-.396-.36-.684-.36h-1.98c-.18 0-.324.18-.324.36v23.832c0 .18.144.324.324.324h2.088c.18 0 .324-.144.324-.324V49.2l15.48 19.44c.216.288.36.36.648.36h2.016c.18 0 .36-.144.36-.324V44.844c0-.18-.18-.36-.36-.36H44.1c-.216 0-.36.18-.36.36v19.512zm30.348-7.596c0 4.716-1.908 8.424-5.58 10.476C66.096 68.568 63.324 69 60.48 69h-8.244c-.18 0-.324-.144-.324-.324V44.844c0-.18.144-.36.324-.36h8.784c4.068 0 7.632 1.044 10.188 3.888 1.764 1.944 2.88 4.68 2.88 8.388zm-19.296-9.828v19.656h5.436c2.376 0 4.608-.396 6.408-1.332 2.952-1.548 4.5-4.5 4.5-8.496 0-2.988-.828-5.22-2.232-6.768-1.836-2.088-4.752-3.06-8.316-3.06h-5.796zm48.78-2.448c-.36 0-.648.288-.648.648v8.712h-9.36v-8.712c0-.36-.288-.648-.648-.648h-5.04c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648V59.46h9.36v8.892c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648v-23.22c0-.36-.288-.648-.648-.648h-5.04zm25.488 14.184c0 1.584-.288 2.7-.9 3.492-.864 1.116-2.052 1.476-3.6 1.476-1.44 0-2.628-.36-3.492-1.476-.612-.792-.9-1.908-.9-3.492V45.132c0-.36-.288-.648-.648-.648h-5.04c-.36 0-.648.288-.648.648v14.184c0 2.7.756 4.968 2.196 6.66 1.836 2.16 4.788 3.384 8.568 3.384 3.816 0 6.768-1.224 8.604-3.384 1.44-1.692 2.196-3.96 2.196-6.66V45.132c0-.36-.288-.648-.648-.648h-5.04c-.36 0-.648.288-.648.648v13.536zm36.648-13.536c0-.36-.288-.648-.648-.648h-5.112c-.504 0-.828.072-1.152.648L152.82 55.86l-5.976-10.728c-.324-.576-.648-.648-1.152-.648h-5.076c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h4.824c.36 0 .648-.288.648-.648V55.5l3.996 7.02c.252.432.468.648 1.008.648h3.708c.54 0 .756-.216 1.008-.648l3.78-7.02v12.852c0 .36.288.648.648.648h4.824c.36 0 .648-.288.648-.648v-23.22zm10.152 19.44l-1.116 3.708c-.144.504-.504.72-1.08.72h-4.968c-.432 0-.576-.216-.576-.504 0-.144.036-.252.072-.396l7.884-23.076c.144-.468.468-.648 1.008-.648h5.328c.54 0 .864.18 1.008.648l7.74 23.076c.036.144.072.252.072.396 0 .288-.144.504-.576.504h-5.112c-.576 0-.936-.216-1.08-.72l-1.08-3.708h-7.524zm6.012-5.076l-2.196-7.452-2.268 7.452h4.464zm27.9-1.08l-9.9-13.284c-.396-.504-.648-.648-1.152-.648h-4.428c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h4.752c.36 0 .648-.288.648-.648V55.068l9.936 13.284c.36.54.648.648 1.152.648h4.392c.36 0 .648-.288.648-.648v-23.22c0-.36-.288-.648-.648-.648h-4.752c-.36 0-.648.288-.648.648v13.284zm38.052.324c-.504.432-1.008.792-1.512 1.08l4.68 8.064c.288.504.36 1.116-.36 1.116h-5.544c-.576 0-.936-.108-1.224-.648l-3.852-7.344h-3.852v7.344c0 .36-.288.648-.648.648h-5.04c-.36 0-.648-.288-.648-.648v-23.22c0-.36.288-.648.648-.648h10.908c2.412 0 4.68.504 6.3 1.764 1.836 1.44 2.844 3.852 2.844 6.444 0 2.16-.756 4.32-2.7 6.048zm-6.876-8.892h-4.788v5.832h4.248c1.116 0 1.98-.144 2.556-.54.684-.432 1.116-1.26 1.116-2.376 0-1.08-.36-1.836-1.008-2.304-.576-.432-1.368-.612-2.124-.612zm13.932-5.364c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648v-23.22c0-.36-.288-.648-.648-.648h-5.04zm22.644-.324c-7.38 0-13.32 5.328-13.32 12.564 0 8.244 5.4 12.636 12.456 12.636 2.016 0 3.78-.36 5.076-.936.036.324.288.576.648.576h4.716c.36 0 .648-.288.648-.648V55.86c0-.36-.288-.648-.648-.648h-9.108c-.36 0-.648.288-.648.648v4.32c0 .36.288.648.648.648h3.744v1.944c-1.044.504-2.7.936-4.392.936-4.032 0-6.552-3.024-6.552-6.984 0-3.924 2.88-6.84 6.552-6.84 1.908 0 3.348.612 4.932 1.224.324.144.612.072.792-.252l2.052-4.284c.144-.288.144-.612-.252-.828-1.692-.828-3.96-1.584-7.344-1.584zm31.032.324c-.36 0-.648.288-.648.648v8.712h-9.36v-8.712c0-.36-.288-.648-.648-.648h-5.04c-.36 0-.648.288-.648.648v23.22c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648V59.46h9.36v8.892c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648v-23.22c0-.36-.288-.648-.648-.648h-5.04zm9 0c-.36 0-.648.288-.648.648v4.32c0 .36.288.648.648.648h6.912v18.252c0 .36.288.648.648.648h5.04c.36 0 .648-.288.648-.648V50.1h6.912c.36 0 .648-.288.648-.648v-4.32c0-.36-.288-.648-.648-.648h-20.16zm31.428 24.876c2.772 0 5.256-.756 7.02-2.16 1.728-1.368 2.808-3.312 2.808-5.76 0-2.7-1.08-4.428-2.664-5.616-1.908-1.476-4.608-2.016-6.624-2.628-1.692-.504-2.916-1.008-2.916-2.124 0-.432.252-.828.792-1.116.396-.18 1.008-.324 1.8-.324 2.412 0 4.392.936 5.976 1.8.324.18.612.072.792-.252l2.052-4.284c.144-.324.072-.648-.252-.828-1.548-.792-4.032-1.908-8.208-1.908-2.952 0-5.292.684-6.876 1.836-1.836 1.296-2.772 3.204-2.772 5.364 0 2.88 1.152 4.464 2.772 5.688 1.836 1.332 4.284 1.872 6.156 2.484 1.728.54 3.024 1.152 3.024 2.412 0 .36-.108.972-.72 1.404-.432.324-1.152.54-2.232.54-2.592 0-4.644-1.116-6.336-2.16-.36-.216-.648-.072-.792.252l-2.052 4.284c-.18.36-.072.648.252.828 1.908 1.116 4.932 2.268 9 2.268z"/>
										</g>
									</g>
								</g>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475 50" class="w-100 h-auto dn db-ns">
								<g id="tagline" fill="#FFF">
									<g id="Group">
										<path id="Independent,-Reality" d="M9.012 3.016c.024-.216-.096-.36-.264-.36H5.94c-.192 0-.36.144-.384.36L3.372 18.664c-.024.216.096.336.288.336h2.784c.168 0 .336-.144.384-.336L9.012 3.016zm12.264 10.248L15.708 3.04c-.12-.288-.264-.384-.6-.384h-2.352c-.216 0-.384.12-.408.36L10.164 18.64c-.048.24.072.36.288.36h2.544c.216 0 .384-.12.408-.36l1.44-10.224 5.568 10.224c.144.312.312.36.6.36h2.352c.192 0 .384-.144.408-.36l2.184-15.624c.024-.192-.096-.36-.288-.36h-2.544c-.216 0-.384.168-.408.36l-1.44 10.248zM32.724 19h-5.328c-.216 0-.312-.144-.288-.336l2.184-15.648c.024-.192.192-.36.384-.36h4.2c2.76 0 5.04.624 6.768 2.424 1.272 1.344 2.016 3.216 2.016 5.664 0 2.736-1.032 4.776-2.736 6.168-1.848 1.464-4.368 2.088-7.2 2.088zm6.504-8.16c0-1.56-.456-2.856-1.296-3.768C36.9 5.92 35.46 5.56 33.876 5.56h-1.488L30.9 16.096h2.52c1.56 0 3-.336 4.104-1.248 1.056-.864 1.704-2.208 1.704-4.008zm18.336-7.824c0-.216-.096-.36-.288-.36h-10.44c-.192 0-.384.168-.408.36l-2.184 15.648c-.024.192.096.336.288.336h11.28c.192 0 .336-.144.36-.336l.336-2.4c.048-.192-.096-.312-.264-.312H48.06l.528-3.624h5.904c.192 0 .336-.168.36-.36l.384-2.376c.024-.192-.096-.336-.264-.336H49.02l.48-3.528h7.344c.168 0 .336-.144.36-.336l.36-2.376zm7.68 11.064h-2.496l-.624 4.584c-.048.192-.216.336-.384.336h-2.784c-.192 0-.336-.144-.288-.336l2.184-15.648c.024-.216.192-.36.384-.36h4.056c1.584 0 3.384.144 4.728.936 1.608.912 2.52 2.472 2.52 4.752 0 1.704-.624 3.24-1.968 4.32-1.224.936-2.952 1.416-5.328 1.416zm-1.296-8.4l-.768 5.376h2.616c.984 0 1.848-.192 2.448-.744.504-.504.864-1.176.864-2.064 0-.936-.312-1.632-.96-2.064-.504-.36-1.296-.504-2.112-.504h-2.088zm23.016-2.664c0-.216-.096-.36-.288-.36h-10.44c-.192 0-.384.168-.408.36l-2.184 15.648c-.024.192.096.336.288.336h11.28c.192 0 .336-.144.36-.336l.336-2.4c.048-.192-.096-.312-.264-.312H77.46l.528-3.624h5.904c.192 0 .336-.168.36-.36l.384-2.376c.024-.192-.096-.336-.264-.336H78.42l.48-3.528h7.344c.168 0 .336-.144.36-.336l.36-2.376zM99.18 13.264L93.612 3.04c-.12-.288-.264-.384-.6-.384H90.66c-.216 0-.384.12-.408.36L88.068 18.64c-.048.24.072.36.288.36H90.9c.216 0 .384-.12.408-.36l1.44-10.224 5.568 10.224c.144.312.312.36.6.36h2.352c.192 0 .384-.144.408-.36l2.184-15.624c.024-.192-.096-.36-.288-.36h-2.544c-.216 0-.384.168-.408.36l-1.44 10.248zM110.628 19H105.3c-.216 0-.312-.144-.288-.336l2.184-15.648c.024-.192.192-.36.384-.36h4.2c2.76 0 5.04.624 6.768 2.424 1.272 1.344 2.016 3.216 2.016 5.664 0 2.736-1.032 4.776-2.736 6.168-1.848 1.464-4.368 2.088-7.2 2.088zm6.504-8.16c0-1.56-.456-2.856-1.296-3.768-1.032-1.152-2.472-1.512-4.056-1.512h-1.488l-1.488 10.536h2.52c1.56 0 3-.336 4.104-1.248 1.056-.864 1.704-2.208 1.704-4.008zm18.336-7.824c0-.216-.096-.36-.288-.36h-10.44c-.192 0-.384.168-.408.36l-2.184 15.648c-.024.192.096.336.288.336h11.28c.192 0 .336-.144.36-.336l.336-2.4c.048-.192-.096-.312-.264-.312h-8.184l.528-3.624h5.904c.192 0 .336-.168.36-.36l.384-2.376c.024-.192-.096-.336-.264-.336h-5.952l.48-3.528h7.344c.168 0 .336-.144.36-.336l.36-2.376zm12.216 10.248L142.116 3.04c-.12-.288-.264-.384-.6-.384h-2.352c-.216 0-.384.12-.408.36l-2.184 15.624c-.048.24.072.36.288.36h2.544c.216 0 .384-.12.408-.36l1.44-10.224 5.568 10.224c.144.312.312.36.6.36h2.352c.192 0 .384-.144.408-.36l2.184-15.624c.024-.192-.096-.36-.288-.36h-2.544c-.216 0-.384.168-.408.36l-1.44 10.248zm6.912-10.608h13.032c.192 0 .336.168.288.36l-.336 2.352c0 .192-.192.36-.384.36h-4.8l-1.8 12.912c-.048.24-.216.36-.432.36h-2.712c-.216 0-.36-.144-.312-.36l1.8-12.912h-4.776c-.192 0-.336-.168-.312-.36l.312-2.352c.048-.192.24-.36.432-.36zm15.576 15.216c0 2.28-1.92 3.96-3.744 4.32-.288.024-.408-.024-.528-.192l-.264-.552c-.12-.216-.048-.384.168-.48.504-.288 1.416-.72 1.416-1.44 0-.984-1.224-.792-1.224-2.328 0-1.056.768-1.776 1.968-1.776 1.272 0 2.208.864 2.208 2.448zm22.944-10.248c0 1.488-.408 2.64-1.08 3.504-.648.816-1.512 1.32-2.472 1.68l2.808 5.736c.096.216.072.456-.216.456h-3c-.168 0-.408-.072-.528-.36l-2.496-5.304h-2.352l-.72 5.328c-.048.216-.216.336-.408.336h-2.76c-.192 0-.336-.12-.288-.336l2.184-15.648c.024-.216.168-.36.384-.36h4.68c2.016 0 3.504.48 4.512 1.272 1.224.888 1.752 2.256 1.752 3.696zm-3.384.264c0-.768-.24-1.32-.672-1.68-.504-.432-1.224-.624-2.112-.624h-2.064l-.696 4.824h2.376c.984 0 1.872-.192 2.448-.744.456-.384.72-.984.72-1.776zm18.048-4.872l-.36 2.376c-.024.192-.192.336-.36.336h-7.344l-.48 3.528h5.952c.168 0 .288.144.264.336l-.384 2.376c-.024.192-.168.36-.36.36h-5.904l-.528 3.624h8.184c.168 0 .312.12.264.312l-.336 2.4c-.024.192-.168.336-.36.336h-11.28c-.192 0-.312-.144-.288-.336l2.184-15.648c.024-.192.216-.36.408-.36h10.44c.192 0 .288.144.288.36zm4.68 12.672l-1.296 2.976c-.072.168-.192.336-.384.336h-3.144c-.192 0-.264-.168-.192-.36l7.224-15.696c.072-.192.192-.36.384-.36h3.624c.192 0 .336.168.36.36l3.312 15.72c.024.192-.12.336-.336.336h-2.928c-.192 0-.264-.144-.288-.336l-.576-2.976h-5.76zm5.304-2.76l-1.32-6.72-2.904 6.72h4.224zm10.128 3.024l1.824-12.936c.024-.216-.096-.36-.264-.36h-2.808c-.192 0-.36.144-.384.36l-2.184 15.648c-.048.192.096.336.288.336h9.432c.192 0 .36-.144.384-.336l.312-2.4c.048-.192-.096-.312-.264-.312h-6.336zM241.98 3.016c.024-.216-.096-.36-.264-.36h-2.808c-.192 0-.36.144-.384.36l-2.184 15.648c-.024.216.096.336.288.336h2.784c.168 0 .336-.144.384-.336l2.184-15.648zm2.232-.36c-.192 0-.384.168-.432.36l-.312 2.352c-.024.192.12.36.312.36h4.776l-1.8 12.912c-.048.216.096.36.312.36h2.712c.216 0 .384-.12.432-.36l1.8-12.912h4.8c.192 0 .384-.168.384-.36l.336-2.352c.048-.192-.096-.36-.288-.36h-13.032zm21.168 6.288l-2.784-5.928c-.12-.24-.24-.36-.576-.36h-2.952c-.384 0-.456.288-.288.6l4.488 8.928-.912 6.456c-.024.216.12.36.312.36h2.736c.192 0 .384-.144.408-.36l.912-6.432 6.864-8.952c.24-.312.216-.6-.168-.6h-3.144c-.336 0-.504.144-.648.36l-4.248 5.928zm16.056 4.824c.216 0 .384-.168.432-.36l.312-2.256c.024-.216-.096-.384-.312-.384h-7.32c-.192 0-.384.168-.408.384l-.312 2.256c-.048.192.096.36.312.36h7.296zm16.128.48c0 1.44-.528 2.568-1.464 3.384-1.032.912-2.568 1.368-4.416 1.368H285.3c-.192 0-.312-.144-.288-.336l2.184-15.648c.024-.192.192-.36.384-.36h4.2c1.584 0 2.856.384 3.72 1.104.768.648 1.224 1.584 1.224 2.808 0 .864-.192 1.584-.552 2.184-.384.672-.96 1.152-1.656 1.536v.048c1.008.312 1.8.792 2.328 1.488.48.648.72 1.464.72 2.424zm-3.936-7.272c0-.456-.168-.84-.48-1.104-.336-.312-.816-.48-1.44-.48h-1.392l-.552 3.816h1.368c.816 0 1.56-.216 2.016-.768.312-.336.48-.84.48-1.464zm.528 7.032c0-.672-.216-1.152-.576-1.44-.6-.528-1.584-.6-2.424-.6h-1.752l-.6 4.224h2.256c1.08 0 1.896-.192 2.4-.6.48-.36.696-.912.696-1.584zm9.48 1.68l-1.296 2.976c-.072.168-.192.336-.384.336h-3.144c-.192 0-.264-.168-.192-.36l7.224-15.696c.072-.192.192-.36.384-.36h3.624c.192 0 .336.168.36.36l3.312 15.72c.024.192-.12.336-.336.336h-2.928c-.192 0-.264-.144-.288-.336l-.576-2.976h-5.76zm5.304-2.76l-1.32-6.72-2.904 6.72h4.224zm18.336-9.144c.12-.192.072-.36-.096-.432-.816-.456-2.448-.936-4.2-.936-1.824 0-3.48.432-4.632 1.32-1.008.816-1.632 1.992-1.632 3.576 0 1.32.48 2.208 1.176 2.928 1.224 1.296 3 1.8 4.368 2.784.744.504 1.056.936 1.056 1.56 0 .6-.312 1.008-.792 1.272-.504.264-1.2.408-1.992.408-1.416 0-2.496-.552-3.36-1.296-.168-.144-.36-.144-.48.048L315.3 17.2c-.144.216-.168.36.048.504 1.32 1.008 2.976 1.512 5.088 1.512 2.016 0 3.6-.48 4.68-1.32 1.224-.912 1.848-2.208 1.848-3.648 0-1.536-.624-2.472-1.44-3.264-1.32-1.2-2.976-1.656-4.32-2.616-.6-.432-.96-.888-.96-1.416 0-.504.192-.864.504-1.104.432-.312 1.08-.432 1.824-.432 1.008 0 2.112.336 2.856.768.168.072.312.12.432-.048l1.416-2.352zm15.192-.768c0-.216-.096-.36-.288-.36h-10.44c-.192 0-.384.168-.408.36l-2.184 15.648c-.024.192.096.336.288.336h11.28c.192 0 .336-.144.36-.336l.336-2.4c.048-.192-.096-.312-.264-.312h-8.184l.528-3.624h5.904c.192 0 .336-.168.36-.36l.384-2.376c.024-.192-.096-.336-.264-.336h-5.952l.48-3.528h7.344c.168 0 .336-.144.36-.336l.36-2.376zM349.188 19h-5.328c-.216 0-.312-.144-.288-.336l2.184-15.648c.024-.192.192-.36.384-.36h4.2c2.76 0 5.04.624 6.768 2.424 1.272 1.344 2.016 3.216 2.016 5.664 0 2.736-1.032 4.776-2.736 6.168-1.848 1.464-4.368 2.088-7.2 2.088zm6.504-8.16c0-1.56-.456-2.856-1.296-3.768-1.032-1.152-2.472-1.512-4.056-1.512h-1.488l-1.488 10.536h2.52c1.56 0 3-.336 4.104-1.248 1.056-.864 1.704-2.208 1.704-4.008zm15.12 4.848l-1.296 2.976c-.072.168-.192.336-.384.336h-3.144c-.192 0-.264-.168-.192-.36l7.224-15.696c.072-.192.192-.36.384-.36h3.624c.192 0 .336.168.36.36l3.312 15.72c.024.192-.12.336-.336.336h-2.928c-.192 0-.264-.144-.288-.336l-.576-2.976h-5.76zm5.304-2.76l-1.32-6.72-2.904 6.72h4.224zm17.424.336l1.44-10.248c.024-.192.192-.36.408-.36h2.544c.192 0 .312.168.288.36l-2.184 15.624c-.024.216-.216.36-.408.36h-2.352c-.288 0-.456-.048-.6-.36l-5.568-10.224-1.44 10.224c-.024.24-.192.36-.408.36h-2.544c-.216 0-.336-.12-.288-.36l2.184-15.624c.024-.24.192-.36.408-.36h2.352c.336 0 .48.096.6.384l5.568 10.224zm9.408 2.424l-1.296 2.976c-.072.168-.192.336-.384.336h-3.144c-.192 0-.264-.168-.192-.36l7.224-15.696c.072-.192.192-.36.384-.36h3.624c.192 0 .336.168.36.36l3.312 15.72c.024.192-.12.336-.336.336h-2.928c-.192 0-.264-.144-.288-.336l-.576-2.976h-5.76zm5.304-2.76l-1.32-6.72-2.904 6.72h4.224zm10.128 3.024h6.336c.168 0 .312.12.264.312l-.312 2.4c-.024.192-.192.336-.384.336h-9.432c-.192 0-.336-.144-.288-.336l2.184-15.648c.024-.216.192-.36.384-.36h2.808c.168 0 .288.144.264.36l-1.824 12.936zm12.672-7.008l4.248-5.928c.144-.216.312-.36.648-.36h3.144c.384 0 .408.288.168.6l-6.864 8.952-.912 6.432c-.024.216-.216.36-.408.36h-2.736c-.192 0-.336-.144-.312-.36l.912-6.456-4.488-8.928c-.168-.312-.096-.6.288-.6h2.952c.336 0 .456.12.576.36l2.784 5.928zm19.464-5.16L449.1 6.136c-.12.168-.264.12-.432.048-.744-.432-1.848-.768-2.856-.768-.744 0-1.392.12-1.824.432-.312.24-.504.6-.504 1.104 0 .528.36.984.96 1.416 1.344.96 3 1.416 4.32 2.616.816.792 1.44 1.728 1.44 3.264 0 1.44-.624 2.736-1.848 3.648-1.08.84-2.664 1.32-4.68 1.32-2.112 0-3.768-.504-5.088-1.512-.216-.144-.192-.288-.048-.504l1.392-2.184c.12-.192.312-.192.48-.048.864.744 1.944 1.296 3.36 1.296.792 0 1.488-.144 1.992-.408.48-.264.792-.672.792-1.272 0-.624-.312-1.056-1.056-1.56-1.368-.984-3.144-1.488-4.368-2.784-.696-.72-1.176-1.608-1.176-2.928 0-1.584.624-2.76 1.632-3.576 1.152-.888 2.808-1.32 4.632-1.32 1.752 0 3.384.48 4.2.936.168.072.216.24.096.432zm7.512-.768c.024-.216-.096-.36-.264-.36h-2.808c-.192 0-.36.144-.384.36l-2.184 15.648c-.024.216.096.336.288.336h2.784c.168 0 .336-.144.384-.336l2.184-15.648zm12.84.768c.12-.192.072-.36-.096-.432-.816-.456-2.448-.936-4.2-.936-1.824 0-3.48.432-4.632 1.32-1.008.816-1.632 1.992-1.632 3.576 0 1.32.48 2.208 1.176 2.928 1.224 1.296 3 1.8 4.368 2.784.744.504 1.056.936 1.056 1.56 0 .6-.312 1.008-.792 1.272-.504.264-1.2.408-1.992.408-1.416 0-2.496-.552-3.36-1.296-.168-.144-.36-.144-.48.048l-1.392 2.184c-.144.216-.168.36.048.504 1.32 1.008 2.976 1.512 5.088 1.512 2.016 0 3.6-.48 4.68-1.32 1.224-.912 1.848-2.208 1.848-3.648 0-1.536-.624-2.472-1.44-3.264-1.32-1.2-2.976-1.656-4.32-2.616-.6-.432-.96-.888-.96-1.416 0-.504.192-.864.504-1.104.432-.312 1.08-.432 1.824-.432 1.008 0 2.112.336 2.856.768.168.072.312.12.432-.048l1.416-2.352z"/>
										<path id="Curated-by-David-Smi" d="M185.688 48.24c1.704 0 3.192-.264 4.488-.936.144-.072.192-.192.144-.336l-.456-1.2c-.048-.144-.144-.144-.336-.072-.936.528-2.088.792-3.696.792-3.24 0-6-1.944-6.024-6.144-.024-4.056 3.312-7.176 7.248-7.176 1.32 0 2.592.264 3.576.768.144.048.264.072.36-.096l.672-1.176c.072-.144.048-.264-.12-.36-1.056-.552-2.496-.864-4.344-.864-5.136 0-9.408 3.84-9.384 9 .024 5.52 3.792 7.8 7.872 7.8zm18.768-6.912c-.216 1.512-.744 2.76-1.584 3.648-.888.984-2.136 1.536-3.768 1.536-1.344 0-2.4-.384-3.096-1.2-.6-.648-.912-1.632-.912-2.88 0-.504.048-.96.12-1.464l1.296-9.072c.024-.144-.072-.24-.192-.24h-1.488c-.12 0-.216.096-.24.24l-1.32 9.288c-.096.576-.144 1.128-.144 1.608 0 1.608.48 2.928 1.368 3.84.984 1.056 2.496 1.608 4.416 1.608 2.304 0 4.104-.768 5.376-2.112 1.104-1.152 1.8-2.736 2.064-4.56l1.368-9.672c.024-.144-.072-.24-.192-.24h-1.512c-.12 0-.192.096-.24.24l-1.32 9.432zm17.304-5.04c0 1.536-.504 2.688-1.248 3.48-.816.864-1.968 1.32-3.12 1.56l3.648 6.36c.096.168.072.312-.12.312h-1.608c-.144 0-.264-.072-.36-.24l-3.48-6.144h-3.6l-.84 6.168c-.048.144-.144.216-.264.216h-1.488c-.12 0-.216-.072-.168-.216l2.208-15.888c.048-.144.12-.24.24-.24h4.176c2.112 0 3.552.504 4.512 1.272 1.056.864 1.512 2.064 1.512 3.36zm-1.896.144c0-.912-.24-1.68-.888-2.232-.672-.576-1.704-.912-3.216-.912h-2.712l-.936 6.72h2.952c1.512 0 2.904-.312 3.792-1.104.648-.552 1.008-1.344 1.008-2.472zm5.808 7.536l-1.848 3.816c-.048.12-.12.216-.264.216h-1.656c-.144 0-.192-.12-.12-.24l7.8-15.912c.072-.144.144-.264.312-.264h1.896c.144 0 .216.12.24.264l3.792 15.912c.024.144-.048.24-.192.24h-1.56c-.144 0-.168-.096-.192-.216l-.912-3.816h-7.296zm7.032-1.56l-2.112-8.76-4.272 8.76h6.384zm3.672-10.752h12.648c.12 0 .216.12.192.24l-.168 1.224c-.024.144-.144.24-.264.24h-5.352l-2.04 14.424c-.024.144-.12.216-.24.216h-1.488c-.12 0-.216-.072-.192-.216l2.04-14.424h-5.4c-.12 0-.192-.096-.192-.24l.192-1.224c.024-.144.144-.24.264-.24zm25.248.216l-.192 1.272c-.024.144-.12.216-.216.216h-8.424L252 38.976h7.128c.12 0 .192.096.192.192l-.192 1.272c-.024.144-.144.216-.264.216h-7.104l-.792 5.64h9.312c.12 0 .216.096.192.216l-.168 1.272c-.024.144-.144.216-.264.216h-11.016c-.12 0-.192-.096-.168-.216l2.232-15.888c0-.12.12-.24.24-.24h10.128c.096 0 .192.096.168.216zm6 16.128h-4.776c-.12 0-.192-.096-.168-.216l2.232-15.912c.024-.12.096-.216.24-.216h3.912c2.592 0 4.896.6 6.624 2.376 1.32 1.368 2.112 3.312 2.112 5.712 0 2.688-1.104 4.824-2.952 6.288-1.92 1.512-4.416 1.968-7.224 1.968zm8.28-8.208c0-1.848-.648-3.48-1.704-4.632-1.32-1.44-3.24-1.872-5.16-1.872h-2.424l-1.824 13.104h3.192c2.184 0 4.056-.336 5.544-1.512 1.488-1.152 2.376-2.904 2.376-5.088zm22.464 3.6c0 1.416-.48 2.52-1.464 3.312-.984.84-2.52 1.296-4.464 1.296h-6.312c-.12 0-.192-.096-.168-.216l2.232-15.912c0-.096.096-.216.24-.216h4.128c1.68 0 2.952.432 3.792 1.128.792.672 1.2 1.584 1.2 2.64 0 1.008-.24 1.8-.624 2.424-.528.792-1.272 1.296-2.064 1.584v.048c1.056.216 1.992.648 2.64 1.368.552.624.864 1.464.864 2.544zm-2.544-7.752c0-.624-.264-1.224-.768-1.68-.552-.456-1.392-.768-2.544-.768h-2.592l-.792 5.688h2.904c1.176 0 2.448-.24 3.168-1.176.384-.504.624-1.152.624-2.064zm.672 7.608c0-.912-.312-1.536-.792-1.968-.912-.768-2.4-.864-3.624-.864h-3.168l-.864 6.024h4.08c1.488 0 2.592-.288 3.336-.84.696-.552 1.032-1.32 1.032-2.352zm8.592-4.224l-3.744-7.128c-.072-.168-.144-.24-.336-.24h-1.584c-.264 0-.288.192-.192.36l4.704 8.808-.96 6.96c-.048.12.048.216.168.216h1.488c.12 0 .216-.096.264-.216l.96-6.96 6.984-8.808c.168-.168.144-.36-.096-.36h-1.68c-.192 0-.288.096-.408.24l-5.568 7.128zM322.848 48h-4.776c-.12 0-.192-.096-.168-.216l2.232-15.912c.024-.12.096-.216.24-.216h3.912c2.592 0 4.896.6 6.624 2.376 1.32 1.368 2.112 3.312 2.112 5.712 0 2.688-1.104 4.824-2.952 6.288-1.92 1.512-4.416 1.968-7.224 1.968zm8.28-8.208c0-1.848-.648-3.48-1.704-4.632-1.32-1.44-3.24-1.872-5.16-1.872h-2.424l-1.824 13.104h3.192c2.184 0 4.056-.336 5.544-1.512 1.488-1.152 2.376-2.904 2.376-5.088zm5.976 4.176l-1.848 3.816c-.048.12-.12.216-.264.216h-1.656c-.144 0-.192-.12-.12-.24l7.8-15.912c.072-.144.144-.264.312-.264h1.896c.144 0 .216.12.24.264l3.792 15.912c.024.144-.048.24-.192.24h-1.56c-.144 0-.168-.096-.192-.216l-.912-3.816h-7.296zm7.032-1.56l-2.112-8.76-4.272 8.76h6.384zm18.384-10.416l-8.184 15.816c-.096.216-.192.264-.36.264h-1.44c-.192 0-.288-.048-.312-.264l-3.888-15.816c-.048-.192.024-.336.24-.336h1.416c.192 0 .288.096.336.264l3.216 13.752h.048l6.984-13.752c.072-.168.168-.264.36-.264h1.44c.192 0 .24.144.144.336zm4.128-.12l-2.232 15.912c-.048.144-.12.216-.24.216h-1.512c-.12 0-.192-.072-.168-.216l2.232-15.912c0-.12.096-.216.216-.216h1.512c.12 0 .192.096.192.216zM372.96 48h-4.776c-.12 0-.192-.096-.168-.216l2.232-15.912c.024-.12.096-.216.24-.216h3.912c2.592 0 4.896.6 6.624 2.376 1.32 1.368 2.112 3.312 2.112 5.712 0 2.688-1.104 4.824-2.952 6.288-1.92 1.512-4.416 1.968-7.224 1.968zm8.28-8.208c0-1.848-.648-3.48-1.704-4.632-1.32-1.44-3.24-1.872-5.16-1.872h-2.424l-1.824 13.104h3.192c2.184 0 4.056-.336 5.544-1.512 1.488-1.152 2.376-2.904 2.376-5.088zm21.216-7.152c.096-.144.072-.24-.048-.312-.96-.528-2.472-.888-3.936-.888-1.92 0-3.504.408-4.56 1.224-.936.744-1.464 1.776-1.464 3.216 0 1.296.6 2.208 1.392 2.904 1.44 1.32 3.408 1.752 4.896 2.904.744.576 1.2 1.176 1.2 2.04 0 .96-.408 1.68-1.128 2.136-.72.48-1.752.72-3.024.72-1.872 0-2.952-.6-3.816-1.272-.12-.12-.24-.096-.336.024l-.72 1.176c-.096.144-.096.24.048.336 1.176.864 2.664 1.392 4.776 1.392 1.944 0 3.456-.456 4.512-1.224 1.08-.84 1.656-2.04 1.656-3.432s-.624-2.328-1.44-3.048c-1.512-1.272-3.408-1.704-4.872-2.808-.72-.552-1.2-1.2-1.2-2.04 0-.792.288-1.416.816-1.824.672-.528 1.68-.768 3.024-.768 1.056 0 2.304.312 3.168.792.144.096.24.072.312-.024l.744-1.224zm10.872 11.928l-2.88-12.696c-.048-.096-.072-.216-.192-.216h-1.32c-.12 0-.216.096-.264.216l-5.136 15.888c-.048.144.024.24.168.24h1.392c.12 0 .216-.072.264-.192l3.984-12.744 2.664 11.616c.024.144.096.192.192.192h1.464c.144 0 .216-.024.288-.192l6.312-11.592v12.696c0 .144.072.216.192.216h1.392c.12 0 .24-.072.24-.216V31.872c0-.12-.072-.216-.192-.216h-1.392c-.144 0-.216.12-.288.216l-6.888 12.696zm15.768-12.696c0-.12-.072-.216-.192-.216h-1.512c-.12 0-.216.096-.216.216l-2.232 15.912c-.024.144.048.216.168.216h1.512c.12 0 .192-.072.24-.216l2.232-15.912zm3.504 14.424l2.04-14.424c0-.12-.072-.216-.192-.216h-1.512c-.12 0-.216.096-.216.216l-2.232 15.912c-.048.12.048.216.168.216h9.24c.12 0 .216-.072.24-.216l.192-1.272c0-.12-.096-.216-.192-.216H432.6zM447.12 48h-4.776c-.12 0-.192-.096-.168-.216l2.232-15.912c.024-.12.096-.216.24-.216h3.912c2.592 0 4.896.6 6.624 2.376 1.32 1.368 2.112 3.312 2.112 5.712 0 2.688-1.104 4.824-2.952 6.288-1.92 1.512-4.416 1.968-7.224 1.968zm8.28-8.208c0-1.848-.648-3.48-1.704-4.632-1.32-1.44-3.24-1.872-5.16-1.872h-2.424l-1.824 13.104h3.192c2.184 0 4.056-.336 5.544-1.512 1.488-1.152 2.376-2.904 2.376-5.088zm16.368-7.92c.024-.12-.072-.216-.168-.216h-10.128c-.12 0-.24.12-.24.24L459 47.784c-.024.12.048.216.168.216h11.016c.12 0 .24-.072.264-.216l.168-1.272c.024-.12-.072-.216-.192-.216h-9.312l.792-5.64h7.104c.12 0 .24-.072.264-.216l.192-1.272c0-.096-.072-.192-.192-.192h-7.128l.792-5.616h8.424c.096 0 .192-.072.216-.216l.192-1.272z"/>
									</g>
								</g>
							</svg>
						</div>

					</div>

					<!-- .site-branding -->

					<nav id="site-navigation" class="pt3" role="navigation">

						<div class="ma0 nowrap overflow-x-auto overflow-y-hidden ws-normal-ns flex justify-start justify-between-ns items-center-ns">
							<button class="menu-toggle dn" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'venezuela-blog' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'link f4 fw3 white flex items-center pl2 pv0 ma0 list', 'container_class' => 'flex items-center list',  ) ); ?>
							<ul class="link white flex items-center list ma0">
								<li class="flex items-center">
									<a href="#search" class="link dim white dib h1-5 w1-5 mr3 self-center">
										<svg class="link dim white dib h1-5 w1-5 mr3 self-center" viewBox="0 0 25 25" data-icon="search" style="fill: currentColor;">
											<path d="M23.994 22.348l-6.66-6.66c3.22-3.975 2.765-9.775-1.036-13.198-3.8-3.423-9.616-3.27-13.233.345C-.55 6.452-.703 12.268 2.72 16.068c3.423 3.8 9.223 4.256 13.197 1.035l6.66 6.662c.254.253.623.35.968.26.346-.094.616-.364.71-.71.09-.345-.008-.714-.26-.967zM2.254 9.636c0-4.198 3.414-7.61 7.612-7.61s7.612 3.412 7.612 7.61c0 4.2-3.414 7.612-7.612 7.612s-7.61-3.413-7.61-7.612z" id="Shape"/>
										</svg>
									</a>
								</li>
								<li class="flex items-center">
									<a class="link hover-twitter white dib h1-5 w1-5 mr3 self-center" href="https://twitter.com/WOLA_org" title="Follow WOLA on Twitter" rel="noopener noreferrer" target="_blank">
										<svg data-icon="twitter" viewBox="0 0 32 32" style="fill:currentColor">
											<title>twitter icon</title>
											<path d="M2 4 C6 8 10 12 15 11 A6 6 0 0 1 22 4 A6 6 0 0 1 26 6 A8 8 0 0 0 31 4 A8 8 0 0 1 28 8 A8 8 0 0 0 32 7 A8 8 0 0 1 28 11 A18 18 0 0 1 10 30 A18 18 0 0 1 0 27 A12 12 0 0 0 8 24 A8 8 0 0 1 3 20 A8 8 0 0 0 6 19.5 A8 8 0 0 1 0 12 A8 8 0 0 0 3 13 A8 8 0 0 1 2 4"></path>
										</svg>
									</a>
								</li>
								<li class="flex items-center">
									<a class="link hover-facebook white dib h1-5 w1-5 mr3 self-center" href="https://www.facebook.com/WOLA.org/" title="Follow WOLA on Facebook" rel="noopener noreferrer" target="_blank">
										<svg data-icon="facebook" viewBox="0 0 32 32" style="fill:currentColor">
											<title>facebook icon</title>
											<path d="M8 12 L13 12 L13 8 C13 2 17 1 24 2 L24 7 C20 7 19 7 19 10 L19 12 L24 12 L23 18 L19 18 L19 30 L13 30 L13 18 L8 18 z"></path>
										</svg>
									</a>
								</li>
								<li class="flex items-center"><a href="https://wola.org" class="link white hover-wola-blue f4 fw3" rel="noopener noreferrer" target="_blank">WOLA.org</a></li>
							</ul>
						</div>
					</nav>

					<!-- #site-navigation -->
					
				</div>

			</div>	

			<?php get_search_form(); ?>

			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup" data-collapsed="true" class="w-100 bg-light-gray menu-signup-form overflow-hidden" style="height: 0px;">

				<form action="//tumblr.us5.list-manage.com/subscribe/post?u=28bd3dd463a2079bdde8ce5f2&amp;id=b3ab7b9181" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="" target="_blank" novalidate>

					<div class="mw6 center pv4 flex flex-center items-center">

						<input type="email" value="" name="EMAIL" class="w-75 system mid-gray pv3 ph2 fw2 f4 mr2" id="mce-EMAIL" placeholder="Your email" required></input>

						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="w-25 pa3 tc white bg-wola-gray system br2 bn pointer hover-bg-wola-blue bg-animate fw3 f4"></input>

					</div>
				</form>
			</div>

			<!--End mc_embed_signup-->

			<!-- header image -->

			<?php if ( get_header_image() && is_front_page() ) : ?>
				<div class="header-imagew-100 vh-25 cover pa0 ma0" style="background-image: url('<?php header_image(); ?>');">
					<!-- <img src="<?php header_image(); ?>" class="w-100 h-25"></img> -->
				</div>
			<?php endif; ?>

			<!-- end header image -->			
			
		</header><!-- #masthead -->

		<aside id="aboutModal" class="overlay center pa3 pa4-ns">
			<a href="#" class="closebtn grow-large">&times;</a>
			
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

		<div id="content" class="site-content bg-fafafa">
