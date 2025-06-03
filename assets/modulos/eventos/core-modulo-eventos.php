<?php
/* Registro del Custom Post Type 'eventos' */

function eventos_register()
{
    $labels = array(
        'name'                  => _x('Eventos', 'post type general name'),
        'singular_name'         => _x('Evento', 'post type singular name'),
        'add_new'               => _x('Agregar', 'evento'),
        'add_new_item'          => __('Agregar Evento'),
        'edit_item'             => __('Editar Evento'),
        'new_item'              => __('Nuevo Evento'),
        'view_item'             => __('Ver Evento'),
        'search_items'          => __('Buscar Eventos'),
        'not_found'             => __('No se encontraron eventos'),
        'not_found_in_trash'    => __('No se encontraron eventos en la papelera'),
        'parent_item_colon'     => ''
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'eventos'),
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-calendar-alt',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'taxonomies'          => array('categoria-eventos', 'etiquetas-eventos'),
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'exclude_from_search' => false
    );

    register_post_type('eventos', $args);
}
add_action('init', 'eventos_register');

/* Registro de Taxonomía de Categoría para Eventos */
function categoria_eventos_register()
{
    register_taxonomy(
        'categoria-eventos',
        'eventos',
        array(
            'label'             => __('Categorías de Eventos'),
            'rewrite'           => array('slug' => 'categoria-eventos'),
            'hierarchical'      => true,
            'show_admin_column' => true,
            'show_in_quick_edit' => true,
        )
    );
}
add_action('init', 'categoria_eventos_register');

/* Registro de Taxonomía de Etiquetas para Eventos */
function etiquetas_eventos_register()
{
    register_taxonomy(
        'etiquetas-eventos',
        'eventos',
        array(
            'label'             => __('Etiquetas de Eventos'),
            'rewrite'           => array('slug' => 'etiquetas-eventos'),
            'hierarchical'      => false,
            'show_admin_column' => true,
            'show_in_quick_edit' => true,
        )
    );
}
add_action('init', 'etiquetas_eventos_register');

/* Registro de Hoja de Estilos para Eventos */
function cargar_estilos_eventos()
{
    wp_register_style('estilos-eventos', get_template_directory_uri() . '/assets/modulos/eventos/estilos-eventos.css', array(), false, 'all');
    wp_enqueue_style('estilos-eventos');
}
add_action('wp_enqueue_scripts', 'cargar_estilos_eventos');
