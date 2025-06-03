<?php

function theme_styles_functions()
{
    wp_enqueue_style('font-cormorant', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap', array(), null, 'all');
    wp_enqueue_style('font-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null, 'all');
    wp_enqueue_style('font-sacramento', 'https://fonts.googleapis.com/css2?family=Sacramento&display=swap', array(), null, 'all');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), null, 'all');
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'theme_styles_functions');