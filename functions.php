<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'HELLO_ELEMENTOR_VERSION', '3.2.0' );

if ( ! isset( $content_width ) ) {
	$content_width = 800;
}

if ( ! function_exists( 'hello_elementor_setup' ) ) {
	function hello_elementor_setup() {
		if ( is_admin() ) {
			hello_maybe_update_theme();
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_load_textdomain', [ true ], '2.0', 'hello_elementor_load_textdomain' );
		if ( apply_filters( 'hello_elementor_load_textdomain', $hook_result ) ) {
			load_theme_textdomain( 'hello-elementor', get_template_directory() . '/languages' );
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_register_menus', [ true ], '2.0', 'hello_elementor_register_menus' );
		if ( apply_filters( 'hello_elementor_register_menus', $hook_result ) ) {
			register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'hello-elementor' ) ] );
			register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'hello-elementor' ) ] );
		}

		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_add_theme_support', [ true ], '2.0', 'hello_elementor_add_theme_support' );
		if ( apply_filters( 'hello_elementor_add_theme_support', $hook_result ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ] );
			add_theme_support( 'custom-logo', [ 'height' => 100, 'width' => 350, 'flex-height' => true, 'flex-width' => true ] );

			$hook_result = apply_filters_deprecated( 'elementor_hello_theme_add_woocommerce_support', [ true ], '2.0', 'hello_elementor_add_woocommerce_support' );
			if ( apply_filters( 'hello_elementor_add_woocommerce_support', $hook_result ) ) {
				add_theme_support( 'woocommerce' );
				add_theme_support( 'wc-product-gallery-zoom' );
				add_theme_support( 'wc-product-gallery-lightbox' );
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

function hello_maybe_update_theme() {
	$db_version = get_option( 'hello_theme_db_version' );
	if ( ! $db_version ) {
		update_option( 'hello_theme_db_version', HELLO_ELEMENTOR_VERSION );
	}
}

if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	function hello_elementor_display_header_footer() {
		$hook_result = apply_filters_deprecated( 'elementor_hello_theme_header_footer', [ true ], '2.0', 'hello_elementor_display_header_footer' );
		return apply_filters( 'hello_elementor_display_header_footer', $hook_result );
	}
}

if ( ! function_exists( 'hello_header_footer_experiment_active' ) ) {
	function hello_header_footer_experiment_active() {
		return false;
	}
}

if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	function hello_elementor_scripts_styles() {
		$enqueue_basic_style = apply_filters_deprecated( 'elementor_hello_theme_enqueue_style', [ true ], '2.0', 'hello_elementor_enqueue_style' );
		$min_suffix          = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		if ( apply_filters( 'hello_elementor_enqueue_style', $enqueue_basic_style ) ) {
			wp_enqueue_style( 'hello-elementor', get_template_directory_uri() . '/style' . $min_suffix . '.css', [], HELLO_ELEMENTOR_VERSION );
		}

		if ( apply_filters( 'hello_elementor_enqueue_theme_style', true ) ) {
			wp_enqueue_style( 'hello-elementor-theme-style', get_template_directory_uri() . '/theme' . $min_suffix . '.css', [], HELLO_ELEMENTOR_VERSION );
		}

		if ( hello_header_footer_experiment_active() ) {
			wp_enqueue_style( 'hello-elementor-header-footer', get_template_directory_uri() . '/header-footer' . $min_suffix . '.css', [], HELLO_ELEMENTOR_VERSION );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

/**
 * =====================================================
 * CÓDIGO PERSONALIZADO DR. JAVIER RUIZ — por Sofía
 * =====================================================
 */
function dr_javier_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,300;0,6..96,400;1,6..96,300;1,6..96,400&family=Italiana&family=Jost:wght@300;400;500&display=swap', false );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', false );
    wp_enqueue_style( 'dr-javier-style', get_template_directory_uri() . '/style.css', [], '1.2' );
    wp_enqueue_script( 'dr-javier-main', get_template_directory_uri() . '/js/main.js', [], '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'dr_javier_scripts' );

// Menús personalizados
register_nav_menus([
    'primary' => __( 'Menú Principal', 'dr-javier' ),
]);

// Forzar que el header y footer del tema se muestren
add_filter( 'tahefobu_hide_theme_header', '__return_false' );
add_filter( 'tahefobu_hide_theme_footer', '__return_false' );

// Scroll suave con offset para header fijo
add_action( 'wp_head', function() {
    echo '<style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }
    </style>';
});

