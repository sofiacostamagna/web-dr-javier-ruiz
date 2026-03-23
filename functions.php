<?php
function dr_javier_scripts() {
    // Cargamos una fuente elegante (Playfair Display para títulos y Lato para texto)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,300;0,6..96,400;1,6..96,300;1,6..96,400&family=Italiana&family=Jost:wght@300;400;500&display=swap', false);
    
    // Font Awesome (iconos redes sociales)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', false);

    // Cargamos tu archivo style.css
    wp_enqueue_style('dr-javier-style', get_stylesheet_uri());

    // Cargamos el JS principal
    wp_enqueue_script('dr-javier-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'dr_javier_scripts');

// Registrar menús
register_nav_menus(array(
    'primary' => __('Menú Principal', 'dr-javier'),
));