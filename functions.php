<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * CARGAR ESTILOS Y SCRIPTS DE SOFIA (TU CÓDIGO)
 */
function dr_javier_scripts() {
    // Fuentes Google
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,300;0,6..96,400;1,6..96,300;1,6..96,400&family=Italiana&family=Jost:wght@300;400;500&display=swap', false);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', false);
    
    // Tu style.css
    wp_enqueue_style('dr-javier-style', get_stylesheet_uri());
    
    // Tu JS principal (corregido para que use la ruta del tema activo)
    wp_enqueue_script('dr-javier-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'dr_javier_scripts');

// Registrar tus menús
register_nav_menus(array(
    'primary' => __('Menú Principal', 'dr-javier'),
));

/**
 * LÓGICA REQUERIDA POR HELLO ELEMENTOR (PARA QUE NO DE ERROR)
 */
if ( ! function_exists( 'hello_elementor_setup' ) ) {
	function hello_elementor_setup() {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'align-wide' );
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

// Cargar el header/footer de Elementor si el usuario lo define
if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	function hello_elementor_display_header_footer() {
		return true;
	}
}