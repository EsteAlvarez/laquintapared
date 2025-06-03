<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container-section margins-sections"><!-- Desattles de la obra -->
        <h2><?php esc_html_e('Detalles generales', 'teatro-el-eclipse') ?></h2>
        <ul class="list-unstyled p-0 d-flex flex-column gap-3">
            <li class="d-flex gap-1"><?php esc_html_e('Categoría: ', 'teatro-el-eclipse'); ?><?php
                                                                                    $categories = get_the_category();

                                                                                    // Categorías a excluir por slug
                                                                                    $excluded_slugs = array('slider', 'destacados');

                                                                                    if ($categories) {
                                                                                        echo '<ul class="list-unstyled d-flex gap-2">';
                                                                                        foreach ($categories as $category) {
                                                                                            if (!in_array($category->slug, $excluded_slugs)) {
                                                                                                echo '<li><a class="link-sections-home" href="' . esc_url(get_category_link($category->term_id)) . '">' .
                                                                                                    esc_html($category->name) . '</a></li>';
                                                                                            }
                                                                                        }
                                                                                        echo '</ul>';
                                                                                    }
                                                                                    ?>
            </li>
            <li><?php esc_html_e('Fecha de presentación: ', 'teatro-el-eclipse'); ?> <span class="text-capitalize"><?php echo esc_html(get_field('fecha_de_presentacion')); ?></span></li>
            <li><?php esc_html_e('Clasificación de edad: ', 'teatro-el-eclipse'); ?><?php echo esc_html(get_field('clasificacion_de_edad')); ?></li>
            <li><?php esc_html_e('Horario de la función: ', 'teatro-el-eclipse'); ?><?php the_field('horario_de_la_funcion'); ?></li>
            <li><?php esc_html_e('Duración de la función: ', 'teatro-el-eclipse'); ?><?php echo esc_html(get_field('duracion')); ?></li>
            <li><?php esc_html_e('Valor de la entrada: ', 'teatro-el-eclipse'); ?><?php echo esc_html(get_field('valor_de_la_entrada')); ?></li>
        </ul>
    </section>

    <section class="container-section margins-sections"><!-- Sinapsis -->
        <h2><?php esc_html_e('Sinopsis', 'teatro-el-eclipse') ?></h2>
        <?php the_content(); ?>
    </section>

    <section class="container-section margins-sections"><!-- Recomendaciones -->
        <h2><?php esc_html_e('Recomendaciones', 'teatro-el-eclipse') ?></h2>
        <p class="mb-5"><?php echo wp_kses_post(get_field('recomendaciones')); ?></p>
        <a class="link-ticket fs-5" href="<?php echo esc_attr(get_field('enlace_a_ticketera')); ?>" target="_blank"><?php esc_html_e('Comprar Entrada', 'teatro-el-eclipse') ?></a>
    </section>

</div><!-- #post-<?php the_ID(); ?> -->