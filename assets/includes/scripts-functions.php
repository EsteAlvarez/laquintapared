<?php

function theme_script_functions()
{
    if (!is_admin()) {

        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js', array(), null, true);
        wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
    }
}

add_action('wp_enqueue_scripts', 'theme_script_functions', 999);
