<?php

/**
 * dental1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dental1
 */

if (!defined('DENTAL1_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('DENTAL1_VERSION', '0.1.0');
}

if (!defined('DENTAL1_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `dental1_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'DENTAL1_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('dental1_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dental1_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dental1, use a find and replace
		 * to change 'dental1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('dental1', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'wp-block-styles' );

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');
	}
endif;
add_action('after_setup_theme', 'dental1_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dental1_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Footer', 'dental1'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'dental1'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'dental1_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function dental1_scripts()
{
	wp_enqueue_style('dental1-style', get_stylesheet_uri(), array(), DENTAL1_VERSION);
	wp_enqueue_script('dental1-script', get_template_directory_uri() . '/js/script.min.js', array(), DENTAL1_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

}
add_action('wp_enqueue_scripts', 'dental1_scripts');

/**
 * Enqueue the block editor script.
 */
function dental1_enqueue_block_editor_script()
{
	wp_enqueue_script(
		'dental1-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		DENTAL1_VERSION,
		true
	);
}
add_action('enqueue_block_editor_assets', 'dental1_enqueue_block_editor_script');

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from DENTAL1_TYPOGRAPHY_CLASSES.
 */
function dental1_enqueue_typography_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'dental1-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			DENTAL1_VERSION,
			true
		);
		wp_add_inline_script('dental1-typography', "tailwindTypographyClasses = '" . esc_attr(DENTAL1_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'dental1_enqueue_typography_script');


function custom_theme_assets_url()
{
	if (is_production_environment()) {
		return '/wp-content/themes/dental1/theme/assets/';
	} else {
		return '/wp-content/themes/dental1/theme/assets/';
	}
}

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function dental1_tinymce_add_class($settings)
{
	$settings['body_class'] = DENTAL1_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'dental1_tinymce_add_class');


require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/menus.php';


class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {
    // Start Level
    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );
        // Add 'sub-menu' class and also 'hidden' class
        $classes = array( 'sub-menu', 'hidden' );
        $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        
        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }
}

function custom_services_section() {
    ob_start();
    ?>
    <section id="services" class="relative">
        <div class="md:flex justify-between items-center">
            <header class="flex flex-col items-center gap-2 text-center mb-2 md:text-left md:items-start">
                <h2 class="text-center md:text-left">
                    Affordable options<br><span class="!text-primary">for all!</span>
                </h2>
            </header>
            <div class="flex justify-center items-center mt-12 gap-4">
                <p class="max-w-lg text-center md:text-left">It’s never been more affordable to look after your oral health. Our affordable options enable you to save money and avoid large out-of-pocket expenses.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 items-start justify-between mt-20 gap-y-16">
            <a href="/no-gap-terms-conditions/" class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">01</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-health-insurance-6206424.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">Private health Insurance Patients</p>
                <p class="text-left">Why pay hundreds on insurance just to be stung with a gap? Our No Gap Policy means you pay nothing out of pocket on Exams, Cleans, and X-rays.</p>
            </a>
            <a href="/no-gap" class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">02</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-patients-3811611.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">No insurance Patients</p>
                <p class="text-left">Affordable preventative dental care, for about the cost of a cup of coffee per week – Our from $119 check-up and clean package means you receive all your preventative dental care including an Exam, clean and X-rays.</p>
            </a>
            <a href="/child-dental-benefits-scheme/" class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">03</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-pedodontics-3981829.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">Child dental Benefits</p>
                <p class="text-left">$1095 in government benefits, bulk billed, over two calendar years, for eligible children aged 2-17. The CDBS covers a wide range of services and promotes good early habits!</p>
            </a>
            <a href="/payment-options/" class="flex flex-col gap-2 items-start">
                <div class="relative bg-primary rounded-full p-8">
                    <div class="bg-gray-50 rounded-full absolute left-[50%] translate-x-[-50%] text-sm translate-y-[-50%] top-0 flex items-center justify-center" style="width: 44px; height: 44px; text-align:center">04</div>
                    <img src="/wp-content/themes/dental1/theme/assets/images/about/noun-strategic-plan-5780211.png" class="w-[64px] h-[64px]" />
                </div>
                <p class="text-black text-left text-lg font-semibold">Financing Plans</p>
                <p class="text-left">Available for larger treatments, our financing options enable you to split the payment on treatments that can leave a dent in your pocket.</p>
            </a>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('services_section', 'custom_services_section');