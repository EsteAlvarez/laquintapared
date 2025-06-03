<?php
add_filter('use_widgets_block_editor', '__return_false');

function theme_widgets()
{
    register_sidebar(
        array(
            'name' => 'Redes Sociales',
            'id' => 'rrss',
            'description' => 'Widget de redes sociales',
            'before_widget' => '<div class="text-white footer-widgets rrss-widget" tabindex="0" id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
    register_sidebar(
        array(
            'name' => 'navegacion',
            'id' => 'navegacion',
            'description' => 'Widget de navegacion',
            'before_widget' => '<div class="text-white footer-widgets footer-nav" tabindex="0" id="%1$s">',
            'after_widget' => '</div>',
        )
    );

}
add_action('widgets_init', 'theme_widgets');
