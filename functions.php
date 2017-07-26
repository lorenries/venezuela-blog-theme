<?php
/**
 * venezuela-blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package venezuela-blog
 */

if ( ! function_exists( 'venezuela_blog_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function venezuela_blog_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on venezuela-blog, use a find and replace
	 * to change 'venezuela-blog' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'venezuela-blog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'venezuela-blog' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'venezuela_blog_custom_background_args', array(
		'default-color' => 'fafafa',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


	// Add theme support for different post formats
	add_theme_support( 'post-formats', array( 'gallery', 'link', 'video', 'audio' ) );

	// Add post support for excerpts
	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'excerpt' );

}
endif;
add_action( 'after_setup_theme', 'venezuela_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function venezuela_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'venezuela_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'venezuela_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function venezuela_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'venezuela-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'venezuela-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'venezuela_blog_widgets_init' );

/**
 * Add style classes to next_posts_links
 *
 * @link https://css-tricks.com/snippets/wordpress/add-class-to-links-generated-by-next_posts_link-and-previous_posts_link/
 */

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="wola-blue underline-hover link"';
}

/**
 * Enqueue scripts and styles.
 */
function venezuela_blog_scripts() {
	wp_enqueue_style( 'venezuela-blog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'venezuela-blog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fitter-happier-text', get_template_directory_uri() . '/js/fitter-happier-text.js', array(), true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), true );

	wp_enqueue_script( 'venezuela-blog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'venezuela_blog_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Estimate reading time
 */
function get_reading_time() {
	$mycontent = get_the_content();
	$word = str_word_count(strip_tags($mycontent));
	$m = floor($word / 200);
	if ($m < 1) {
		return '1 min read';
	} else {
		return $m.' min read';
	}
}

/**
 * Add Tumblr redirect support
 */
function migration_redirect(){

    global $post;
    global $wp_query;

    if(is_404()){

        // Get URI
        $uri = $_SERVER['REQUEST_URI'];

        // $uri = substr($uri, 1,strlen($uri));

        // if(substr($uri, -1) == '/'){
        //     $uri = substr($uri,0, strlen($uri)-1);
        // }

        // Get Post where custom_field = tumblr_venezuelablog_permalink
        $args = array();
        $args['posts_per_page'] = 1;
        $args['post_status']    = 'publish';
        $args['meta_key']       = 'tumblr_venezuelablog_permalink';
        $args['meta_value']     = 'http://venezuelablog.tumblr.com' . $uri;

        $post = get_posts($args);

        if(!empty($post[0])){

            wp_redirect(get_permalink($post[0]->ID), 301);

        }
    }
}

add_action('template_redirect','migration_redirect');

/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class VZ_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 6;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true, 'post__not_in' => array( $before_widget ) ) ) );

		if( $r->have_posts() ) :
			
			echo $before_widget;
			?><div class="">
				<h3><?php if( $title ) echo $before_title . $title . $after_title; ?></h3>
				<ul class="list flex flex-column flex-row-ns flex-wrap items-stretch justify-start ma0 pa0">
					<?php while( $r->have_posts() ) : $r->the_post(); ?>				
					<div class="w-100 w-50-ns w-third-l pa2">
						<li class="pa3 bg-light-gray">
							<a class="link wola-gray hover-wola-blue b" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?>
							</a>
							<div class="flex justify-start pt2">
								<p class="f6 mid-gray system ma0"><time><?php echo get_the_date('F j, Y')?></time></p>
							</div>
						</li>

					</div>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}

function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('VZ_Recent_Posts_Widget');
}

add_action('widgets_init', 'my_recent_widget_registration');
