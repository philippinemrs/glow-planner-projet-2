<?php
 
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
 
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
 
function script_loaders() {
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
 
    );
 
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/style.css',
        1
    );
    wp_enqueue_script(
        'bootstrap-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        true,
    );
}
 
add_action('wp_enqueue_scripts', 'script_loaders');
 
function theme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'theme_add_woocommerce_support'); 