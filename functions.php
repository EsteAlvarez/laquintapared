<?php

/**
 * teatro-el-eclipse functions and definitions
 *
 * @package teatro-el-eclipse
 * @since teatro-el-eclipse 1.0
 */

if (! isset($content_width)) {
    $content_width = 800; /* px */
}

if (! function_exists('teatro_el_eclipse_setup')) :

    function teatro_el_eclipse_setup()
    {
        /* Enable support for post thumbnails and featured images */
        add_theme_support('post-thumbnails');

        /* Allow WordPress to manage the document title. By adding theme support, we declare that this theme does not use a <title> tag hardcoded in the document header, and expect WordPress to provide it for us. */
        add_theme_support('title-tag');

        /* Add support for excerpts in pages */
        add_post_type_support('page', 'excerpt');

        /* Support for wp_nav_menu() function */
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary')
            )
        );

        /* Change the default core markup for the search form, comment form, and comments to generate valid HTML5. */
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

        /* Enable support for the following post formats: aside, gallery, quote, image, and video. */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        /* Configure the core WordPress custom background feature. */
        add_theme_support('custom-background', [
            'default-color'          => 'ffffff',
            'default-image'          => '',
            'wp-head-callback'       => '_custom_background_cb',
            'default-repeat'         => 'no-repeat',
            'default-position-x'     => 'center',
            'default-size'           => 'cover',
        ]);

        /* Add support for selective refresh of widgets in the Customizer. */
        add_theme_support('customize-selective-refresh-widgets');

        /* Add support for a custom logo */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

    }
endif;
add_action('after_setup_theme', 'teatro_el_eclipse_setup');

/* Navigation styles */
function navigation_styles()
{
    wp_enqueue_style('navigation-home-styles', get_template_directory_uri() . '/template-parts/layout/header-content/header-styles/home-header-content.css', array(), null, 'all');
    wp_enqueue_style('navigation-pages-styles', get_template_directory_uri() . '/template-parts/layout/header-content/header-styles/pages-header-content.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'navigation_styles');

/* Assets */
if (file_exists(get_template_directory() . '/assets/assets.php')) {
    include get_template_directory() . '/assets/assets.php';
}
