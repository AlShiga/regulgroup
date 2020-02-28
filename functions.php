<?php
/**
 * RegulGroup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RegulGroup
 */

if ( ! function_exists( 'regulgroup_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function regulgroup_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on RegulGroup, use a find and replace
		 * to change 'regulgroup' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'regulgroup', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'regulgroup' ),
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
		add_theme_support( 'custom-background', apply_filters( 'regulgroup_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'regulgroup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function regulgroup_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'regulgroup_content_width', 640 );
}
add_action( 'after_setup_theme', 'regulgroup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function regulgroup_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'regulgroup' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'regulgroup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'regulgroup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function regulgroup_scripts() {
	wp_enqueue_style( 'regulgroup-style', get_stylesheet_uri() );

	wp_enqueue_script( 'regulgroup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'regulgroup-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'regulgroup_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer','scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu');
add_action('wp_print_styles', 'load_fonts');

// подключаем стили
function style_theme() {
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style( 'fontAS', get_template_directory_uri() . '/fontawesome/css/all.css');
}
//подулючаем скрипты
function scripts_theme() {
     wp_enqueue_script( 'JQ', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
     wp_enqueue_script( 'sliderJS', get_template_directory_uri() . '/js/slick.min.js');
	 wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js');
     wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/js/main.js');
}
//подулючаем шрифт
function load_fonts()
{            
wp_register_style('et-googleFonts',
'https://fonts.googleapis.com/css?family=Oswald:200,400,600&display=swap&subset=cyrillic');             
wp_enqueue_style( 'et-googleFonts');        
}

// регистрируем меню
function theme_register_nav_menu(){
	register_nav_menu( 'main_menu', 'Главное меню' );
}

    


/* Блок для ввода контактных данных */
function mytheme_customize_register( $wp_customize ) {
	$wp_customize->add_section(
	'data_site_section',
	array(
	'title' => 'Контактные данные',
	'capability' => 'edit_theme_options',
	'description' => "Тут можно указать контактные данные"    )
	);
	/*Добавляем поле телефона site_telephone*/
	$wp_customize->add_setting(
	'site_telephone',
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	'site_telephone_control',
	array(
	'type' => 'text',
	'label' => "Телефон",
	'section' => 'data_site_section',
	'settings' => 'site_telephone'
	)
	);
	
	/*Добавляем поле телефона site_telephone back*/
	$wp_customize->add_setting(
	// ID
	'site_telephone_back',
	// Массив аргументов
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	// ID
	'site_telephone_control_back',
	// Массив аргументов
	array(
	'type' => 'text',
	'label' => "Телефон в правиьном формате без знаков +7999...",
	'section' => 'data_site_section',
	'settings' => 'site_telephone_back'
	)
	);

	/*Добавляем поле телефона site_telephone_mob*/
	$wp_customize->add_setting(
	'site_telephone_mob',
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	'site_telephone_mob_control',
	array(
	'type' => 'text',
	'label' => "Телефон мобильный",
	'section' => 'data_site_section',
	'settings' => 'site_telephone_mob'
	)
	);
	
	/*Добавляем поле телефона site_telephone_back_mob*/
	$wp_customize->add_setting(
	// ID
	'site_telephone_back_mob',
	// Массив аргументов
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	// ID
	'site_telephone_control_back_mob',
	// Массив аргументов
	array(
	'type' => 'text',
	'label' => "Телефон мобильный в правиьном формате без знаков +7999...",
	'section' => 'data_site_section',
	'settings' => 'site_telephone_back_mob'
	)
	);
	
	
	/*Добавляем поле emain site_email*/
	$wp_customize->add_setting(
	'site_email',
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	'site_email_control',
	array(
	'type' => 'text',
	'label' => "Email",
	'section' => 'data_site_section',
	'settings' => 'site_email'
	)
	);
	
	/*Добавляем поле FB*/
	$wp_customize->add_setting(
	'site_FB',
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	'site_FB_control',
	array(
	'type' => 'text',
	'label' => "Facebook",
	'section' => 'data_site_section',
	'settings' => 'site_FB'
	)
	);

	/*Добавляем поле VK*/
	$wp_customize->add_setting(
	'site_VK',
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	'site_VK_control',
	array(
	'type' => 'text',
	'label' => "VK",
	'section' => 'data_site_section',
	'settings' => 'site_VK'
	)
	);
	
	/*Добавляем поле Inst*/
	$wp_customize->add_setting(
	'site_Inst',
	array(
	'default' => '',
	'type' => 'option'
	)
	);
	$wp_customize->add_control(
	'site_Inst_control',
	array(
	'type' => 'text',
	'label' => "Instagram",
	'section' => 'data_site_section',
	'settings' => 'site_Inst'
	)
	);
	
}
add_action( 'customize_register', 'mytheme_customize_register' );
	
	

function the_breadcrumb(){
 
	// получаем номер текущей страницы
	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
 
	$separator = ' / '; //  »
 
	// если главная страница сайта
	if( is_front_page() ){
 
		if( $pageNum > 1 ) {
			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
		} else {
			echo 'Вы находитесь на главной странице';
		}
 
	} else { // не главная
 
		echo '<a href="' . site_url() . '">Главная</a>' . $separator;
 
 
		if( is_single() ){ // записи
 
			the_category(', '); echo $separator; the_title();
 
		} elseif ( is_page() ){ // страницы WordPress 
 
			the_title();
 
		} elseif ( is_category() ) {
 
			single_cat_title();
 
		} elseif( is_tag() ) {
 
			single_tag_title();
 
		} elseif ( is_day() ) { // архивы (по дням)
 
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
			echo get_the_time('d');
 
		} elseif ( is_month() ) { // архивы (по месяцам)
 
			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
			echo get_the_time('F');
 
		} elseif ( is_year() ) { // архивы (по годам)
 
			echo get_the_time('Y');
 
		} elseif ( is_author() ) { // архивы по авторам
 
			global $author;
			$userdata = get_userdata($author);
			echo 'Опубликовал(а) ' . $userdata->display_name;
 
		} elseif ( is_404() ) { // если страницы не существует
 
			echo 'Ошибка 404';
 
		}
 
		if ( $pageNum > 1 ) { // номер текущей страницы
			echo ' (' . $pageNum . '-я страница)';
		}
 
	}
 
}
