<?php
function teatro_el_eclipse_breadcrumbs()
{
    $separator = apply_filters('teatro_el_eclipse_breadcrumbs_separator', ' / ');
    $home_label = esc_html__('Inicio', 'teatro-el-eclipse');

    if (!is_home() && !is_front_page()) {
        echo '<nav class="breadcrumbs" aria-label="breadcrumbs">';
        echo '<a class="breadcrumbs__home" href="' . esc_url(home_url()) . '">' . $home_label . '</a>' . $separator;

        if (is_category() || is_tag() || is_tax()) {
            $term = get_queried_object();
            echo '<span class="breadcrumbs__current">' . esc_html($term->name) . '</span>';
        } elseif (is_year()) {
            echo '<span class="breadcrumbs__current">' . get_the_date('Y') . '</span>';
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_date('Y')) . '">' . get_the_date('Y') . '</a>' . $separator;
            echo '<span class="breadcrumbs__current">' . get_the_date('F') . '</span>';
        } elseif (is_single()) {
            $categories = get_the_category();

            if (!empty($categories)) {
                foreach ($categories as $cat) {
                    if ($cat->slug !== 'slider' && $cat->slug !== 'destacados') {
                        $category_link = esc_url(get_category_link($cat->term_id));
                        echo '<a href="' . $category_link . '">' . esc_html($cat->name) . '</a>' . $separator;
                        break; // solo mostramos la primera categoría válida
                    }
                }
            }

            echo '<span class="breadcrumbs__current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_page()) {
            $ancestors = array_reverse(get_post_ancestors(get_the_ID()));
            foreach ($ancestors as $ancestor) {
                echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>' . $separator;
            }
            echo '<span class="breadcrumbs__current">' . esc_html(get_the_title()) . '</span>';
        } elseif (is_search()) {
            printf('<span class="breadcrumbs__current">' . esc_html__('Resultados de búsqueda para: %s', 'teatro-el-eclipse') . '</span>', esc_html(get_search_query()));
        } elseif (is_404()) {
            echo '<span class="breadcrumbs__current">' . esc_html__('Página no encontrada', 'teatro-el-eclipse') . '</span>';
        } elseif (is_author()) {
            $author = get_queried_object();
            echo '<span class="breadcrumbs__current">' . esc_html__('Autor: ', 'teatro-el-eclipse') . esc_html($author->display_name) . '</span>';
        }

        echo '</nav>';
    }
}
