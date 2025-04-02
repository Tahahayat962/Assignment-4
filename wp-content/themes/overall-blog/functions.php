<?php
/**
 * Shadow Themes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shadow Themes
 */

if ( ! function_exists( 'overall_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function overall_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shadow Themes, use a find and replace
		 * to change 'overall-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'overall-blog' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'register_block_style' );

		add_theme_support( 'register_block_pattern' );

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'editor-styles' );

		add_theme_support( 'wp-block-styles' );

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
		set_post_thumbnail_size( 500, 500, true );
		add_image_size( 'overall-archive-two', 590, 750, true);
		add_image_size( 'overall-blog-trending-thumbnail', 200, 200, true);
		

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'overall-blog' ),
			'social' => esc_html__( 'Header Social', 'overall-blog' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'overall-blog' ),
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
		add_theme_support( 'custom-background', apply_filters( 'overall_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-header', array(
		        'default-image'      => '',
		        'default-text-color' => '000',
		        'width'              => 1920,
		        'height'             => 1080,
		        'flex-width'         => true,
		        'flex-height'        => true,
		    ) );
		 // Register default headers.
		register_default_headers( array(
			'default-banner' => array(
				'url'           => '%s/assets/img/header-image.jpg',
				'thumbnail_url' => '%s/assets/img/header-image.jpg',
				'description'   => esc_html_x( 'Default Banner', 'Header image description', 'overall-blog' ),
			),

		) );

		// Add theme support for selective refresh for widgets.
		// add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 350,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	    
    	/*
    	 * This theme styles the visual editor to resemble the theme style,
    	 * specifically font, colors, and column width.
     	 */
    	add_editor_style( array( 'assets/css/editor-style.css', overall_blog_fonts_url() ) );

    	// Gutenberg support
		add_theme_support( 'editor-color-palette', array(
	       	array(
				'name' => esc_html__( 'Blue', 'overall-blog' ),
				'slug' => 'blue',
				'color' => '#2c7dfa',
	       	),
	       	array(
	           	'name' => esc_html__( 'Green', 'overall-blog' ),
	           	'slug' => 'green',
	           	'color' => '#07d79c',
	       	),
	       	array(
	           	'name' => esc_html__( 'Orange', 'overall-blog' ),
	           	'slug' => 'orange',
	           	'color' => '#ff8737',
	       	),
	       	array(
	           	'name' => esc_html__( 'Black', 'overall-blog' ),
	           	'slug' => 'black',
	           	'color' => '#2f3633',
	       	),
	       	array(
	           	'name' => esc_html__( 'Grey', 'overall-blog' ),
	           	'slug' => 'grey',
	           	'color' => '#82868b',
	       	),
	   	));

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'overall-blog' ),
		       	'shortName' => esc_html__( 'S', 'overall-blog' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'overall-blog' ),
		       	'shortName' => esc_html__( 'M', 'overall-blog' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'larger', 'overall-blog' ),
		       	'shortName' => esc_html__( 'L', 'overall-blog' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'huge', 'overall-blog' ),
		       	'shortName' => esc_html__( 'XL', 'overall-blog' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'overall_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function overall_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'overall_blog_content_width', 900 );
}
add_action( 'after_setup_theme', 'overall_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function overall_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'overall-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'overall-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s ">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for ( $i=1; $i <= 4; $i++ ) { 
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget Area ', 'overall-blog' )  . $i,
			'id'            => 'footer-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'overall-blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s ">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'overall_blog_widgets_init' );

/**
 * Register custom fonts.
 */
function overall_blog_fonts_url() {
	$fonts_url = '';

	$font_families = array();

	$body_font_family = get_theme_mod( 'overall_blog_body_font_option' );
	if ( $body_font_family ) {
    	$body_font_family_arr = explode( '-', $body_font_family );
		$body_font_family_value = implode( ' ', array_map( 'ucfirst', $body_font_family_arr ) );

		$font_families[] = $body_font_family_value;
	}

	$h1_h6_font_family = get_theme_mod( 'overall_blog_h1_h6_font_option' );
	if ( $h1_h6_font_family ) {
    	$h1_h6_font_family_arr = explode( '-', $h1_h6_font_family );
		$h1_h6_font_family_value = implode( ' ', array_map( 'ucfirst', $h1_h6_font_family_arr ) );

		$font_families[] = $h1_h6_font_family_value;
	}

	$section_title_font_family = get_theme_mod( 'overall_blog_section_title_font_option' );
	if ( $section_title_font_family ) {
    	$section_title_font_family_arr = explode( '-', $section_title_font_family );
		$section_title_font_family_value = implode( ' ', array_map( 'ucfirst', $section_title_font_family_arr ) );

		$font_families[] = $section_title_font_family_value;
	}
	
	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Bad Script, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$bad_script = _x( 'on', 'Bad Script font: on or off', 'overall-blog' );

	if ( 'off' !== $bad_script ) {
		$font_families[] = 'Bad Script:400,600';
	}

	$lora = _x( 'on', 'Playfair Display font: on or off', 'overall-blog' );

	if ( 'off' !== $lora ) {
		$font_families[] = 'Playfair Display:400,700';
	}

	$fatface = _x( 'on', 'Abril Fatface font: on or off', 'overall-blog' );

	if ( 'off' !== $fatface ) {
		$font_families[] = 'Abril Fatface:400,700';
	}

	$sail = _x( 'on', 'Sail font: on or off', 'overall-blog' );

	if ( 'off' !== $sail ) {
		$font_families[] = 'Sail';
	}

	$lugrasimo = _x( 'on', 'Lugrasimo font: on or off', 'overall-blog' );

	if ( 'off' !== $lugrasimo ) {
		$font_families[] = 'Lugrasimo';
	}

	$manrope = _x( 'on', 'Manrope font: on or off', 'overall-blog' );

	if ( 'off' !== $manrope ) {
		$font_families[] = 'Manrope';
	}

	$caveat = _x( 'on', 'Caveat font: on or off', 'overall-blog' );

	if ( 'off' !== $caveat ) {
		$font_families[] = 'Caveat';
	}

	$rajdhani = _x( 'on', 'Rajdhani font: on or off', 'overall-blog' );

	if ( 'off' !== $rajdhani ) {
		$font_families[] = 'Rajdhani';
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function overall_blog_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'overall-blog-fonts', overall_blog_fonts_url(), array(), null );

	wp_enqueue_style( 'slick', get_theme_file_uri() . '/assets/css/slick.css', '', '1.8.0' );

	wp_enqueue_style( 'slick-theme', get_theme_file_uri() . '/assets/css/slick-theme.css', '', '1.8.0' );

	// blocks
	wp_enqueue_style( 'overall-blog-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );

	wp_enqueue_style( 'overall-blog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'slick-jquery', get_theme_file_uri( '/assets/js/slick.js' ), array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'imagesloaded' );

	wp_enqueue_script( 'jquery-packer', get_theme_file_uri( '/assets/js/packery.pkgd.min.js' ), array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'jquery-matchHeight', get_theme_file_uri( '/assets/js/jquery-matchHeight.js' ), array( 'jquery' ), '20151215', true );
	
	wp_enqueue_script( 'jquery-theia-sticky-sidebar', get_theme_file_uri() . '/assets/js/theia-sticky-sidebar.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'overall-blog-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array(), '20151215', true );

	wp_enqueue_script( 'overall-blog-skip-link-focus-fix', get_theme_file_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_enqueue_script( 'overall-blog-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'overall_blog_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Overall Blog 1.0.0
 */
function overall_blog_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'overall-blog-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'overall-blog-fonts', overall_blog_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'overall_blog_block_editor_styles' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/customizer.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/defaults.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/sanitize.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/active-callback.php' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_parent_theme_file_path() . '/inc/jetpack.php';
}
/**
 * Webfont Loader.
 */
require get_template_directory() . '/inc/wptt-webfont-loader.php';
/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

/**
 * Breadcrumb trail class.
 */
require get_parent_theme_file_path( '/inc/class-breadcrumb-trail.php' );

/**
 * Metabox
 */
require get_parent_theme_file_path( '/inc/metabox.php' );

/**
 * TGMPA call
 */
require get_parent_theme_file_path( '/inc/tgmpa/call.php' );

/**
 * Widget call
 */
require get_parent_theme_file_path( '/inc/widgets/widgets.php' );

/**
 * Enqueue admin css.
 * @return [type] [description]
 */
function overall_blog_load_custom_wp_admin_style( $hook ) {
	if ( 'appearance_page_overall-blog-welcome' != $hook ) {
        return;
    }
    wp_register_style( 'overall-blog-admin', get_theme_file_uri( 'assets/css/overall-blog-admin.css' ), false, '1.0.0' );
    wp_enqueue_style( 'overall-blog-admin' );
}
add_action( 'admin_enqueue_scripts', 'overall_blog_load_custom_wp_admin_style' );

/**
 * Styles the header image and text displayed on the blog.
 *
 * @see overall_blog_custom_header_setup().
 */
function overall_blog_header_text_style() {
	// If we get this far, we have custom styles. Let's do this.
	$header_text_display = get_theme_mod( 'overall_blog_header_text_display', true );
	?>
	<style type="text/css">
	<?php if ( ! $header_text_display ) : ?>
		#site-identity {
			display: none;
		}
	<?php endif; ?>

	.site-title a{
		color: <?php echo esc_attr( get_theme_mod( 'overall_blog_header_title_color', '#000' ) ); ?>;
	}
	.site-description {
		color: <?php echo esc_attr( get_theme_mod( 'overall_blog_header_tagline', '#2e2e2e' ) ); ?>;
	}
	</style>
	<?php
}
add_action( 'wp_head', 'overall_blog_header_text_style' );

/**
 *
 * Reset all setting to default.
 *
 */
function overall_blog_reset_settings() {
    $reset_settings = get_theme_mod( 'overall_blog_reset_settings', false );
    if ( $reset_settings ) {
        remove_theme_mods();
    }
}
add_action( 'customize_save_after', 'overall_blog_reset_settings' );


if ( ! function_exists( 'overall_blog_exclude_sticky_posts' ) ) {
    function overall_blog_exclude_sticky_posts( $query ) {
        if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
            $sticky_posts = get_option( 'sticky_posts' );  
            if ( ! empty( $sticky_posts ) ) {
            	$query->set('post__not_in', $sticky_posts );
            }
            $query->set('ignore_sticky_posts', true );
        }
    }
}
add_action( 'pre_get_posts', 'overall_blog_exclude_sticky_posts' );

function overalls_pro_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'overalls_pro_nav_description', 10, 4 );
