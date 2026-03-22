<?php
function dr_javier_scripts() {
    // Cargamos una fuente elegante (Playfair Display para títulos y Lato para texto)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Playfair+Display:ital,wght@0,600;1,400&display=swap', false);
    
    // Cargamos tu archivo style.css
    wp_enqueue_style('dr-javier-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'dr_javier_scripts');

// Registrar menús
register_nav_menus(array(
    'primary' => __('Menú Principal', 'dr-javier'),
));